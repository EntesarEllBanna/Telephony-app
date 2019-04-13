<?php

namespace App\Http\Controllers\Tel;

use Illuminate\Http\Request;
use App\Http\Requests\NamesRequest;
use App\Http\Requests\AdminsRequest;
use App\Http\Requests\NamesEditRequest;
use App\Names;

class AllNamesController extends BaseController
{
    public function searchpagingadv(Request $request)
    {
        $q=$request["q"];
        $items=Names::whereRaw("isdelete=0");
        if($q!=NULL)
            $items=$items->whereRaw("(name like ? or mobile like ? or tel like ?)",["%$q%","%$q%","%$q%"]);
       
        $items=$items->orderby("id","asc")->paginate(3)->appends(["q"=>$q]);
        return view("Telephony.storage",compact("items","q"));
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
    
    public function create()
    {
        return view("Telephony.create");
    }

    public function store(NamesRequest $request)
    {      
        $name = new Names();
        $uploadedImg="";
        $logo = $request->file('img');
        if($logo!=NULL){
            $type = strtolower($logo->getClientOriginalExtension());
//            if(!($type=="image")){
//                \Session::flash("msg","e:The choise should be an image");
//                return redirect("/storage");
//        }
//            else{
                $uploadedImg=$this->guidv4().".".$logo->getClientOriginalExtension();
                $logo->move("data/images/",$uploadedImg);
// }
            
             $name->logo=$uploadedImg;
           
        }
      
        $name->name= $request["name"];
        $name->email= $request["email"];
        $name->mobile= $request["mobile"];
        $name->tel= $request["tel"];
        $name->details= $request["details"];
        $name->isdelete=0;
        $name->save();
        
        \Session::flash("msg","i:The Item Added successfully");
        return redirect("/storage/index");
         
    }
    
    
    public function show($id)
    {
        $item=Names::find($id);
        if($item==NULL)
            return redirect("/storage/index");
        return view("Telephony.show",compact("item"));
    }

    public function edit($id)
    {
         $item=Names::find($id);
        if($item==NULL)
            return redirect("/storage/index");
       
        return view("Telephony.edit",compact("item"));
    }
    public function update(NamesEditRequest $request, $id)
    {        
        
        $name = Names::find($id);
        $name->name= $request["name"];
        $name->email= $request["email"];
        $name->mobile= $request["mobile"];
        $name->tel= $request["tel"];
        $name->details= $request["details"];
        $name->isdelete=0;
        
        $uploadedCv="";
        $logo = $request->file('img');
        if($logo!=NULL){
            $type = strtolower($logo->getClientOriginalExtension());
//            if(!($type=="image")){
//                \Session::flash("msg","e:The choise should be an image");
//                return redirect("/storage");
//         }
//          else{
                $uploadedCv=$this->guidv4().".".$logo->getClientOriginalExtension();
                $logo->move("data/images/",$uploadedCv);
// }
            
             $name->logo=$uploadedCv;
        }
      
        $name->save();
        \Session::flash("msg","s:Item updated successfully");
        
        return redirect("/storage/index");
       
    }
    
   
    public function destroy($id)
    {
        $name = Names::find($id);
        if($name==NULL)
            return redirect("/storage/index");
        $name->delete();
        \Session::flash("msg","w:Name deleted successfully");
        return redirect("/storage/index");
    }
}
