<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Customer;
use App\Models\Makeup;
use App\Models\Regester;
use Illuminate\Http\Request;

use App\Models\Table;


class AdminController extends Controller
{
   public function dashboard(){
    return view('backend.catagory.dashboard');
   }

public function catagory(){
    return view('backend.catagory.Men');
   }




   public function content(){
      return view('backend.content');
     }
     public function baby(){
      return view('backend.catagory.Baby');
     }

     public function women(){
      return view('backend.catagory.women');
     }

     public function Food(){
      return view('backend.catagory.food');
     }
     public function child(){
      return view('backend.catagory.child');
     }
     //makeup table view
     public function table(){
      $makeupcategory=Makeup::all();

      return view('backend.catagory.list.form_view',compact('makeupcategory'));
     }
     //end table view
//makeup table delete
     public function delete($id){
       Makeup::find($id)->delete();
       return back();
     }
//end makeup delete
     public function create(){
      return view('backend.catagory.list.wcreate');
     }

     public function update(){
      return view('backend.catagory.list.wupdate');
     }

     public function dash_create(Request $request){
      //dd($request->all());
      //migration model name=>input name
      Table::create([
         'category_name'=>$request->category_name,
         'category_details'=>$request->category_details
      ]);
      return redirect(url('food-table'));
     }

     public function makeup(){
      return view('backend.catagory.makeup');
     }
 public function makeupb(Request $makeup){
   Makeup::create([
      'Name'=>$makeup->Name,
      'Password'=>$makeup->Password
   ]);
 }
//food table
public function Food_Table(){
$food=Table::all();
return view('backend.catagory.list.food_table',compact('food'));
}
//end 
//food delete
public function fooddelete($id){
   Table::find($id)->delete();
   return back();
 }
//endfood delete
//edit page method
public function edit($id){
   $editcategory=Table::all();
   return view('backend.catagory.list.food_update',compact('editcategory'));
}

  public function updateall(Request $request,$id){
    $updatecategory=Table::find($id);
    $updatecategory->update([
      'category_name'=>$request->category_name,
         'category_details'=>$request->category_details
    ]);
    return redirect()->route('food-table');
  }
     //start regester page
     public function regester(){
      return view('backend.catagory.regester');
     }
     //end regester page
//start regester form page
public function regester_form(){
   return view('backend.catagory.regester_form');
}
//end redester form page
//start regester form create
public function regester_formcreate(Request $request){
 Regester::create([
   'emain'=>$request->emain,
   'password'=>$request->password
]);
   return back();
}
//end regester form create

//start customer sidebar page
public function customer(){
   $customerlist=Customer::paginate(3);
   return view('backend.customer.customer',compact('customerlist'));
}
//end customer sidebar page
//start customer form
public function customer_form(){
   return view('backend.customer.customer_form');
}
//end customer form
//start customer create form
public function customer_formcreate(Request $request){

   $request->validate(([
      'Customer_Name'=>'required',
      'Customer_password'=>'required',
      'Customer_image'=>'required'
   
]));
$fileName=null;
if($request->hasFile('Customer_image')){
$fileName='kodeeo'.'-'.date('Ymdhmsis').'.'.$request->file('Customer_image')->getClientOriginalExtension();
$request->file('Customer_image')->storeAs('/uploads/Customer',$fileName);}






   Customer::create([
      'Customer_Name'=>$request->Customer_Name,
      'Customer_password'=>$request->Customer_password,
      'Customer_image'=>$fileName

   ]);
   return redirect()->route('customer')->with('success','created successfully');
}//end customer form
public function customer_delete($id){
   Customer::find($id)->delete();
   return back()->with('danger','Delete Done!');
}
 
 public function customer_edit($id){
   $customerEdit=Customer::find($id);
   return view('backend.customer.customer_edit',compact('customerEdit'));
 }

 public function updates(Request $request,$id){
   $updateData=Customer::find($id);

   $updateData->update([
      'Customer_Name'=>$request->Customer_Name,
      'Customer_password'=>$request->Customer_password

   ]);
   return redirect()->route('customer');
 }










//stary payment page
public function payment(){
return view('backend.payment.payment');
}
//end payment page
public function payment_form(){
return view('backend.payment.payment_form');
}
public function payment_formcreate(Request $request){
   Payment::create([
      'Payment_Name'=>$request->Payment_Name,
      'Payment_password'=>$request->Payment_password
   ]);
   return redirect()->route('payment');

}
}