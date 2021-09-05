<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pacage;
use App\Models\Reffer;
use App\Models\Sleep;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminhome()
{

    return view('admin.home');
}
//Pacage
public function package(Request $request,$name=NULL)
{
   // dd($name);
    $allpack = Pacage::where('junk','0')->get();
    $packbyname = Pacage::where('pack_name','=',$name)->first();


    if ($request->has('createpack')) {
       $request->validate([
            'pack_name' => 'required|unique:pacages|max:150',
            'details' => 'required',
            'price' => 'required',
            'new_discount' => 'required',
            'renew_discount' => 'required',
            'month' => 'required',
            'front_view' => 'required',
        ]);
        $insert = Pacage::insert([
            'pack_name'=>$request->input('pack_name'),
            'details'=>$request->input('details'),
            'price'=>$request->input('price'),
            'new_discount'=>$request->input('new_discount'),
            'renew_discount'=>$request->input('renew_discount'),
            'month'=>$request->input('month'),
            'front_view'=>$request->input('front_view')
        ]);
        if ($insert) {
          return back()->with('message','New Pack Created !!');
        }
        else{
          return back()->with('error','Something Went wrong Try Again!');
        }

    }  elseif ($request->has('updatepack')) {
        $request->validate([
             'pack_name' => 'required|max:150',
             'details' => 'required',
             'price' => 'required',
             'new_discount' => 'required',
             'renew_discount' => 'required',
             'month' => 'required',
             'front_view' => 'required',
         ]);

         $update = Pacage::where('pack_name',$request->input('pack_name'))->update([
             'pack_name'=>$request->input('pack_name'),
             'details'=>$request->input('details'),
             'price'=>$request->input('price'),
             'new_discount'=>$request->input('new_discount'),
             'renew_discount'=>$request->input('renew_discount'),
             'month'=>$request->input('month'),
             'front_view'=>$request->input('front_view')

         ]);

         if ($update) {
           return back()->with('message',' Pack Created Properly !!');
         }
         else{
           return back()->with('error','Something Went wrong Try Again!');
         }

     }elseif ($request->has('removepack')) {
        $remove =Pacage::where('id',$request->input('id'))->update([
            'junk'=>1
        ]);
        if ($remove) {
            return back()->with('message',' Pack Created Properly !!');
          }
          else{
            return back()->with('error','Something Went wrong Try Again!');
          }
     }
    return view('admin.package',compact('allpack','packbyname'));
}

public function ordershow(Request $request)
{
    $orderedpack = Order::where('order_start_at','=',NULL)->join('users', 'users.id', '=', 'orders.customer_id')->join('pacages', 'pacages.id', '=', 'orders.pack_id')->join('sleeps', 'sleeps.sleep_no', '=', 'orders.sleep_no')->get();
    $reffers =Reffer::all();
    if ($request->has('uppayment')) {
        $remove =Order::where('sleep_no',$request->input('sleep_no'))->update([
            'payment_amount'=>$request->input('payment_amount')
        ]);
        $remove =Sleep::where('sleep_no',$request->input('sleep_no'))->update([
            'reffer'=>$request->input('reffer')
        ]);
        if ($remove) {
            return back()->with('message',' Confirm !!');
          }
          else{
            return back()->with('error','Something Went wrong Try Again!');
          }
    }
    return view('admin.sellrecord',compact('orderedpack','reffers'));

}
public function pendingapprove($sleep)
{

  $remove =Order::where('sleep_no',$sleep)->update([
    'order_start_at'=>Carbon::now()->toDateTimeString()
]);
if ($remove) {
    return back()->with('message',' Confirm !!');
  }
  else{
    return back()->with('error','Something Went wrong Try Again!');
  }
    return view('admin.sellrecord',compact('orderedpack'));
}








public function reffer(Request $request)
{
    $reffers = Reffer::all();
    if ($request->has('addreffer')) {
        $request->validate([
            'reffer_name' => 'required|unique:reffers|max:150',
            'phone_no' => 'required',

        ]);
        $insert = Reffer::insert([
            'reffer_name'=>$request->input('reffer_name'),
            'phone_no'=>$request->input('phone_no')
        ]);
        if ($insert) {
          return back()->with('message','New Reffar Created !!');
        }
        else{
          return back()->with('error','Something Went wrong Try Again!');
        }
    }
    return view('admin.reffer',compact('reffers'));
}
}
