<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\Contact;

class IndexController extends Controller
{
    //
    public function __construct()
    {
        $this->layout = check_device("mobile") ? "mobile." : "";
    }
    
    public function index(Request $request)
    {
        try {
            $request->session()->get("userData");
           

            return view("index");

        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
        }
    }

    public function captureLead(Request $request)
    {
        try {
            $postData = $request->all();
            
            $validatedData = $request->validate([
                "lead_name" => "required",
                "lead_email" => "required",
                "lead_phone" => "required",
            ]);

            $lead = Lead::create($postData);
            $this->emailNotification($postData);
           
            return redirect("/thank-you");
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json($e, $this->_statusOK);
        }
    }
    
    public function contactCaptureLead(Request $request)
    {
        try {
            $postData = $request->all();
            $validatedData = $request->validate([
                "name" => "required",
                "email" => "required",
                "phone" => "required",
            ]);

            $lead = Contact::create($postData);
           
            $this->contactEmailNotification($postData);
            return redirect("/thank-you");
        } catch (\Illuminate\Database\QueryException $e) {
            dd($e);
        }
    }
    
    public function emailNotification($postData)
    {
        try {
            
            $details = [
                'lead_name' => $postData["lead_name"],
                'lead_email' => $postData["lead_email"],
                'lead_phone' => $postData["lead_phone"],
                'country' => $postData["country"],
                'comment' => $postData["comment"],
            ];
            $mail = \Mail::to("connect@gtzworld.com","GTZ India")->bcc('proloyghosh598@gmail.com')->send(new \App\Mail\LeadEmailNotification($details));
            
            return true;
        } catch (\Illuminate\Database\QueryException $e) {
            var_dump($e);
        }
    }
    
    public function contactEmailNotification($postData)
    {
        try {
            
            $details = [
                'name' => $postData["name"],
                'email' => $postData["email"],
                'phone' => $postData["phone"],
                'country' => $postData["country"],
                'company' => $postData["company"],
                'category' => $postData["category"],
                'comment' => $postData["comment"],
            ];
            $mail = \Mail::to('connect@gtzworld.com',"GTZ India")->bcc('proloyghosh598@gmail.com')->send(new \App\Mail\ContactEmailNotification($details));
            
            return true;
        } catch (\Illuminate\Database\QueryException $e) {
            var_dump($e);
        }
    }
}
