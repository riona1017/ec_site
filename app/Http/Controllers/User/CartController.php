<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Stock;
use App\Services\CartService;

class CartController extends Controller
{
    public function index()
    {
        $user = User::findOrFail(Auth::id());
        $products = $user->products;
        $totalPrice = 0;

        foreach($products as $product) {
            $totalPrice += $product->price * $product->pivot->quantity;
        }

        return view('user.cart', compact('products', 'totalPrice'));
    }

    public function add(Request $request)
    {
        //カートの中身
        $itemInCart = Cart::where('product_id', $request->product_id)
        ->where('user_id', Auth::id())->first();

        if($itemInCart) {
            $itemInCart->quantity += $request->quantity;
            $itemInCart->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
        }

        return redirect()->route('user.cart.index');
    }

    public function delete($id) 
    {
        Cart::where('product_id', $id)
        ->where('user_id', Auth::id())
        ->delete();

        return redirect()->route('user.cart.index');
    }


    public function checkout()
    {
        ////
        $items = Cart::where('user_id', Auth::id())->get();
        $products = CartService::getItemsInCart($items);
        ////


        $user = User::findOrFail(Auth::id());
        $products = $user->products;
        
        //カートに入っている情報
        $lineItems = [];

        foreach($products as $product) {
            $quantity = '';
            $quantity = Stock::where('product_id', $product->id)->sum('quantity'); //現在の在庫数

            //在庫数が足りない場合はカート画面に戻す
            if($product->pivot->quantity > $quantity) {
                return redirect()->route('user.cart.index');
            } else {
                $lineItem = [
                    'price_data' => [
                        'unit_amount' => $product->price,
                        'currency' => 'JPY',
                        'product_data' => [
                            'name' => $product->name,
                            'description' => $product->information,
                        ],
                    ],
                    'quantity' => $product->pivot->quantity,
                ];
                array_push($lineItems, $lineItem); //配列$lineItemsに$lineItemを追加
            }
        }
        foreach($products as $product) {
            Stock::create([
                'product_id' => $product->id,
                'type' => \Constant::PRODUCT_LIST['reduce'],
                'quantity' => $product->pivot->quantity * -1,
            ]);
        }
        
        //stripeシークレットキー読み込み
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [$lineItems],
            'mode' => 'payment',
            'success_url' => route('user.cart.success'),
            'cancel_url' => route('user.cart.cancel'),
        ]);

        //ver変更で使用不可
        //$publicKey = env('STRIPE_PUBLIC_KEY');
        //return view('user.checkout', compact('session', 'publicKey'));

        return redirect($session->url, 303);
        
    }

    //決済成功の場合
    public function success()
    {
        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('user.items.index');
    }

    //キャンセルの場合
    public function cancel()
    {
        $user = User::findOrFail(Auth::id());

        foreach($user->products as $product) {
            Stock::create([
                'product_id' => $product->id,
                'type' => \Constant::PRODUCT_LIST['add'],
                'quantity' => $product->pivot->quantity,
            ]);
        }

        return redirect()->route('user.cart.index');
    }
}
