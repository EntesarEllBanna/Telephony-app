@extends("_Telephony")


@section("css")
<style>
    .whit{
     color:#eee;   
    }
</style>
@endsection

@section("content")

 <div class="row">
     <div >
        <h1 class=" wow bounceIn text-primary section-title">Name Details </h1>
                         
                        @include("_msg")
                    </div>
         
     
	<div class="col-sm-8">
<dl class="dl-horizontal ">
    <dt class="text-primary">Name</dt>
    <dd class="whit">{{$item->name}}</dd>
    <dt class="text-primary">Email</dt>
    <dd class="whit">{{$item->email}}</dd>
    <dt class="text-primary">Mobile</dt>
    <dd class="whit">{{$item->mobile}}</dd>
    <dt class="text-primary">TelePhone</dt>
    <dd class="whit">{{$item->tel}}</dd>
    <dt class="text-primary">Image</dt>
    <dd class="whit"> @if($item->logo!=NULL)
           
            <img width="200" src="/data/images/{{$item->logo}}" class="img-responsive img-thumbnail" />
            @endif</dd>
    <dt class="text-primary">Details</dt>
    <dd class="nav-link">{{$item->details}}</dd>
</dl>
<a class="btn btn-primary" href="/storage/{{$item->id}}/edit">Edit</a>
<a class="btn btn-default" href="/storage/index">Cancel</a>
<hr>
<form action="/store/{{$item->id}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="delete" />
    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
</form>
          </div>
          </div>
    
@endsection