<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <div class="w-screen h-screen relative">
        <img src="{{ asset('img/bg-login.jpg') }}" alt="" class="w-full h-full object-cover relative">

        <form action="{{ route('login') }}" method="POST"
            class="w-11/12 lg:w-full lg:max-w-md absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            @csrf
            <div class="w-full flex justify-center">
                <h1 class="text-4xl font-bold mb-5 text-white filter drop-shadow">
                    Trang quản trị
                </h1>
            </div>

            <div class="w-full flex flex-col gap-4 bg-white rounded-lg shadow-lg px-10 py-10 filter drop-shadow">
                <div class="w-full text-center font-bold text-slate-800">
                    Mời bạn đăng nhập
                </div>

                @auth
                    <p>
                        Đã đăng nhập
                    </p>
                @endauth

                <div class="w-full flex justify-center">
                    <input type="text" id="email" name="email"
                        class="w-full h-10 rounded px-4 focus:outline-none" placeholder="Tên đăng nhập" required>
                </div>

                <div class="w-full flex justify-center">
                    <input type="password" id="password" name="password"
                        class="w-full h-10 rounded px-4 focus:outline-none" placeholder="Mật khảu" required>
                </div>

                <div class="w-full flex justify-center">
                    <button type="submit"
                        class="w-full h-10 rounded px-4 bg-blue-600 text-white font-semibold focus:outline-none">
                        Đăng nhập
                    </button>
                </div>

            </div>

        </form>
    </div>

</body>
