<?php

namespace App\Http\Controllers;

use App\Models\Products as ModelsProducts;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Products extends Controller
{
    public function index()
    {
        $products = ModelsProducts::where('status', 1)->get();

        return view('auth.pages.productlist', compact('products'));
    }

    public function createView()
    {
        return view('auth.pages.addproduct');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('img'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('img/' . $fileName);
            $msg = 'Uploaded image success';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url, 'response' => $response]);
        }
    }

    public function store(Request $request)
    {
        $products = new ModelsProducts();
        $products->name = $request->input('name');
        $products->category = $request->input('category');
        $products->price = $request->input('price');
        $products->short_description = $request->input('short_description');
        $products->description = $request->input('description');
        $products->product_status = '1';
        $products->image = $request->file('image');

        // $image = $request->file('image');

        // $model = ModelsProducts::find(1);

        // $products->image = $model->addMedia($image)
        //     ->toMediaCollection('image');

        $products->status = 1;
        $products->save();

        // echo $products;

        return redirect()->route('productlist')->with('success', 'Thêm sản phẩm thành công');
    }

    public function delete($id)
    {
        $products = ModelsProducts::find($id);
        $products->status = 0;
        $products->save();
        return redirect()->route('productlist')->with('success', 'Xóa sản phẩm thành công');
    }

    public function updateView($id)
    {
        $product = ModelsProducts::find($id);
        return view('auth.pages.editproduct', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $products = ModelsProducts::find($id);
        if ($request->name != null) {
            $products->name = $request->name;
        }
        if ($request->category != null) {
            $products->category = $request->category;
        }
        if ($request->price != null) {
            $products->price = $request->price;
        }
        if ($request->description != null) {
            $products->description = $request->description;
        }
        if ($request->image != null) {
            $products->image = $request->image;
        }
        if ($request->status == 0) {
            $products->status = 1;
        } else if ($request->status == 1) {
            $products->status = 0;
        } else {
            $products->status = 1;
        }
        $products->save();
        return redirect()->route('productlist')->with('success', 'Sửa sản phẩm thành công');
    }
}
