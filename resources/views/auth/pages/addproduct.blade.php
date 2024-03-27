<?php
use App\Models\Category as ModelsCategory;
$dataCategory = ModelsCategory::all();
?>
@extends('auth.dashboard')
@section('content')
    <div class="title">
        <p>Thêm sản phẩm</p>
    </div>
    <div class="content-wrapper addproductmain">
        <form method="POST" action="{{ route('productlist.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-12">
                        <label>
                            Tên sản phẩm:
                        </label>
                        <input type="text" name="name" placeholder="Tên sản phẩm">
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-6">
                        <label>
                            Ảnh đại diện:
                        </label>
                        <input type="file" name="image" placeholder="Ảnh đại diện">
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-6">
                        <label>
                            Giá sản phẩm:
                        </label>
                        <input type="text" name="price" placeholder="Giá sản phẩm">
                    </div>
                    <div class="col-6">
                        <label>
                            Chọn danh mục:
                        </label>
                        <select type="text" name="category">
                            @foreach ($dataCategory as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-12">
                        <label>
                            Nội dung tóm gọn:
                        </label>
                        <input type="text" name="short_description" placeholder="Nội dung tóm gọn">
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-12">
                        <label>
                            Nội dung:
                        </label>
                        <input type="text" name="description" class="d-none" value="">
                        <div id="editor"></div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-12">
                        <button type="submit"
                            style="margin-top: 1rem;width: max-content;padding: 0.5rem 1rem;border-radius: 0.5rem;background-color: #2092d1;color: #fff">
                            Cập nhật
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('js-custom')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    const data = editor.getData();
                    document.querySelector('input[name="description"]').value = data;
                });
                editor.plugins.get('FileRepository').createUploadAdapter = function() {
                    return new MyUploadAdapter(editor.config.uploadUrl);
                };
            })
            .catch(error => {
                console.error(error);
            });

        class MyUploadAdapter {
            constructor(uploadUrl, loader) {
                this.uploadUrl = uploadUrl;
                this.loader = loader;
            }

            upload() {
                return new Promise((resolve, reject) => {
                    const fileLoader = new fileLoader(this.uploadUrl);
                    fileLoader.upload();

                    fileLoader.on('uploadprogress', (evt) => {
                        // Xử lý sự kiện uploadprogress nếu cần thiết
                    });

                    fileLoader.on('uploadcomplete', (evt) => {
                        resolve({
                            default: evt.url
                        });
                    });

                    fileLoader.on('uploaderror', (evt) => {
                        reject(evt.message);
                    });
                });
            }
        }
    </script>
@endsection
