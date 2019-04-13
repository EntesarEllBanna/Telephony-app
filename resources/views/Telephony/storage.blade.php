@extends("_Telephony")
<!--
-->

@section("css")
<style>
    .White{
     color:#eee;   
    }
</style>
@endsection()

@section("content")

     <div class="container">
          <div class="row">

                  <div >
                         <h1 class=" wow bounceIn text-primary section-title">Your Storage</h1>
                         
                        @include("_msg")
                    </div>
              
                <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.6s">
                    <div class="pricing-plan">
                         <div class="pricing-month">
                             
                             <form class="row xs-auto">
            
            <div class="col-xl-6 xs-6 ">
      <input value="{{$q}}" type="text" autofocus name="q" placeholder="Enter your search" class="form-control" />
    </div>
    
    
    
    <div class="col-xl-3 xs-3 ">
      <button class="btn btn-primary " type="submit"><i class="fa fa-search"></i> Search</button>
    </div>
             <div class="col-xl-3 xs-3 text-right">
        <a class="btn  btn-primary" href="/storage/create"><i class="fa fa-plus"></i> Add New person</a>
    </div>
</form>
             
                         </div>
                        
                        
                         <div class="pricing-title">
                             @if($items->count()>0)
<table class="table table-hover ">
    <thead class="text-primary White">
        <tr><th  width="18%"> Name</th><th width="12%"> Mobile</th><th width="13%"> Telephone</th><th width="18%">Image</th>
            
            <th width="10%"></th>
        </tr>
    </thead >
    <tbody class="text-primary">
        
        @foreach($items as $i)
        <tr>
            
            <td>{{$i->name}}</td>
            <td>{{$i->mobile}}</td>
            <td>{{$i->tel}}</td>
            <td> @if($i->logo!=NULL)
           
            <img width="80" src="/data/images/{{$i->logo}}" class="img-responsive img-thumbnail" />
            @endif</td>
            
            <td>
                    <a href="/storage/{{$i->id}}" class="btn btn-info btn-xs">
                        <i class="fa fa-tv"></i>
                    </a>
                    <a href="/storage/{{$i->id}}/edit" class="btn btn-primary btn-xs">
                        <i class="fa fa-edit"></i>
                    </a>
                    
                    <a href="/storage/{{$i->id}}/delete" class="Confirm btn btn-danger btn-xs" id="Confirm">
                        <i class="fa fa-trash"></i>
                    </a>
            </td>
        </tr>
        @endforeach
        
        </tbody>
</table>
            
{{$items->links()}}
@else

<div class="alert alert-warning">There is no result(s) to show</div>
@endif
    
                         </div>
                        </div>
               </div>

               
          </div>
     </div>


@endsection()

