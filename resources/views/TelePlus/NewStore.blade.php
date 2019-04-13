@extends("_TelLayOut")

@section("title")
Store
@endsection()
@section("content")

  <section class="page-section cta">
      <div class="container">
        
        <div class="row">
          <div class="col-xl-12 mx-auto ms-auto">
            <div class="cta-inner text-center rounded">
                  @include("_msg")
        <form class="row xs-auto">
            
            <div class="col-xl-6 xs-6 mx-auto ms-auto">
      <input value="{{$q}}" type="text" autofocus name="q" placeholder="Enter your search" class="form-control" />
    </div>
    
    
    
    <div class="col-xl-3 xs-3 mx-auto ms-auto">
      <button class="btn btn-primary " type="submit"><i class="glyphicon glyphicon-search"></i> Search</button>
    </div>
             <div class="col-xl-3 xs-3 text-right mx-auto ms-auto">
        <a class="btn  btn-primary" href="/store/create"><i class="glyphicon glyphicon-plus"></i> Add New person</a>
    </div>
</form>
             

@if($items->count()>0)
<table class="table table-hover">
    <thead>
        <tr><th  width="10%"> Name</th><th width="18%"> Mobile</th><th width="13%"> Telephone</th><th width="18%">Image</th>
            
            <th width="18%"></th>
        </tr>
    </thead>
    <tbody>
        
        @foreach($items as $i)
        <tr>
            
            <td>{{$i->name}}</td>
            <td>{{$i->mobile}}</td>
            <td>{{$i->tele}}</td>
            <td> @if($i->logo!=NULL)
           
            <img width="80" src="/data/images/{{$i->logo}}" class="img-responsive img-thumbnail" />
            @endif</td>
            
            <td>
                    <a href="/store/{{$i->id}}" class="btn btn-info btn-xs">
                        <i class="glyphicon glyphicon-info-sign"></i>
                    </a>
                    <a href="/store/{{$i->id}}/edit" class="btn btn-primary btn-xs">
                        <i class="glyphicon glyphicon-edit"></i>
                    </a>
                    
                    <a href="/store/{{$i->id}}/delete" class="Confirm btn btn-danger btn-xs" id="Confirm">
                        <i class="glyphicon glyphicon-trash"></i>
                    </a>
            </td>
        </tr>
        @endforeach
        
        </tbody>
</table>
                
                
                
                
                
                
                
                
                
                
{{$items->links()}}
@else
<br><br>
<div class="alert alert-warning">There is no result(s) to show</div>
@endif
         </div>
       </div>
              </div>
            </div>
          

    </section>

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="/casual-theme/img/about.jpg" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                  <span class="section-heading-lower">About Our Cafe</span>
                </h2>
                <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
                <p class="mb-0">We guarantee that you will fall in
                  <em>lust</em>
                  with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection()
