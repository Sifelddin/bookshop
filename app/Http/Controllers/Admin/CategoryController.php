<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        
        $categories = Category::where('cat_parent_id',null)->get();
        $subCategories = Category::where('cat_parent_id','!=',null)->get();
   
        return view('admin.categories.index',['subCategories' => $subCategories,'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('cat_parent_id',null)->get();
        return view('admin.categories.create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'categoryName' => ['required','string','max:255','unique:categories,cat_name'],
        ]);
        
        Category::create([
            'cat_parent_id' => $request->category_parent,
            'cat_name' => $request->categoryName
        ]);   
        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
       
        $cat_parent = DB::table('categories')->where('cat_id', "=",$category->cat_parent_id)->get();

        $categories = Category::all();
        return view('admin.categories.edit',['category' => $category,'categories'=>$categories,'cat_parent'=> $cat_parent]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category)
    {
     
        $request->validate([
            'categoryName' => ['required','string','max:255'],
        ]);
        $category->cat_name = $request->categoryName;
        $category->cat_parent_id = $request->category_parent;
        $category->save();

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        
        $category->delete();
        return back();
    }
}
