@extends("_TelLayOut")

@section("title")
Create Account
@endsection



@section("content")
 @include("_msg")
<div class="row">
	<div class="col-sm-8">
<form action="/store" enctype="multipart/form-data"  class="form-horizontal" method="post">
    {{csrf_field()}}
         <div class="form-group">
            <label for="name" class="col-sm-2 control-label text-primary">Name</label>
            <div class="col-sm-10">
              <input autofocus type="text" value="{{old("name")}}" class="form-control" name="name" placeholder="Enter the name " >
            </div>
          </div>
    
    <div class="form-group">
            <label for="mobile" class="col-sm-2 control-label text-primary">Mobile number</label>
            <div class="col-sm-10">
              <input autofocus type="text" value="{{old("mobile")}}" class="form-control" name="mobile" placeholder="Enter the mobile number" >
            </div>
          </div>
    
    <div class="form-group">
            <label for="tele" class="col-sm-2 control-label text-primary">Tele-home number</label>
            <div class="col-sm-10">
              <input autofocus type="text" value="{{old("name")}}" class="form-control" name="tele" placeholder="Enter Tele-home number ">
            </div>
          </div>
    
    <div class="form-group">
            <label for="email" class="col-sm-2 control-label text-primary">Email</label>
            <div class="col-sm-10">
              <input autofocus type="emil" value="{{old("email")}}" class="form-control" name="email" placeholder="Enter the email address ">
            </div>
          </div>
    
    <div class="form-group">
            <label for="details" class="col-sm-2 control-label text-primary">Details</label>
            <div class="col-sm-10">
              <textarea autofocus type="text" value="{{old("details")}}" class="form-control" name="details" placeholder="Enter the details "></textarea>
            </div>
          </div>
    
    
    
    
     
    <div class="form-group">
        <label for="logo" class="col-sm-2 control-label text-primary">Image</label>
        <div class="col-sm-10">
            <input type="file" name="img" />

        </div>
    </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Create</button>
                <a class="btn btn-default" href="/store">Cancel</a>
            </div>
          </div>
        </form>
    </div></div>
@endsection