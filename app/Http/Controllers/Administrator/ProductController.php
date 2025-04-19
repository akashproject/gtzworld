<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index()
    {
        try {
            $products = Product::all();
            return view('administrator.products.index',compact('products'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function add() {
        try {
            return view('administrator.products.add');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function show($id)
    {
        try {
            $product = Product::findorFail($id);
            return view('administrator.products.show',compact('product'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'title' => 'required',
                'slug' => 'required',
                'description' => 'required',
                'template' => 'required',
            ]);
           
            if($data['product_id'] <= 0){
                //dd($data);
                Product::create($data);
            } else {
                $institute = Product::findOrFail($data['product_id']);
                $institute->update($data);
            }
            return redirect()->back()->with('message', 'Product updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $course = Product::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Product deleted successfully!');
    }
}
