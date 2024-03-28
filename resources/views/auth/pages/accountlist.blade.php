@extends('auth.dashboard')
@section('content')
    <div class="title">
        <p>Danh sách tài khoản</p>
    </div>
    <div class="content-wrapper addproductmain">
        <table>
            <thead>
                <th style="width: 8rem">
                    STT
                </th>
                <th style="width: auto">
                    Tên nhân viên
                </th>
                <th>
                    Email
                </th>
                <th>
                    Mật khẩu
                </th>
                <th style="width: 8rem">
                    Xóa
                </th>
            </thead>
            <tbody>
                <form action="{{ route('account.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            <input type="text" name="name" placeholder="Tên nhân viên">
                        </td>
                        <td>
                            <input type="text" name="email" placeholder="Email">
                        </td>
                        <td>
                            <input type="text" name="password" placeholder="Mật khẩu">
                        </td>
                        <td>
                            <button type="submit" style="font-weight: 700;background-color: #2092d1;">
                                <i class="fa-solid fa-save"></i>
                            </button>
                        </td>
                    </tr>
                </form>
                @foreach ($users as $key => $user)
                    <tr>
                        <td>
                            {{ $key + 2 }}
                        </td>
                        <td>
                            <form action="{{ route('account.update', $user->id) }}" method="POST">
                                @csrf
                                <input type="text" name="name" placeholder="Tên nhân viên" value="{{ $user->name }}">
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('account.update', $user->id) }}" method="POST">
                                @csrf
                                <input type="text" name="email" placeholder="Email" value="{{ $user->email }}">
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('account.update', $user->id) }}" method="POST">
                                @csrf
                                <input type="text" name="password" placeholder="Mật khẩu" value="{{ $user->password }}">
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('account.destroy', $user->id) }}" method="POST">
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
