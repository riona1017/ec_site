<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            ホーム
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex flex-wrap">
                        
                            @foreach ($products as $product)                    
                                <div class="w-1/2 md:w-1/4 p-2 md:p-4">
                                    <a href="">
                                        <div class="border rounded-md p-2 md:p-4">
                                            <x-thumbnail filename="{{$product->imageFirst->filename ?? ''}}" type="products" />
                                            <div class="mt-2 text-gray-700">{{ $product->name }}</div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>