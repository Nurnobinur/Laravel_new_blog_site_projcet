<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\user\User;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryview=Category::orderBy("name","asc")->simplePaginate("4");
        return view("category.viewcategory",compact("categoryview"));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userdata=User::orderBy("name","asc")->get();
        return view("category.addcategory",compact("userdata"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $categorydata=new Category();
        $categorydata->user_id=$request->user_id;
        $categorydata->name=$request->name;
        $categorydata->save();
        return redirect()->to("category")->with("message","Category Created Successfully!");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return "ok";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editcategory=Category::findOrFail($id);
        $userdata=User::all();
        return view("category.editcategory",compact("editcategory"),["userdata"=>$userdata]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->valideated([
        "name"=>"required",
      ]);
      $editcategorydata=Category::findOrFail($id);
      $editcategorydata->user_id=$request->user_id;
      $editcategorydata->name=$request->name;
      $editcategorydata->save();
      return "done";


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return back()->with("message","Category Deleted Successfully!");
    }
}
