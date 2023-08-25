<section class="menu">
    <nav class="navbar">
        <div class="dropdown danhMuc-button">
            <button class="dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" data-bs-auto-close="outside">
                <i class="fa-solid fa-bars"></i>
                <strong>
                    Danh mục
                </strong>
            </button>
            <div class="dropdown-menu" aria-labelledby="triggerId">
                <a>
                    <img src="{{asset('img/icon/hammer.png')}}" alt="">
                    <span>Sửa chữa bếp</span>
                </a>
                <a>
                    <img src="{{asset('img/icon/hammer.png')}}" alt="">
                    <span>Sửa chữa cửa sổ</span>
                </a>
                <a>
                    <img src="{{asset('img/icon/hammer.png')}}" alt="">
                    <span>Sửa chữa nước</span>
                </a>
                <a>
                    <img src="{{asset('img/icon/hammer.png')}}" alt="">
                    <span>Sửa chữa cầu thang</span>
                </a>
                <a>
                    <img src="{{asset('img/icon/hammer.png')}}" alt="">
                    <span>Sửa chữa sàn nhà</span>
                </a>
                <a>
                    <img src="{{asset('img/icon/more.png')}}" alt="">
                </a>
            </div>
        </div>
        <form class="d-flex my-2 my-lg-0 mx-auto">
            <button type="submit">
                <i class="fa-solid fa-search"></i>
            </button>
            <input type="text" placeholder="Tìm kiếm...">
        </form>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="shoppingCart" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                    aria-expanded="false">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-start shoppingCart-menu" aria-labelledby="shoppingCart">
                    <div class="dropdown-items">
                        <div class="checkbox">
                            <input class="check-input" type="checkbox" id="checkbox-1" checked="true">
                            <label class="check-label" for="checkbox-1">
                                <img src="./img/ICON HÌNH DỊCH VỤ.png" alt="">
                            </label>
                        </div>
                        <img src="{{asset('img/icon/hammer.png')}}" alt="">
                        <div class="content">
                            <p>Sửa chữa bếp</p>
                            <strong>500.000đ</strong>
                        </div>
                    </div>
                    <div class="dropdown-items">
                        <div class="checkbox">
                            <input class="check-input" type="checkbox" id="checkbox-2" checked="true">
                            <label class="check-label" for="checkbox-2">
                                <img src="./img/ICON HÌNH DỊCH VỤ.png" alt="">
                            </label>
                        </div>
                        <img src="{{asset('img/icon/hammer.png')}}" alt="">
                        <div class="content">
                            <p>Sửa chữa cửa sổ</p>
                            <strong>500.000đ</strong>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-items dropdown--items">
                        <div class="checkbox">
                            <input class="check-input" type="checkbox" id="checkbox-3" checked="true">
                            <label class="check-label" for="checkbox-3">
                                <img src="./img/ICON HÌNH DỊCH VỤ.png" alt="">
                            </label>
                        </div>
                        <p>Tất cả:</p>
                        <span class="color_orange fw-bold text-end">1.000.000đ</span>
                    </div>
                    <div class="w-100 d-flex align-items-center">
                        <button>
                            <img src="{{asset('img/icon/back.png')}}" alt="">
                        </button>
                        <div class="content">
                            <a href="./xac-nhan-dich-vu.html">
                                <strong>Đặt dịch vụ</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</section>