@extends('auth.dashboard')
@section('content')
    <div class="title">
        <p>Danh sách sản phẩm</p>
    </div>
    <div class="content-wrapper admincategory">
        <a href="{{ route('addproduct') }}" class="addButton">
            Thêm sản phẩm
        </a>
        <table>
            <thead>
                <th style="width: 8rem">
                    STT
                </th>
                <th style="width: auto">
                    Tiêu đề
                </th>
                <th style="width: 14rem">
                    hình ảnh
                </th>
                <th style="width: 10rem">
                    giá
                </th>
                <th style="width: 14rem">
                    trạng thái
                </th>
                <th style="width: 20rem">
                    chỉnh sửa
                </th>
                <th style="width: 10rem">
                    Ẩn hiện
                </th>
                <th style="width: 7rem">
                    Xóa
                </th>
            </thead>
            <tbody>
                @foreach ($products as $key => $product)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            <p class="w-full">{{ $product->name }}</p>
                        </td>
                        <td>
                            <img src="{{ asset('img/' . $product->image) }}" alt=""
                                style="width: 100%;object-fit: contain">
                        </td>
                        <td>
                            <p class="w-full">{{ $product->price }}</p>
                        </td>
                        <td>
                            <p class="w-full">{{ $product->status }}</p>
                        </td>
                        <td>
                            <a href="{{ route('product.list.update', $product->id) }}"
                                style="background-color: #2092d1;color: #fff;padding: 0.5rem 1rem;border-radius: 0.5rem">
                                Chỉnh sửa
                            </a>
                        </td>
                        <td>
                            <form id="changeStatus_{{ $product->id }}" action="{{ route('productlist.update', $product->id) }}" method="POST">
                                @csrf
                                <input type="checkbox" name="" id="" style="width: 1.8rem;aspect-ratio: 1"
                                    {{ $product->status == 1 ? 'checked' : '' }}
                                    onclick="document.getElementById('changeStatus_{{ $product->id }}').submit();">
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('productlist.destroy', $product->id) }}" method="POST">
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
