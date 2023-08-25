<x-frame>
    <section class="contact">
        <div class="contact-wrapper contact-left">
            <img src="{{asset('img/contact/1.png')}}" alt="">
            <div class="title">
                Liên hệ với chúng tôi
                <div class="dots-wrapper">
                    <i class="fa-solid fa-circle"></i>
                    <i class="fa-solid fa-circle"></i>
                    <i class="fa-solid fa-circle"></i>
                </div>
            </div>
            <p>
                <strong>
                    Hotline
                </strong>
                <a href="tel:">
                    <img src="{{asset('img/icon/hotline.png')}}" alt="">
                    0283 744 6803
                </a>
            </p>
        </div>
        <div class="contact-wrapper contact-right">
            <form class="contact-form">
                <div class="form-row">
                    <label for="" class="form-label">
                        Họ và tên
                        <span>
                            *
                        </span>
                    </label>
                    <input class="form-input" type="text" placeholder="Nhập họ và tên">
                </div>
                <div class="form-row">
                    <label for="" class="form-label">
                        Số điện thoại
                        <span>
                            *
                        </span>
                    </label>
                    <input class="form-input" type="text" placeholder="Nhập số điện thoại">
                </div>
                <div class="form-row">
                    <label for="" class="form-label">
                        Địa chỉ
                        <span>
                            *
                        </span>
                    </label>
                    <input class="form-input" type="text" placeholder="Nhập địa chỉ">
                </div>
                <div class="form-row">
                    <label for="" class="form-label">
                        Nội dung
                        <span>
                            *
                        </span>
                    </label>
                    <textarea class="form-textarea" placeholder="Nhập thắc mắc, yêu cầu của quý khách"></textarea>
                </div>
                <div class="w-100 d-flex justify-content-center align-items-center">
                    <button class="button" type="button">Gửi đi</button>
                    <button class="button" type="button">Hủy</button>
                </div>
            </form>
        </div>
    </section>
    <x-service-intro/>
</x-frame>