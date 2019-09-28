<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAddProduct()
    {

        $cate = Category::all()->toArray();
        $brands = Brand::all();
        $size = Size::all();
        return view('admin.product.add_product',compact('cate','size','brands'));
    }
    //
}
