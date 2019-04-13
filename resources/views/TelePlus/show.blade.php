@extends("_TelLayOut")

@section("title")
Account Details
@endsection



@section("content")
 @include("_msg")
<dl class="dl-horizontal ">
    <dt class="text-primary">Name</dt>
    <dd class="nav-link">{{$item->name}}</dd>
    <dt class="text-primary">Email</dt>
    <dd class="nav-link">{{$item->email}}</dd>
    <dt class="text-primary">Mobile</dt>
    <dd class="nav-link">{{$item->mobile}}</dd>
    <dt class="text-primary">TelePhone</dt>
    <dd class="nav-link">{{$item->tele}}</dd>
    <dt class="text-primary">Image</dt>
    <dd class="nav-link"> @if($item->logo!=NULL)
           
            <img width="200" src="/data/images/{{$item->logo}}" class="img-responsive img-thumbnail" />
            @endif</dd>
    <dt class="text-primary">Details</dt>
    <dd class="nav-link">{{$item->details}}</dd>
</dl>
<a class="btn btn-primary" href="/store/{{$item->id}}/edit">Edit</a>
<a class="btn btn-default" href="/store">Cancel</a>
<hr>
<form action="/store/{{$item->id}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="delete" />
    <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection