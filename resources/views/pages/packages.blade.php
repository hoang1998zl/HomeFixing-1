<x-frame>
    <x-menu/>
    <section class="service-grid">
        <div class="service-item">
            <img src="{{asset('img/service_packages/sua_san.png')}}" alt="">
            <h4>dịch vụ sửa chữa sàn</h4>
            <div class="w-100 d-flex flex-wrap justify-content-around align-items-center gap-3">
                <button type="button">
                    500.000đ
                </button>
                <button type="button">
                    Thêm vào giỏ hàng
                </button>
            </div>
        </div>
    </section>

    <div class="w-100 d-flex justify-content-center">
        <button class="my-5 mx-auto bg-transparent border-0">
            <img src="{{asset('img/icon/more.png')}}" alt="" style="width: 7vw;">
        </button>
    </div>
    
    <x-mobile-app />
</x-frame>