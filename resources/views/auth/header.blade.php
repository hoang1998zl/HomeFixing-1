<div class="adminheader">
    <a href="{{ route('home') }}" class="font-bold mr-4">
        Website
    </a>

    <div class="adminmenu">
        <a href="">
            Tài khoản
        </a>
        <div class="dropdown">
            <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                Sản phẩm
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('category') }}">
                    Danh mục sản phẩm
                </a>
                <a class="dropdown-item" href="{{ route('productlist') }}">
                    Danh sách sản phẩm
                </a>
            </div>
        </div>
    </div>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">
            <i class="fa-solid fa-right-from-bracket"></i>
            Thoát
        </button>
    </form>
</div>
