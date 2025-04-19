<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        try {

            $category = Category::all();
            return view('administrator.category.index',compact('category'));

        } catch(\Illuminate\Database\QueryException $e){
            throw $e;
        }
        
    }

    public function show($id)
    {
        try {
            $category = Category::find($id);
            $listCategory = Category::all();
            return view('administrator.category.show',compact('category','listCategory'));
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'title' => 'required',
                'slug' => 'required',
                'description' => 'required',
                'status' => 'required',
                'utm_campaign' => 'required',
                'utm_source' => 'required',
            ]);
            if($data['course_type_id'] <= 0){
                // print_r($data);
                // exit;
                Category::create($data);
            } else {
                $category = Category::findOrFail($data['course_type_id']);
                $category->update($data);
            }
            return redirect()->back()->with('message', 'Page updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    
    public function delete($id) {
        $course = Category::findOrFail($id);
        $course->delete();
        return redirect('/administrator/courses');
    }
}
