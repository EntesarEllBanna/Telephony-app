@extends("_Telephony")

<!--
@section("css")
<style>

#home {
    background: #535bd4 url(../images/home-bg.jpg) no-repeat;
    background-size: cover;
    background-position: center center;
    color: #ffffff;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
   
    position: relative;
}
    </style>
@endsection()

@section("content")
-->
<section style=" height:61vh;" >
     
	<div class="container">
		<div class="row">

               <div class="wow fadeInUp col-md-6 col-sm-5 col-xs-10 col-xs-offset-1 col-sm-offset-0" data-wow-delay="0.2s">
                    <img src="templatemo_492_app_starter/images/home-img.png" class="img-responsive" alt="Home">
               </div>

            
               <div class="col-md-6 col-sm-7 col-xs-12">
                    <div class="home-thumb">
                         <h1 class="wow fadeInUp" data-wow-delay="0.6s">Telephony</h1>
                         <p class="wow fadeInUp" data-wow-delay="0.8s">The optimal way to present  all your  mobile connects on your  labtop. Let us create amazing things!</p>
                        
                        @guest
                         <a href="/login" class="wow fadeInUp section-btn btn btn-success smoothScroll" data-wow-delay="1s"><i class="fa fa-user"></i>Login</a>
                        <a href="/register" class="wow fadeInUp section-btn btn btn-success smoothScroll" data-wow-delay="1s"><i class="fa fa-user"></i>Register</a>
                        @else
                        <a href="/storage/index" class="wow fadeInUp section-btn btn btn-success smoothScroll" data-wow-delay="1s">Your Strorage</a>
                        <a href="/logout" class="wow fadeInUp section-btn btn btn-success smoothScroll" data-wow-delay="1s" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-user"></i>logOut
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                   
                        </a>
                        
                        @endguest
                    </div>
               </div>

		</div>
	</div>
</section>
@endsection()
