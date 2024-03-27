<?php

namespace App\Http\Controllers;

use App\Models\Products as ModelsProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Products extends Controller
{
    public function index()
    {
        $products = ModelsProducts::orderBy('id', 'desc')->get();

        return view('auth.pages.productlist', compact('products'));
    }

    public function createView()
    {
        return view('auth.pages.addproduct');
    }

    public function upload(Request $request)
    {
        // if ($request->hasFile('photo')) {
        //     $image = $request->file('photo');
        //     $fileName = time() . '.' . $image->getClientOriginalExtension();

        //     $img = Image::make($image->getRealPath());
        //     $img->resize(120, 120, function ($constraint) {
        //         $constraint->aspectRatio();
        //     });

        //     $img->stream(); // <-- Key point

        //     //dd();
        //     Storage::disk('local')->put('images/1/smalls' . '/' . $fileName, $img, 'public');
        // }

        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $fileName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('img\products'), $fileName);

            $url = url('/img/products/' . $fileName);
            return  $url;
        } else {
            return "No file uploaded";
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

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('img\products'), $fileName);

            $url = url('/img/products/' . $fileName);
            $products->image =  $url;
        }

        $products->status = 1;
        $products->save();

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

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('img\products'), $fileName);

            $url = url('/img/products/' . $fileName);
            $products->image =  $url;
        }

        if ($request->product_status == '1') {
            $products->product_status = 1;
        } else if ($request->product_status == '0') {
            $products->product_status = 0;
        }

        if ($request->short_description != null) {
            $products->short_description = $request->short_description;
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
