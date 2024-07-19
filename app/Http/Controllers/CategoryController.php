<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index()
   {
      $categories = Category::all();

      return view("category.index", compact('categories'));
   }

   public function create()
   {
      return view(view: "category.form");
   }

   public function store(Request $request){

      $request->validate([
         "title" => "required"
      ]);
      
      Category::create([
         'title' => $request->title
      ]);

      
      return redirect("/category")->with("success", "Berhasil membuat category");
   }

   public function edit($id){
      $category = Category::find($id);
      return view("category.edit", compact("category"));
   }

   public function update(Request $request, $id){
      $request->validate([
         "title" => "required|min:2|max:90"
      ]);

      $model = Category::find($id);
      $model->update([
         "title" => $request->title
      ]);

      return redirect("/category")->with("success", "Berhasil update category");
   }

   public function destory($id){
      $model = Category::find($id);
      $model->delete();

      return redirect()->back()->with("success", "Berhasil  hapus data category");
   }
}
