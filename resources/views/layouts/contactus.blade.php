@extends('master')

@section('content')
   <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
        <div class="banner_inner d-flex align-items-center">
          <div class="container">
            <div class="banner_content text-center">
              <h2>Contact Us</h2>
              <div class="page_link">
                <a href="{{asset('home')}}">Home</a>
                <a href="{{asset('contactus')}}">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
 <!--================Google map =================-->
<!-- <div class="container">
  <div class="row">
    <div class="col-12">  
      
    </div>
  </div>
</div> -->

<!--Google Maps-->
        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
               <div class="row">
                 <div class="col-12">
                  <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"style="border:0;width: 100%;;height: 400px" allowfullscreen></iframe>

                 </div>
               </div>
                <div class="row" style="margin-top: 100px">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Rawalpindi, Pakistan</h6>
                                <p>Stadioum Road St#7</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#"> +92(343) 1058 380</a></h6>
                                <p>Mon to Fri 11am to 10 pm</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">sherali7298@gmail.com</a></h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" enctype="multipart/form-data" action="{{url('contactus')}}" method="POST" id="contactForm" novalidate="novalidate">
                             @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" autocomplete="off" style="height: 40px" ><p style="color: red;text-align: center;font-size: 12px">@error('name'){{$message}} @enderror</p>

                                </div>
                               
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" style="height: 40px" autocomplete="off"><p style="color: red;text-align: center;font-size: 12px">@error('email'){{$message}} @enderror</p>
                                </div>
                                  
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject"  autocomplete="off" style="height: 40px"><p style="color: red;text-align: center;font-size: 12px">@error('subject'){{$message}} @enderror</p>
                                </div>
                            </div>
                              
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"  autocomplete="off"></textarea><p style="color: red;text-align: center;font-size: 12px"> @error('message'){{$message}} @enderror</p>
                                </div>
                            </div>
                             
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
         <!--================Contact Success and Error message Area =================-->
        <div id="success" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Thank you</h2>
                        <p>Your message is successfully sent...</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals error -->

        <div id="error" class="modal modal-message fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-close"></i>
                        </button>
                        <h2>Sorry !</h2>
                        <p> Something went wrong </p>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Contact Success and Error message Area =================-->
           <script src="{{asset('styling/js/jquery.form.js')}}"></script>
        <script src="{{asset('styling/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('styling/js/contact.js')}}"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="{{asset('styling/js/gmaps.min.js')}}"></script>
        <script src="{{asset('styling/js/theme.js')}}"></script>
@endsection
