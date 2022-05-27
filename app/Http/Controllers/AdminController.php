<?php

namespace App\Http\Controllers;

use App\Models\Appoinment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   function adddoctorview(){

      
     if(Auth::check()){

         if(Auth::user()->usertype==1){

            return view('admin.adddoctorview');

          }else{
            return with('Access Denied!, You Are Not Admin ');
          }
     
      
        }
            

     

   
   }
   
   function adddoctor(Request $req){
   
        $data= new Doctor;

        $image=$req->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
    
        $req->image->move('doctorimage',$imagename);
    
        $data->image=$imagename;
    

        $data->name=$req->name;
        $data->phone=$req->number;
        $data->speciality=$req->speciality;
        $data->room=$req->room;

        $data->save();

        return redirect()->back()->with ('message', "Doctor Addeded Successfully");


   }

   function adminappoinmenttable(){

      $data=Appoinment::all();
      if(Auth::check()){

         if(Auth::user()->usertype==1){

            return view('admin.adminappoinmenttable',compact('data'));
                
         }else{
                  return with('Access Denied!, You Are Not Admin ');
                }
   }
}

   function acceptappoinment($id){

      $data=Appoinment::find($id);

      $data->status='Accepted';

      $data->save();

      return redirect()->back();
   }

   function cancelappoinment($id){

      $data=Appoinment::find($id);

      $data->status='Canceled';

      $data->save();

      return redirect()->back();



   }

   function alldoctorview(){

      $data=Doctor::all();

      if(Auth::check()){

         if(Auth::user()->usertype==1){

            return view('admin.alldoctorview',compact('data'));
         }
         else{
            return with('Access Denied!, You Are Not Admin ');
          }
      }

     
   }

   function deletedoctor($id){

      $data=Doctor::find($id);

      $data->delete();

      return redirect()->back()->with('message','Doctor Delete Successfully');
   }

   function updatedoctorview($id){

      $data=Doctor::find($id);

      return view('admin.updatedoctorview',compact('data'));
   }

   function updatedoctor(Request $req , $id){

     
   
         $data= Doctor::find($id);
 
         $image=$req->image;
 
         $imagename=time().'.'.$image->getClientOriginalExtension();
     
         $req->image->move('doctorimage',$imagename);
     
         $data->image=$imagename;
     
 
         $data->name=$req->name;
         $data->phone=$req->number;
         $data->speciality=$req->speciality;
         $data->room=$req->room;
 
         $data->save();

         return redirect('alldoctorview')->with('message','Doctor Details Update Successfully');
 
     
 
 
    }

    function search(Request $req){

      $search=$req->search;

      $data=Doctor::where('name','Like','%'.$search.'%')->orwhere('speciality','Like','%'.$search.'%') ->get();

      return view('admin.alldoctorview',compact('data'));
    }


   
}
