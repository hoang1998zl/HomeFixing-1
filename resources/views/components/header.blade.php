@php
    $active['home'] = '';
    $active['dich-vu'] = '';
    $active['goi-dich-vu'] = '';
    $active['tin-tuc'] = '';
    $active['lien-he'] = '';
    if(Request::segment(1)){
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
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#headerID" aria-expanded="false">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="headerID">
                <ul class="navbar-nav mx-auto mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{$active['home']}}" href="/">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{$active['dich-vu']}}" href="/dich-vu">dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{$active['goi-dich-vu']}}" href="/goi-dich-vu">gói dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{$active['tin-tuc']}}" href="/tin-tuc">tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{$active['lien-he']}}" href="/lien-he">liên hệ</a>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0" action="">
                    <a class="ungDung-button my-2 my-sm-0"  href="/tai-ung-dung/#dl">Ứng dụng</a>
                </form>
            </div>
        </div>
    </nav>
</header>