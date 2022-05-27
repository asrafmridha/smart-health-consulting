<?php

namespace App\Http\Controllers;

use App\Models\Appoinment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use  App\Models\User;

class HomeController extends Controller
{
    function redirect(){

        $usertype=Auth::user()->usertype;
    
        if($usertype==0){

            $data= Doctor::all();
    
            return view('user.home',compact('data'));
    
           
        }
        else{
            
            return view('admin.home');
           
        }
    
    
       }
    
   function index(){
   if(Auth::id()){

    return redirect('redirect');
   }

   else{

 

    $data= Doctor::all();

    return view('user.home', compact('data'));
   }

 
    
   }

   function appoinment(Request $req){

    $data= new Appoinment;

    $data->name=$req->name;

    $data->email=$req->email;

    $data->phone=$req->phone;

    $data->doctor=$req->doctor;

    $data->date=$req->date;

    $data->message=$req->message;

    $data->status='In Progress';

    if(Auth::id()){

        $data->user_id=Auth::user()->id;
    }

    $data->save();

    return redirect()->back()->with ('message', "Appoinment take Successfully, We will Contact you");

    


   }

   function userappoinment(){

    if(Auth::id()){

        $userid=Auth::user()->id;

        $appoinment= Appoinment::where('user_id',$userid)->get();

        return view('user.appoinmentstatus',compact('appoinment'));
    }

    else{

        return back();
    }

    
   }

   function Cancelappoinment($id){

    $data=Appoinment::find($id);

    $data->delete();

    return redirect()->back();


   }

   function userappoinmentview(){

    $data=Doctor::all();
  if(Auth::id()){

        return view('user.appoinment',compact('data')); 
    }
    else{

        return redirect('login');
    }
   

   
   }

  

    function searchforuser(Request $req){

        $search=$req->search;
  
        $data=Doctor::where('name','Like','%'.$search.'%')->orwhere('speciality','Like','%'.$search.'%') ->get();
             
        if(Auth::id()){

            return view('user.searchview',compact('data'));
        }
        else{
            return redirect('login');
        }
   
      }
   
     
}

