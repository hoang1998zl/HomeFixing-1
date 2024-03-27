@extends('auth.dashboard')
@section('content')
    <div class="title">
        <p>Danh mục sản phẩm</p>
    </div>
    <div class="content-wrapper admincategory">
        <table>
            <thead>
                <th>
                    STT
                </th>
                <th>
                    Tên
                </th>
                <th>
                    Xóa
                </th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        <form action="{{ route('productcategory.store') }}" method="POST">
                            @csrf
                            <input id="newCategory" name="name" type="text" placeholder="Nhập tên danh mục">
                            <button type="submit" id="newCategory-btn"></button>
                            <script>
                                document.getElementById("newCategory").addEventListener("keydown", function(event) {
                                    if (event.keyCode === 13) {
                                        event.preventDefault();
                                        document.getElementById("newCategory-btn").click();
                                    }
                                });
                            </script>
                        </form>
                    </td>
                    <td>
                        <button type="button" class="reset-btn">
                            <i class="fa-solid fa-trash-alt"></i>
                        </button>
                        <script>
                            document.querySelector('.reset-btn').addEventListener('click', function() {
                                document.getElementById("newCategory").value = "";
                            });
                        </script>
                    </td>
                </tr>

                @foreach ($dataCategory as $key => $value)
                    <tr>
                        <td>
                            {{ $key + 2 }}
                        </td>
                        <td>
                            <form action="{{ route('productcategory.update', $value->id) }}" method="GET">
                                @csrf
                                <input id="{{ $value->id }}input" type="text" name="name"
                                    value="{{ $value->name }}">
                                <button type="submit" id="{{ $value->id }}button"></button>
                                <script>
                                    document.getElementById("{{ $value->id }}input").addEventListener("keyup", function(event) {
                                        if (event.keyCode === 13) {
                                            event.preventDefault();
                                            document.getElementById("{{ $value->id }}input").submit();
                                        }
                                    });
                                </script>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('productcategory.destroy', $value->id) }}" method="POST">
                                @csrf
                                <button type="submit" onclick="return confirm('Bạn có chắc muốn xóa?')">
                                    <i class="fa-solid fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
