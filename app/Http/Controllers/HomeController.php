<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminsRequest;

class HomeController extends Controller
{
     protected $adminId=1;
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('AdminRole');
    }

    public function allredirect(){
        $user = \Auth::user();
        
            $isAdmin=\DB::table("admin")->where("user_id",$user->id)->count();
           // $isCompany=\DB::table("company")->where("user_id",$user->id)->count();
       
            if($isAdmin){
                return redirect("/index");
            }
            //else if($isCompany)
               // return redirect("/company/home/profile");
            
       else{
        \Session::flash("msg","e:Check your registraition");
               return redirect("/register");}
           
       
    }
    
   
    
    
    public function index()
    {
        return view('auth.login');
    }
     public function redirect()
    {
        return view('auth.login');
    }
    
    public function register()
    {
        return view("auth.register");
    }
   
    function guidv4()
    {
        if (function_exists('com_create_guid') === true)
            return trim(com_create_guid(), '{}');
        $data = openssl_random_pseudo_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
   
    
    // public function signupadmin(AdminsRequest $request)
    // {
    //      $img="";
    //     $logo = $request->file('img');
    //     if($logo!=NULL){
    //         $type = strtolower($logo->getClientOriginalExtension());
          //  echo $type;die();
//            if(!($type=="image")){
//                \Session::flash("msg","e:The choise should be an image");
//               return redirect("/register");
//            }
//            else{
                // $img=$this->guidv4().".".$logo->getClientOriginalExtension();
                // $logo->move("data/images/",$img);

 //          }
    //     }
    //     $newadmin= User::create([
    //         'name' => $request['name'],
    //         'email' => $request['email'],
    //          'logo' => $img ,
    //      'password' => Hash::make($request['password']),
		  // ]);

        
    //     $admin = new Admin();

    //     $admin->user_id=$newadmin->id;
    //       $admin->name = $request["name"];
    
		  // $admin->email = $request["email"];
		  // $admin->mobile = $request["mobile"];
		  // $admin->tel= $request["tel"];
		  // $admin->details= $request["details"];
        
		  //  if($img!=""){
    //         $admin->logo=$img;
    //     }
        
    //       $admin->isdelete=0;
		  // $admin->save();
    //       \Session::flash("msg","s:The Owner added successfuly");
    //     return redirect("/login");
    // }
 public function signupadmin(AdminsRequest $request)
    {
         $img="";
        $logo = $request->file('img');
        if($logo!=NULL){
            $type = strtolower($logo->getClientOriginalExtension());
          //  echo $type;die();
//            if(!($type=="image")){
//                \Session::flash("msg","e:The choise should be an image");
//               return redirect("/register");
//            }
//            else{
                $img=$this->guidv4().".".$logo->getClientOriginalExtension();
                $logo->move("data/images/",$img);

 //          }
        }
        $newadmin= User::create([
            'name' => $request['name'],
            'email' => $request['email'],
             'logo' => $img ,
         'password' => Hash::make($request['password']),
      ]);

        
          $admin = new Admin();
          $admin->user_id=$newadmin->id;
          $admin->name = $request["name"];
      $admin->email = $request["email"];
      $admin->mobile = $request["mobile"];
      $admin->tel= $request["tel"];
      $admin->details= $request["details"];
        
       if($img!="")
           {
            $admin->logo=$img;
           }
        
          $admin->isdelete=0;
      $admin->save();
          \Session::flash("msg","s:The Owner added successfuly");
        return redirect("/login");
    }

        
        
       
        
        
        
   
    
}
