<?php

namespace App\Http\Controllers;

use App\Models\Bloodrequest;
use Illuminate\Http\Request;

class BloodrequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create( )
    
    
    {
       
        return View("frontend.request-blood-form");
    }

    

    public function index()
    {
        $bloodrequests= Bloodrequest::orderBy('fname', 'ASC')->get();
        return view('frontend.request',['bloodrequests'=>$bloodrequests]);
      
    }

    public function store(Request $request)
    {
        $request->validate([
            "fname"=>"required|string",
            "email" => 'required|email',
            "contact"=>"required|string",
            "address"=>"required|string",
          "note"=>"required|string",
            "bgroup"=>"required",
            "photo"=>"required"

         
        ]);

        
        $bloodrequest = new Bloodrequest();
        $bloodrequest->fname = $request->fname;
        $bloodrequest->contact = $request->contact;
        $bloodrequest->email = $request->email;
        $bloodrequest->address = $request->address;
        $bloodrequest->note = $request->note;
        if($request->hasfile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = uniqid().".".$extension;
            Storage::disk('public')->put($filename, file_get_contents($file));
            $bloodrequest->photo = $filename;
        }
        $bloodrequest->bgroup = $request->bgroup;
        $bloodrequest->save();
    
        return redirect()->route('request.create');
    }

 
        
    public function destroy(Bloodrequest $bloodRequest)
    {
        // $bloodRequest->delete();
        // return redirect()->back()->with('success', 'Blood request deleted successfully.');
    }


    /**
     * Show the form for creating a new resource.
     */
   
    /**
     * Store a newly created resource in storage.
     */
  
}
