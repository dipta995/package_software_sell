<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pacage;
use App\Models\Sleep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
//     public function index()
//     {

//        return view('user.home');

// return redirect()->route('your route name')->with('error','Data Deleted');

// return redirect()->route('your route name')->with('Warning','Are you sure you want to delete? ');

// return redirect()->route('your route name')->with('info','This is xyz information');
//     }
// public function indexa()
// {
//     $subcatins = 1;
//     if ($subcatins==1) {
//         return back()->with('message','New subCategory Created Successfully');
//       }
// }
public function terms()
{
    return view('layouts.terms');
}
public function privacy()
{
    return view('layouts.privacy');
}
public function home()
{
    $pacage  =  Pacage::where('junk','0')->where('front_view','0')->get();
    return view('user.home',compact('pacage'));
}
public function buypack(Request $request,$name=NULL)
{
    $pack  =  Pacage::where('junk','0')->where('pack_name',$name)->first();


    if ($request->has('ordercreate')) {
        $request->validate([
            'company_name' => 'required|max:150',
            'company_location' => 'required',
            'company_hotline' => 'required',
            'company_email' => 'required',
            'sleep_no' => 'required|unique:sleeps',

        ]);
        $addsleep = Sleep::insert([
            'company_name'=>$request->input('company_name'),
            'company_location'=>$request->input('company_location'),
            'company_hotline'=>$request->input('company_hotline'),
            'company_email'=>$request->input('company_email'),
            'sleep_no'=>$request->input('sleep_no')

        ]);
        if ($addsleep) {


        $insert = Order::insert([
            'customer_id'=>Auth::user()->id,
            'pack_id'=>$request->input('pack_id'),
            'sleep_no'=>$request->input('sleep_no')

        ]);
        if ($insert) {
          return back()->with('message','New Pack Created !!');
        }
        else{
          return back()->with('error','Something Went wrong Try Again!');
        }
    }
    }
    return view('user.buypack',compact('pack'));
}

}
