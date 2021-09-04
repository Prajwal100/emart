<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index(){
        $about=AboutUs::first();
        return view('backend.about.index',compact('about'));
    }

    public function aboutUpdate(Request $request){
        $about=AboutUs::first();


        $status=$about->update([
            'heading'=>$request->heading,
            'content'=>$request->input('content'),
            'experience'=>$request->experience,
            'happy_client'=>$request->happy_client,
            'team_advisor'=>$request->team_advisor,
            'return_customer'=>$request->return_customer,
            'image'=>$request->image,
        ]);

        if($status){
            return redirect()->back()->with('success','Successfully updated');
        }
        else{
            return back()->with('error','Something went wrong!');
        }
    }
}
