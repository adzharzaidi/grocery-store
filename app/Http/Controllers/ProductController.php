<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){

        $product = Product::all();
        $category = Category::all();

        return view('seller.products.index')
        ->with('product', $product)
        ->with('category', $category);
    }

    public function create(Category $category){
        
        $category = Category::select('id', 'name')->get();
        return view('seller.products.create')->with('category', $category);
    }

    public function store(Request $request){
      
        $data = $request->all();

        // if($request->hasFile('image')){
        //     foreach($request->file('image') as $pic)
        //     {
        //         $imageName = time().'-'.$pic->getClientOriginalName();
        //         $pic->move(public_path('storage/product/images'), $imageName);
        //         $image['image'] = $imageName;
        //     }
        //     $data['image'] = json_encode($image);
        // }

        if ($request->has('image')){
            $image_path = 'public/images';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($image_path, $image_name);

            $data['image'] = $image_name;
        }

        Product::create($data);


        return redirect()->route('product.index')
        ->with('success', 'Product added successfully!');
    }

    public function edit(Product $product){
        return view('seller.products.edit')->with('product', $product);
    }
    
    public function update(Request $request, Product $product){

        $product->update($request->all());

        return redirect()->route('product.index')->with('success', 'Product is successfully updated');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->back()->with('success', 'Product deleted successfully!');
    }
}
