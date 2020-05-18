<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>MeetMe Personal</title>
        <!-- Bootstrap CSS -->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('styling/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('styling/vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{asset('styling/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('styling/vendors/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('styling/vendors/lightbox/simpleLightbox.css')}}">
        <link rel="stylesheet" href="{{asset('styling/vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('styling/vendors/animate-css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('styling/vendors/popup/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('styling/vendors/flaticon/flaticon.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('styling/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('styling/css/responsive.css')}}">
    </head>
    <body>

      <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
              <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container box_1620">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html"><img src="{{asset('styling/img/logo.png')}}" alt="MeetMeText"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="{{asset('welcome')}}">Home</a></li> 
                <li class="nav-item"><a class="nav-link" href="{{asset('about')}}">About</a></li> 
                <li class="nav-item"><a class="nav-link" href="{{asset('services')}}">Services</a></li> 
                 <li class="nav-item"><a class="nav-link" href="{{asset('portfolio')}}">Portfolio</a></li> 
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="{{asset('blog')}}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{asset('singleblog')}}">Blog Details</a></li>  <!-- page name -->
                  </ul>
                </li> 
                <li class="nav-item"><a class="nav-link" href="{{asset('contactus')}}">Contact</a></li>
              </ul>
            </div> 
          </div>
              </nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
 
   @yield('content')      
 <!--================Footer Area =================-->
        <footer class="footer_area p_120">
          <div class="container">
            <div class="row footer_inner">
              <div class="col-lg-5 col-sm-6">
                <aside class="f_widget ab_widget">
                  <div class="f_title">
                    <h3>About Me</h3>
                  </div>
                  <p style="text-align: justify;">If you want usability and beatiful website then hire me for your work.hire me. Get in touch for a chat about your project and Follow me.</p>
                  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="{{asset('home')}}" target="_blank">MeetMe</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </aside>
              </div>
              <div class="col-lg-5 col-sm-6">
                <aside class="f_widget news_widget">
                  <div class="f_title">
                    <h3>Newsletter</h3>
                  </div>
                  <p>Stay updated with our latest trends</p>
                  <div id="mc_embed_signup">
                                <form class="row contact_form" enctype="multipart/form-data" action="{{url('email')}}" method="POST"  novalidate="novalidate">
                                  @csrf
                                  <div class="input-group d-flex flex-row">
                                        <input name="email" type="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="">
                                        <p style="color: white;text-align: center;font-size: 12px">@error('email'){{$message}} @enderror</p>
                                        <button class="btn sub-btn" type="submit" value="submit"><span class="lnr lnr-arrow-right"></span></button> 
                                        
                                    </div>        
                                   <!--  <div class="mt-10 info"></div> -->
                                </form>
                            </div>
                </aside>
              </div>
              <div class="col-lg-2">
                <aside class="f_widget social_widget">
                  <div class="f_title">
                    <h3>Follow Me</h3>
                  </div>
                  <p>Let us be social</p>
                  <ul class="list">
                    <li><a href="https://www.facebook.com/sherali7298?ref=bookmarks"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/SherAli67460889"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                  </ul>
                </aside>
              </div>
            </div>
          </div>
        </footer>
        <!--================End Footer Area =================-->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('styling/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('styling/js/popper.js')}}"></script>
        <script src="{{asset('styling/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('styling/js/stellar.js')}}"></script>
        <script src="{{asset('styling/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('styling/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('styling/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('styling/vendors/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('styling/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('styling/vendors/popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('styling/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('styling/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('styling/vendors/counter-up/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('styling/js/mail-script.js')}}"></script>
        <script src="{{asset('styling/js/theme.js')}}"></script>
      <!--   contcatg us  -->
        <script src="{{asset('styling/js/jquery.form.js')}}"></script>
        <script src="{{asset('styling/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('styling/js/contact.js')}}"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="{{asset('styling/js/gmaps.min.js')}}"></script>
        <script src="{{asset('styling/js/theme.js')}}"></script>
</body>
</html>        
        
       
      
      
        
