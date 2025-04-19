<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        try {
            $galleries = Gallery::all();
            return view('administrator.galleries.index',compact('galleries'));

        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }        
    }

    public function add() {
        try {
            return view('administrator.galleries.add');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
        }
        
    }

    public function show($id)
    {
        try {
            $gallery = Gallery::findorFail($id);
            return view('administrator.galleries.show',compact('gallery'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function save(Request $request) {
        try {
            $data = $request->all();
            
            //dd($data);
            $validatedData = $request->validate([
                'name' => 'required',
                'slug' => 'required',
            ]);
           
            if($data['gallery_id'] <= 0){
                Gallery::create($data);
            } else {
                $institute = Gallery::findOrFail($data['gallery_id']);
                $institute->update($data);
            }
            return redirect()->back()->with('message', 'Gallery updated successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            var_dump($e->getMessage()); 
        }
    }

    public function delete($id) {
        $course = Gallery::findOrFail($id);
        $course->delete();
        return redirect()->back()->with('message', 'Gallery deleted successfully!');
    }
}
