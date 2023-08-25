@switch(Request::segment(1))
    @case('dich-vu')
        <section class="banner">
            <img src="{{asset('img/banner/type2.png')}}" alt="">
        </section>
        @break;
    @case('goi-dich-vu')
        <section class="banner">
            <img src="{{asset('img/banner/type3.jpg')}}" alt="" class="w-100">
        </section>
        @break;
    @default:
        <div id="banner_ID" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{asset('/img/banner/1.jpg')}}" class="w-100 d-block" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Giải pháp sửa chữa</h3>
                        <p>Nâng tầm chất lượng cuộc sống</p>
                        <ol class="carousel-indicators">
                            <li data-bs-target="#banner_ID" data-bs-slide-to="0" class="active" aria-label="First slide"></li>
                            <li data-bs-target="#banner_ID" data-bs-slide-to="1" aria-label="Second slide"></li>
                            <li data-bs-target="#banner_ID" data-bs-slide-to="2" aria-label="Third slide"></li>
                            <li data-bs-target="#banner_ID" data-bs-slide-to="3" aria-label="Four slide"></li>
                        </ol>
                        <a href="#" class="khamPha-button">Khám phá</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/banner/2.jpg')}}" class="w-100 d-block" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Giải pháp sửa chữa</h3>
                        <p>Nâng tầm chất lượng cuộc sống</p>
                        <ol class="carousel-indicators">
                            <li data-bs-target="#banner_ID" data-bs-slide-to="0" aria-label="First slide"></li>
                            <li data-bs-target="#banner_ID" data-bs-slide-to="1" class="active" aria-label="Second slide"></li>
                            <li data-bs-target="#banner_ID" data-bs-slide-to="2" aria-label="Third slide"></li>
                            <li data-bs-target="#banner_ID" data-bs-slide-to="3" aria-label="Four slide"></li>
                        </ol>
                        <a href="#" class="khamPha-button">Khám phá</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/banner/3.jpg')}}" class="w-100 d-block" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Giải pháp sửa chữa</h3>
                        <p>Nâng tầm chất lượng cuộc sống</p>
                        <ol class="carousel-indicators">

                            <li data-bs-target="#banner_ID" data-bs-slide-to="0" aria-label="First slide"></li>
                            <li data-bs-target="#banner_ID" data-bs-slide-to="1" aria-label="Second slide"></li>
                            <li data-bs-target="#banner_ID" data-bs-slide-to="2" class="active" aria-label="Third slide"></li>
                            <li data-bs-target="#banner_ID" data-bs-slide-to="3" aria-label="Four slide"></li>
                        </ol>
                        <a href="#" class="khamPha-button">Khám phá</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('/img/banner/4.jpg')}}" class="w-100 d-block" alt="Four slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Giải pháp sửa chữa</h3>
                        <p>Nâng tầm chất lượng cuộc sống</p>
                        <ol class="carousel-indicators">

                            <li data-bs-target="#banner_ID" data-bs-slide-to="0" aria-label="First slide"></li>
                            <li data-bs-target="#banner_ID" data-bs-slide-to="1" aria-label="Second slide"></li>
                            <li data-bs-target="#banner_ID" data-bs-slide-to="2" aria-label="Third slide"></li>
                            <li data-bs-target="#banner_ID" data-bs-slide-to="3" class="active" aria-label="Four slide"></li>
                        </ol>
                        <a href="#" class="khamPha-button">Khám phá</a>
                    </div>
                </div>
            </div>
        </div>
@endswitch