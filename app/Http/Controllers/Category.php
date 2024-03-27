<?php

namespace App\Http\Controllers;

use App\Models\Category as ModelsCategory;
use Illuminate\Http\Request;

class Category extends Controller
{
    public function index()
    {
        $dataCategory = ModelsCategory::all();

        return view('auth.pages.productcategory', compact('dataCategory'));
    }

    public function update(Request $request, $id)
    {
        $dataCategory = ModelsCategory::find($id);
        $dataCategory->name = $request->name;
        $dataCategory->save();

        return redirect()->route('category');
    }

    public function store(Request $request)
    {
        $dataCategory = new ModelsCategory();
        $dataCategory->name = $request->name;
        $dataCategory->save();

        return redirect()->route('category');
    }

    public function destroy($id)
    {
        $dataCategory = ModelsCategory::find($id);
        $dataCategory->delete();

        return redirect()->route('category');
    }
}
