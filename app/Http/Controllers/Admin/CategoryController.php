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

        return redirect(route('listdanhmuc'));
    }

    public function getListCate()
    {
        $cates = Category::all();

        return view("admin.category.list_cate",compact('cates'));
    }

    public function getEditCate($id)
    {
        $cate = Category::all()->toArray();

        $item = Category::find($id);

        return view("admin.category.edit_cate",compact('cate','item'));
    }

    public function postEditCate($id , Request $request)
    {
        $cate             = Category::find($id);
        $cate->name       = $request->txtCateName;
        $cate->slug_name  = $request->txtFullName;
        $cate->parent_id  = $request->selectParentId;
        $cate->updated_at = new DateTime;
        $cate->save();

        return redirect('admin/danh-muc/sua/'.$id)->with("message","Sửa thành công");
    }

    public function getDelCate($id)
    {
        $count = Category::where('parent_id',$id)->count();
        if($count == 0)
        {
            $cate = Category::find($id);
            $cate->delete();
            return redirect('admin/danh-muc/danh-sach')->with('message','xóa thành công');
        }else{
            echo "<script type='text/javascript'>
                alert('Bạn không thể xóa chuyên mục này');
                window.location ='";
            echo route('listdanhmuc');
            echo "'
            </script>";

        }
    }


}