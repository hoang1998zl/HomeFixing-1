<?php
use App\Models\Products;
$products = Products::where('status', 1)->limit(12)->get();
?>
<div class="container mx-auto my-4">
    <div class="products_grid">
        @if (count($products) == 0)
            <p class="text-center">Không có sản phẩm</p>
        @else
            @foreach ($products as $key => $product)
                <div class="product">
                    <div class="img-wrapper">
                        <img src="https://homefixing.vn/img/index/app.png" alt="">

                        <div class="hoverbox">
                            <a href="{{ route('san-pham-chi-tiet', $product->id) }}">
                                Xem chi tiết
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <a href="{{ route('san-pham-chi-tiet', $product->id) }}">
                            <p class="product-title">
                                {{ $product->name }}
                            </p>
                        </a>

                        <p class="product-description">
                            {{ $product->short_description }}
                        </p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
