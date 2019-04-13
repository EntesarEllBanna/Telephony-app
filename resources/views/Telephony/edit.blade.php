@extends("_Telephony")

@section("content")

 <div class="container">
<div class="row">
    <div >
        <h1 class=" wow bounceIn text-primary section-title">Edit The Name</h1>
                         
                        @include("_msg")
                    </div>
              
	<div class="col-sm-8">
<form action="/storage/{{$item->id}}" enctype="multipart/form-data" class="form-horizontal" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="put"/>
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label text-primary">Name</label>
            <div class="col-sm-10">
              <input autofocus type="text" value="{{$item->name}}" class="form-control" name="name" placeholder="Enter the name " required>
            </div>
          </div>
    
    <div class="form-group">
            <label for="mobile" class="col-sm-2 control-label text-primary">Mobile number</label>
            <div class="col-sm-10">
              <input autofocus type="text" value="{{$item->mobile}}" class="form-control" name="mobile" placeholder="Enter the mobile number " required>
            </div>
          </div>
    
    <div class="form-group">
            <label for="tel" class="col-sm-2 control-label text-primary">Tele-home number</label>
            <div class="col-sm-10">
              <input autofocus type="text" value="{{$item->tel}}" class="form-control" name="tel" placeholder="Enter Tele-home number ">
            </div>
          </div>
    
    <div class="form-group">
            <label for="email" class="col-sm-2 control-label text-primary">Email</label>
            <div class="col-sm-10">
              <input autofocus type="text" value="{{$item->email}}" class="form-control" name="email" placeholder="Enter the email address ">
            </div>
          </div>
    
    <div class="form-group">
            <label for="details" class="col-sm-2 control-label text-primary">Details</label>
            <div class="col-sm-10">
                <textarea autofocus type="text" value="{{$item->details}}" class="form-control" name="details" placeholder="Enter the details "></textarea>
            </div>
          </div>
    
    
     
     <div class="form-group">
        <label for="email" class="col-sm-2 control-label text-primary">To Change the image</label>
        <div class="col-sm-10">
            <input type="file" name="img" />
            @if($item->logo!=NULL)
            <hr>
            <img width="200" src="/data/images/{{$item->logo}}" class="img-responsive img-thumbnail" />
            @endif
        </div>
    </div>
    <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Update</button>
                <a class="btn btn-default" href="/storage/index">Cancel</a>
            </div>
    
   
        </form>
    </div></div></div>
@endsection