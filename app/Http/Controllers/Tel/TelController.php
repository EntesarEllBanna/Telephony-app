<?php

namespace App\Http\Controllers\Tel;
use App\User;
use App\Admin;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminsRequest;


class TelController  extends BaseController
{
  

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
       
        return view("Telepony.index");
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
   
    
    
    
//    public function signupadmin(AdminRequest $request)
//    {
//        
//      $newadmin= User::create([
//            'name' => $request['name'],
//            'email' => $request['email'],
//             'password' => Hash::make($request['password']),
//		  ]);
//        
//       $logo = $request->file('img');
//        if($logo!=NULL){
//            $type = strtolower($logo->getClientOriginalExtension());
////            if(!($type=="image")){
////                \Session::flash("msg","e:The choise should be an image");
////                return redirect("/register");
////            }
//            //else{
//                $img=$this->guidv4().".".$logo->getClientOriginalExtension();
//                $item->logo=$img;
//                $logo->move("data/images/",$img);
//
//           // }
//        }		 
//       
//          $admin = new Admin();
//          $admin->name = $request["name"];
//		  $admin->email = $request["email"];
//		  $admin->mobile = $request["mobile"];
//		  $admin->tel= $request["tel"];
//		  $admin->details= $request["details"];
//		  $admin->logo= $request["details"];
//        
//          $admin->isdelete=0;
//		  $admin->save();
//          \Session::flash("msg","s:The Owner added successfuly");
//        return redirect("/login");
//    }
//
//    
//     
//    
    
}
?>