<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Admin;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminRequest;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:6|confirmed',
    //         'img.*' => 'required|mimes:jpeg,jpg,png',
    //         'mobile' => 'string',
            
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    function guidv4()
    {
        if (function_exists('com_create_guid') === true)
            return trim(com_create_guid(), '{}');
        $data = openssl_random_pseudo_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
   
    
    public function register()
    {
        return view("auth.register");
    }
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
         'name' => 'required|max:50',
            'email' => 'email',
            'mobile' => 'required|max:50',
            'img.*' => 'required|mimes:jpeg,jpg,png'
            ]);
    }

protected function rules(){
        $rules = [ 
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];
        return $rules ;
    }


    protected function create(AdminRequest $request)
    {
        
        $logo = $request->file('img');
        if($logo!=NULL){
            $type = strtolower($logo->getClientOriginalExtension());
//            if(!($type=="image")){
//                \Session::flash("msg","e:The choise should be an image");
//                return redirect("/store");
//            }
            //else{
                $img=$this->guidv4().".".$logo->getClientOriginalExtension();
                $item->logo=$img;
                $logo->move("data/images/",$img);

           // }
        }		 
        
        
          
        $request->validate($this->rules());
        
	      $newadmin= User::create([
            'name' => $request['name'],
            'email' => $request['email'],
              //'mobile' => $request['mobile'],
              //'logo'=> $logo,
            'password' => Hash::make($request['password']),
		  ]);

//		  $IsExists=Admin::whereRaw("isdelete=0 and mobile=?",$request["mobile"])->count();
//		  if($IsExists>0){
//			\Session::flash("msg","e:".$request["name"]."-This mobile number-Is already exist");
//			return redirect("/home/register");
//		  }
		  $admin = new Admin();
          $admin->name = $request["name"];
		  $admin->email = $request["email"];
		  $admin->mobile = $request["mobile"];
		  $admin->tele= $request["tele"];
		  $admin->details= $request["details"];
		    $admin->logo= $logo;
        
          $admin->isdelete=0;
		  $admin->save();
          \Session::flash("msg","s:The Owner added successfuly");
        return redirect("/login");
    }

    
     
    
    
    
//    protected function create(array $data)
//    {
//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            
//            'mobile' =>$data['mobile'],
//            'password' => Hash::make($data['password']),
//            
//        ]);
//        
//        
//        
//        
//    }
}
