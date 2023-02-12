<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;
use App\Models\SecondaryCategory;
use App\Models\Image;

class Product extends Model
{
    use HasFactory;

    public function shop() {
        return $this->belongsTo(Shop::class);
    }

    public function category() {
        return $this->belongsTo(SecondaryCategory::class, 'secondary_category_id');
    }

    public function imageFirst() { //image1だと名前同じになりエラーになるのでFirstに変更
        return $this->belongsTo(Image::class, 'image1', 'id');
    }
}
