<?php
use App\Models\Products;
use App\Models\Category;
$path = $_SERVER['REQUEST_URI'];
$parts = explode('/', $path);
$id = end($parts);
$product = Products::find($id);
$products = Products::where('category', $product->category)
    ->where('status', 1)
    ->where('id', '!=', $id)
    ->orderBy('created_at', 'desc')
    ->limit(4)
    ->get();
$categorylist = Category::all();
?>
<x-frame>
    <div class="container py-3">
        <div class="breakcumb-index">
            <a href="{{ route('home') }}">Trang chủ</a>
            <span class="mx-3">></span>
            <a href="{{ route('san-pham') }}">Sản phẩm</a>
            <span class="mx-3">></span>
            <span>{{ $product->name }}</span>
        </div>
    </div>
    <div id="product-detail" class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="image-wrapper">
                    <img src="{{ asset('img/products/') }}/{{ $product->image }}" alt="">
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="detail-wrapper">
                    <p class="product-category">
                        @foreach ($categorylist as $key => $category)
                            @if ($category->id == $product->category)
                                <span>{{ $category->name }}</span>
                            @endif
                        @endforeach
                    </p>
                    <p class="product-title">
                        {{ $product->name }}
                    </p>
                    <p class="product-content">
                        Mô tả sản phẩm
                    </p>
                    <p class="product-description">
                        Kính gửi Quý Khách Hàng. <br>
                        Xin vui lòng liên hệ với chúng tôi để biết chi tiết hơn về sản phẩm. <br>
                        Xin chân thành cảm ơn!
                    </p>

                    <div class="product-button">
                        <button type="button">
                            Liên hệ
                        </button>
                        <button type="button">
                            Mua ngay
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="w-full d-flex justify-content-between align-items-center">
            <p class="text-uppercase">
                Các sản phẩm liên quan
            </p>
            <a href="{{ route('san-pham') }}" style="color:#2092d1;">
                <span style="text-decoration:underline">Xem thêm</span>
                >>
            </a>
        </div>

        <div class="products_grid mb-5 mt-2">
            @if (count($products) == 0)
                <p>Không có sản phẩm</p>
            @else
                @foreach ($products as $key => $item)
                    <div class="product">
                        <div class="img-wrapper">
                            <img src="https://homefixing.vn/img/index/app.png" alt="">

                            <div class="hoverbox">
                                <a href="{{ route('san-pham-chi-tiet', $item->id) }}">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <a href="{{ route('san-pham-chi-tiet', $item->id) }}">
                                <p class="product-title">
                                    {{ $item->name }}
                                </p>
                            </a>
                            <p class="product-description">
                                {{ $item->short_description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</x-frame>
