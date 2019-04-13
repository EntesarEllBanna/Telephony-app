<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Telephony</title>
<!--
App Starter Template
http://www.templatemo.com/tm-492-app-starter
-->
<link rel="stylesheet" href="/templatemo_492_app_starter/css/bootstrap.min.css">
<link rel="stylesheet" href="/templatemo_492_app_starter/css/animate.css">
<link rel="stylesheet" href="/templatemo_492_app_starter/css/font-awesome.min.css">

<link rel="stylesheet" href="/templatemo_492_app_starter/css/magnific-popup.css">

<link rel="stylesheet" href="/templatemo_492_app_starter/css/owl.theme.css">
<link rel="stylesheet" href="/templatemo_492_app_starter/css/owl.carousel.css">

<link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>

<!-- Main css -->
<link rel="stylesheet" href="/templatemo_492_app_starter/css/style.css">
<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">-->
<style>
    html {
  font-size: 100%; }
    
    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: #1dc9e3;
    background-color: transparent;
}
   
body { font-size: 18px; }
    
    </style>
    @yield("css")
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div>



<!-- Navigation Section -->

<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>@guest
			<a href="/index" class="navbar-brand"><span>Tele</span> Phony<span>
                </span></a> @else<a href="/index" class="navbar-brand"><span>Tele</span> Phony<span>
            ({{ Auth::user()->name }})({{ Auth::user()->logo }})
                </span></a>  @endguest
		</div>

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
                @guest
               <li class='{{ends_with(url()->current(),"/index")?"active":""}}' ><a href="/index" class="smoothScroll wow bounceIn  "><strong>Home</strong></a></li>
                <li class=' {{ends_with(url()->current(),"/storage/index")?"active":""}}' ><a href="/storage/index" class="smoothScroll wow bounceIn "><strong>Storage</strong></a></li>
                <li class=' {{ends_with(url()->current(),"/news")?"active":""}}'><a href="/news" class=" wow bounceIn smoothScroll "><strong>Newsletter</strong></a></li>
                <li><a href="#" data-toggle="modal" data-target="#modal1"><strong>Contact</strong></a></li>
			 @else
                <li class=' {{ends_with(url()->current(),"/index")?"active":""}}'><a href="/index" class="smoothScroll wow bounceIn"><strong>Home</strong></a></li>
                <li class='{{ends_with(url()->current(),"/news")?"active":""}}'><a href="/news" class="smoothScroll   wow bounceIn"><strong>Newsletter</strong></a></li>
                <li><a href="#" data-toggle="modal" class="smoothScroll wow bounceIn" data-target="#modal1"><strong>Contact</strong></a></li>
                <li class="nav-item dropdown ">
                                <a id="navbarDropdown" 

class=" wow bounceIn nav-link  @if(Route::is('/updateprofile')) active @elseif(Route::is('/changepassword')) active @endif
                 dropdown-toggle  smoothScroll" href="#" role="button" data-toggle="dropdown" 
                                   aria-haspopup="true" 
                                   aria-expanded="false"
                                   v-pre>
                                   <strong>{{ __('AboutMe') }}</strong> <i class="fa fa-user"></i>
                                </a>

                                <div class="dropdown-menu  " aria-labelledby="navbarDropdown">
                                     <a class="dropdown-item smoothScroll {{ends_with(url()->current(),"/updateprofile")?"active":""}}  wow bounceIn" href="/updateprofile"
                                       >
                                       <i class="fa fa-tv"></i><strong>{{ __('UpdateProfil') }}</strong> 
                                    </a>
                                    
                                    
                                    <a class="dropdown-item smoothScroll {{ends_with(url()->current(),"/updateprofile")?"active":""}}  wow bounceIn" href="/storage/index"
                                       >
                                       <i class="fa fa-user"></i><strong>{{ __('MyStorage') }}</strong> 
                                    </a>
                                    
                                     <a class=" wow {{ends_with(url()->current(),"/changepassword")?"active":""}}  bounceIn dropdown-item smoothScroll" href="/changepassword"
                                     >
                                       <i class="fa fa-edit"></i> <strong>{{ __('MyPassword') }}</strong>
                                    </a>
                                    
                                    
                                    <a class=" wow bounceIn dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-user"></i><strong>{{ __('Logout') }}</strong> 
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
              @endguest	  
		</ul>
		</div>

	</div>
</div>
<div class="col-md-12 col-sm-12">
                    <div class="wow bounceIn section-title">
                                                 
                         @yield("title")

                    </div>
               </div>




<!-- Footer Section -->
    <div class="modal fade " id="Confirm" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirmation</h4>
          </div>
          <div class="modal-body">
            <p>Are you sure you want to continue?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger">Yes, sure</a>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

   
@yield("content")
<footer>
	<div class="container">
		<div class="row">

               <div class="col-md-8 col-sm-6">
                    <div class="wow fadeInUp footer-copyright" data-wow-delay="0.4s">
                         <p>Copyright &copy; 2018 Telephony
                         <span>||</span> 
                         Coded by: <a href="https://plus.google.com/+templatemo" title="free css templates" target="_blank">EntesarElBanna</a></p>
                    </div>
               </div>

			<div class="col-md-4 col-sm-6">
				<ul class="wow fadeInUp social-icon" data-wow-delay="0.8s">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-google-plus"></a></li>
                         <li><a href="#" class="fa fa-dribbble"></a></li>
                         <li><a href="#" class="fa fa-linkedin"></a></li>
                    </ul>
               </div>
			
		</div>
	</div>
</footer>


<!-- Modal Contact -->

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
      <div class="modal-content modal-popup">
          <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h2 class="modal-title">Contact Form</h2>
          </div>

               <form action="#" method="post">
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
                 	<input name="email" type="email" class="form-control" id="email" placeholder="Email Address" required>
                 	<textarea name="message" rows="3" class="form-control" id="message" placeholder="Message" required></textarea>
                    <input name="submit" type="submit" class="form-control" id="submit" value="Send Message">
               </form>
          </div>
     </div>
</div>


<!-- Back top -->

<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- SCRIPTS -->

<script src="/templatemo_492_app_starter/js/jquery.js"></script>
<script src="/templatemo_492_app_starter/js/bootstrap.min.js"></script>
<script src="/templatemo_492_app_starter/js/jquery.magnific-popup.min.js"></script>
<script src="/templatemo_492_app_starter/js/magnific-popup-options.js"></script>
<script src="/templatemo_492_app_starter/js/owl.carousel.min.js"></script>
<script src="/templatemo_492_app_starter/js/smoothscroll.js"></script>
<script src="/templatemo_492_app_starter/js/wow.min.js"></script>
<script src="/templatemo_492_app_starter/js/custom.js"></script>
    <script>
          $(function(){
              //$("#Confirm").modal("show");
              $(".Confirm").click(function(){
                  $("#Confirm").modal("show");
                  $("#Confirm .btn-danger").attr("href",$(this).attr("href"));
                  return false;
              });
          });
      </script>
    
@yield("js")
</body>
</html>