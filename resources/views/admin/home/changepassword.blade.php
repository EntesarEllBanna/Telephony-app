@extends("_Telephony")

@section("content")

<div class="row">
    <div >
        <h1 class=" wow bounceIn text-primary section-title">ChangePassword</h1>
                         
                        @include("_msg")
                    </div>
         
    
	<div class="col-sm-8">
    
<form method="post" action="/changepassword" class="form-horizontal">
{{ csrf_field() }}
  
  
  <div class="form-group">
    <label for="oldpassword" class="col-sm-3 control-label text-primary"> Current password</label>
    <div class="col-sm-9">
      <input value="{{old("oldpassword")}}"  type="password" class="form-control" name="oldpassword" id="oldpassword" placeholder="Current password">
      <div class="text-danger">{{$errors->first('oldpassword')}}</div>
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="password" class="col-sm-3 control-label text-primary"> New Password</label>
    <div class="col-sm-9">
      <input value="{{old("password")}}"  type="password" class="form-control" name="password" id="password" placeholder="New Password">
      <div class="text-danger">{{$errors->first('password')}}</div>
    </div>
  </div>
  
  <div class="form-group">
    <label for="password_confirmation" class="col-sm-3 control-label text-primary">Confirm the new password</label>
    <div class="col-sm-9">
      <input value="{{old("password_confirmation")}}"  type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm the new password">
      <div class="text-danger">{{$errors->first('password_confirmation')}}</div>
    </div>
  </div>
  
  
  
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-primary">Change the password</button>
      <a class="btn btn-default" href="/index">Cancel</a>
    </div>
  </div>
</form>
    </div>
</div>


<h2>&nbsp;</h2>

@endsection()




