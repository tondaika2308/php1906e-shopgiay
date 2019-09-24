<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    public function getAddCate()
    {

        $cate = Category::all()->toArray();

        return view('admin.category.add_cate',compact('cate'));
    }

    public function postAddCate(Request $request)
    {
        $cate             = new Category;
        $cate->name       = $request->name;
        $cate->slug_name  = $request->slug_name;
        $cate->order_display  = $request->order_display;
        $cate->created_at = new DateTime;
        $cate->save();

        return redirect(route('themdanhmuc'))->with("message","Thêm thành công");
    }
}