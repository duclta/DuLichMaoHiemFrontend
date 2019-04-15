<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\AddCateRequest;
use App\Http\Requests\EditCateRequest;
use Illuminate\Support\Facades\Storage;

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
        $filename = $req->poster->getClientOriginalName();
        $category = new Category;
        $category->cate_name = $req->name;
        $category->cate_slug = str_slug($req->name);
        $category->cate_poster = $filename;
        $category->cate_featured = $req->featured;
        $category->save();
        $req->poster->storeAs('images/category/poster',$filename);
        return back()->with(['flag'=>'success','message'=>'Thêm thể loại mới thành công']);
    }

    public function getEditCate($id)
    {
        $data['cate'] = Category::find($id);
        return view('admin.edit_category', $data);
    }

    public function postEditCate(EditCateRequest $req, $id)
    {
        $filename = $req->poster->getClientOriginalName();
        $category = Category::find($id);
        $category->cate_name = $req->name;
        $category->cate_slug = str_slug($req->name);
        $category->cate_poster = $filename;
        $category->cate_featured = $req->featured;
        $category->save();
        $req->poster->storeAs('images/category/poster',$filename);

        // $myFile = '/path/to/my/file.txt';
        // if (! Storage::exists($myFile)) {
        //     // do something
        // }

        return redirect()->intended('admin/category');
    }

    public function getDeleteCate($id)
    {
        Category::destroy($id);
        return back();
    }
}
