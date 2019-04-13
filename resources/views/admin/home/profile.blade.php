@extends("_Telephony")



@section("content")
 
<div class="row">
    <div >
        <h1 class=" wow bounceIn text-primary section-title">UpdateProfile</h1>
                         
                        @include("_msg")
                    </div>
         
	<div class="col-sm-8">
<form enctype="multipart/form-data" action="/updateprofile" class="form-horizontal" method="post">
    {{csrf_field()}}
    
    <div class="form-group">
        <label for="fullname" class="col-sm-3 control-label text-primary">Name</label>
        <div class="col-sm-9">
            <input autofocus type="text" value="{{$item->name}}" class="form-control" id="name" name="name" placeholder=" Name">
        </div>
    </div>
    
    <div class="form-group">
        <label for="country_id" class="col-sm-3 control-label text-primary">Telephone</label>
        <div class="col-sm-9">
            <input rows="5" class="form-control" id="tel" name="tel" placeholder="tele" value="{{$item->tel}}">
        </div>
    </div>
    
    
    
    
    <div class="form-group">
        <label for="email" class="col-sm-3 control-label text-primary">Email</label>
        <div class="col-sm-9">
            <input type="email" value="{{$item->email}}" class="form-control" id="email" name="email" placeholder="Email">
        </div>
    </div>
    
    <div class="form-group">
        <label for="country_id" class="col-sm-3 control-label text-primary">Mobile</label>
        <div class="col-sm-9">
            <input type="number" value="{{$item->mobile}}" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
        </div>
    </div>
    
    <div class="form-group">
        <label for="email" class="col-sm-3 control-label text-primary">Details</label>
        <div class="col-sm-9">
            <textarea type="text" value="{{$item->details}}" class="form-control" id="details" name="details" placeholder="details"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-3 control-label text-primary"> To Change Image</label>
        <div class="col-sm-9">
            <input type="file" name="img" />
            @if($item->logo!=NULL)
            <hr>
            <img width="200" src="/data/images/{{$item->logo}}" class="img-responsive img-thumbnail" />
            @endif
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-primary">Update</button>
            <a class="btn btn-default" href="/index">Cancel</a>
        </div>
    </div>
    
   
</form>
    </div>
</div>
    
    
    
    









@endsection()