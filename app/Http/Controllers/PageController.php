<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Contact;

class PageController extends Controller
{
    public function index($slug,Request $request)
    {
        try {
           //echo $slug; exit;
            $contentMain = Page::where('slug', $slug)->first();
            return view("page.".$contentMain->template,compact('contentMain'));

        } catch(\Illuminate\Database\QueryException $e){
            print_r($e); exit;
        }
    }

    public function saveContact(Request $request){
        try {
            $data = $request->all();
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'mobile' => 'required',
                'message' => 'required',
            ]);
           
            Contact::create($data);

            return redirect()->back()->with('message', 'Request has been submitted successfully!');
        } catch(\Illuminate\Database\QueryException $e){
            //throw $th;
            var_dump($e);
        }
    }
}
