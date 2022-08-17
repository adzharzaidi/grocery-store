<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('seller.category.index')->with('category', $category);
    }

    public function create(){
        return view('seller.category.create');
    }

    public function store(Request $request){
        Category::create($request->all());

        return redirect()->route('category.index')->with('success', 'Category added successfully');
    }

    public function edit(Category $category){
        return view('seller.category.edit')->with('category', $category);
    }

    public function update(Request $request, Category $category){

        $category->update($request->all());

        return redirect()->route('category.index')->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category){
        
        $category->delete();
        
        return redirect()->back()->with('success', 'Category deleted successfully');
    }

}
