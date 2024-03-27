@php
    $active['home'] = '';
    $active['san-pham'] = '';
    $active['dich-vu'] = '';
    $active['goi-dich-vu'] = '';
    $active['tin-tuc'] = '';
    $active['lien-he'] = '';
    $active['chinh-sach'] = '';
    $active['ve-chung-toi'] = '';
    if (Request::segment(1)) {
        $active[Request::segment(1)] = 'active';
    } else {
        $active['home'] = 'active';
    }
@endphp
<header id="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/LOGO.png') }}" alt="">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#headerID"
                aria-expanded="false">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="headerID">
                <ul class="navbar-nav mx-auto mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ $active['home'] }}" href="{{ route('home') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active['san-pham'] }}" href="{{ route('san-pham') }}">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active['dich-vu'] }}" href="{{ route('dich-vu') }}">dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active['goi-dich-vu'] }}" href="{{ route('goi-dich-vu') }}">gói dịch
                            vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active['tin-tuc'] }}" href="{{ route('tin-tuc') }}">tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active['lien-he'] }}" href="{{ route('lien-he') }}">liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active['chinh-sach'] }}" href="{{ route('chinh-sach') }}">chính
                            sách</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active['ve-chung-toi'] }}" href="{{ route('ve-chung-toi') }}">về chúng
                            tôi</a>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0" action="">
                    <a class="ungDung-button my-2 my-sm-0" href="/tai-ung-dung/#dl">Ứng dụng</a>
                </form>
            </div>
        </div>
    </nav>
</header>
