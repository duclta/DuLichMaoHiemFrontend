<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;

class CategoryController extends Controller
{
    public function getCate()
    {
        $data['catelist'] = Category::all();
        return view('admin.list_category',$data);
    }

    public function getAddCate()
    {
        return view('admin.add_category');
    }
    public function postAddCate(AddCateRequest $req)
    {
        $category = new Category;
        $category->name = $req->name;
        $category->slug = str_slug($req->name);
        $category->save();
        return redirect()->intended('admin/category');;
    }

    public function getEditCate($id)
    {
        $data['cate'] = Category::find($id);
        return view('admin.edit_category', $data);
    }

    public function postEditCate(AddCateRequest $req, $id)
    {
        $category = Category::find($id);
        $category->name = $req->name;
        $category->slug = str_slug($req->name);
        $category->save();
        return redirect()->intended('admin/category');
    }

    public function getDeleteCate($id)
    {
        Category::destroy($id);
        return back();
    }
}
