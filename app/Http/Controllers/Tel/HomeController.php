<?php

namespace App\Http\Controllers\Tel;

use Illuminate\Http\Request;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\AdminsRequest;
use Session;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use App\Http\Requests\AdminsEditRequest;
class HomeController extends BaseController
{
   
    public function changepassword()
    {
        return view('admin.home.changepassword');
    }
 
     public function profile(){
        
        $item=Admin::find($this->adminId);
         echo $this->adminId; 
         echo $item->id ;
         
        return view("admin.home.profile",compact("item"));
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
    public function updateprofile(AdminsEditRequest $request)
    {       
        $item = Admin::find($this->adminId);        
        $item->name= $request["name"];
        $item->details= $request["details"];        
        $item->email= $request["email"];
        $item->mobile= $request["mobile"];
        $item->tel= $request["tel"];
        
        $logo = $request->file('img');
        if($logo!=NULL){
            $type = $logo->getMimeType();
            if(!strstr($type,"image")){
                \Session::flash("msg","e:choose acorrect image");
                return redirect("/updateprofile");
            }
            else{
                $img=$this->guidv4().".".$logo->getClientOriginalExtension();
                $item->logo=$img;
                $logo->move("data/images/",$img);

            }
        }
        
        $item->save();
        
        \Session::flash("msg","s:Account updated successfully");
        return redirect("/updateprofile");
    }
    
    
    public function postChangepassword(ChangePasswordRequest $request){
		$user = \Auth::user();
		
		if($this->IsValidOldPassword($request->input("oldpassword")))
		{
			$user->password=Hash::make($request['password']);
			$user->save();			
			Session::flash("msg","s:change password completed successfuly");
			return redirect("/changepassword");
		}
		else
		{			
			Session::flash("msg","e:current passord is not correct");
			return redirect("/changepassword");
		}
	}
    
    
	function IsValidOldPassword($password)
	{
		$user = \Auth::User();
		
		$credentials2 = ['email' => $user->email, 
			'password' => $password];

		if (\Auth::validate($credentials2)) {
			return 1;
		}
		else
			return 0;
	}
}