<!DOCTYPE html>
<html lang="en">

   

     <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - @yield("title")</title>

    <!-- Bootstrap core CSS -->
   
       
<!--        <link href="/metronic-rtl/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />-->
        
          <link href="/casual-theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--         from casual-->

       
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/casual-theme/css/business-casual.min.css" rel="stylesheet">

    @yield("css")
 

    <!-- Bootstrap core CSS -->
<!--   from sticy-->
<link href="/Bootstrap/css/bootstrap.mincolor2.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
   

    @yield("css")
  </head>

  
  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary " style="font-size:39px;margin-top:5px">TelePlus</span>
        
     
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4 " id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">TelePlus</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto " >
            <li class="nav-item {{ends_with(url()->current(),"/casual")?"active":""}} px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="/casual">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item {{ends_with(url()->current(),"/store/index")?"active":""}} px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="/store/index">Store</a>
            </li>
              
              
              @guest
              
              
              <li class="nav-item {{ends_with(url()->current(),"/register")?"active":""}} px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="/register"><i class="glyphicon glyphicon-user"></i>regester</a>
            </li>
              
              <li class="nav-item {{ends_with(url()->current(),"/login")?"active":""}} px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="/login"><i class="glyphicon glyphicon-user"></i>login</a>
            </li>
				         
                            @else
                            
                            
                                
                                
        
              <li class="nav-item  {{ends_with(url()->current(),"/logout")?"active":""}} px-lg-4">
                                        <a class="nav-link text-uppercase text-expanded" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="glyphicon glyphicon-user"></i> logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>
                                
                            
               <li class="nav-item {{ends_with(url()->current(),"/changepassword")?"active":""}} px-lg-4">
                                    <a class="nav-link text-uppercase text-expanded" href="/admin/home/changepassword">
                                      <i class="glyphicon glyphicon-user"></i> change password </a>
                                </li>
              
              
               <li class="nav-item {{ends_with(url()->current(),"/profile")?"active":""}}  px-lg-4">
                                    <a class="nav-link text-uppercase text-expanded" href="/admin/home/profile">
                       <i class="glyphicon glyphicon-user"></i>
 your profile({{ Auth::user()->name }}) <img src="/data/imgages/{{ Auth::user()->logo }}"  class="image-responsive" /> 
                   
                  

                                </li>
                        @endguest	            
              
              
              
              
                    </ul>
                </div>
                 
        </div>
      </nav>
              
         
    
<div class="modal fade" id="Confirm" tabindex="-1" role="dialog">
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
           

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="casual-theme/vendor/jquery/jquery.min.js"></script>
    <script src="casual-theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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
