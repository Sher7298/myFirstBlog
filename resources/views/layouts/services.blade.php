@extends('master')

@section('content')
 <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
				<div class="banner_inner d-flex align-items-center">
					<div class="container">
						<div class="banner_content text-center">
							<h2>Services</h2>
							<div class="page_link">
								<a href="{{asset('home')}}">Home</a>
								<a href="{{asset('services')}}">Services</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area white_feature p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2><span class="fa fa-hand-o-right"> Offerings to my clients</span></h2>
        		</div>
        		<div class="feature_inner row">
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<!-- <i class="flaticon-city"></i> -->
                            <img src="{{asset('styling/img/responsive.jpg')}}">
        					<h4 style="margin-top: 30px">Responsive Web Design</h4>
        					<p style="text-align: justify;">We design fully responsive website that's works for all devices.We can turn static websites into beautiful domains with fluid images and graphics that will really impress your customers and clients. Responsive websites can be viewed easily on any device.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<!-- <i class="flaticon-skyline"></i> -->
                            <img src="{{asset('styling/img/commerce.png')}}" style="height: 110px;width: 270px">
        					<h4 style="margin-top: 30px">E-Commerce Website Development</h4>
        					<p style="text-align: justify;">E-commerce development is highly important in today's competitive environment.We develop attarctive e-commerce website and create attractive content that lures your target audience.
</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        				<!-- 	<i class="flaticon-sketch"></i> -->
                         <img src="{{asset('styling/img/cms.jpeg')}}" style="height: 110px;width: 270px">
        					<h4 style="margin-top: 30px; ">CMS  based  Website Development</h4>
        					<p style="text-align: justify;">We also develop CMS based websites that  allows you to create, edit, manage and maintain website pages on a single interface.  and will sur you  that both your site and workflow are streamlined</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<!-- <i class="flaticon-city"></i> -->
                            <img src="{{asset('styling/img/mobile.jpg')}}">
        					<h4 style="margin-top: 40px">Mobile App Development</h4>
        					<p style="text-align: justify;">Nowadays every business has to adapt to the latest technological developments. Mobile apps have changed the way, humans, experience and experience computing.We provide quality iOS, Android and Hybrid mobile development services all under one roof.</p>
        				</div>
        			</div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <!-- <i class="flaticon-city"></i> -->
                            <img src="{{asset('styling/img/mobile.jpg')}}">
                            <h4 style="margin-top: 40px">Designing</h4>
                            <p style="text-align: justify;">Good Designing brings good bussiness. In designing  i provide 
                              <ul>
                                  <li  class="fa fa-hand-o-right"> logo and identity design</li>
                                  <li  class="fa fa-hand-o-right"> print design</li><br>
                                  <li  class="fa fa-hand-o-right"> web design</li>
                                  <li  class="fa fa-hand-o-right"> Brand and stationary design</li>
                              </ul>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <!-- <i class="flaticon-city"></i> -->
                            <img src="{{asset('styling/img/mobile.jpg')}}">
                            <h4 style="margin-top: 40px">others</h4>
                            <p style="text-align: justify;">Nowadays every business has to adapt to the latest technological developments. Mobile apps have changed the way, humans, experience and experience computing.We provide quality iOS, Android and Hybrid mobile development services all under one roof.</p>
                        </div>
                    </div>
        			
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->
         <!--================Processes =================-->
         <section class="feature_area white_feature p_120">
            <div class="container">
                <div class="row">
                     <div class="main_title" style="margin-top: -40px;margin-left: 390px">
                        <h2>We Goes through processes</h2>
                    </div>
                </div>
                 <span class="  glyphicon glyphicon-arrow-right "></span>
                <div class="row">
                      <div class="col-lg-3 col-md-3">
                        <div class="feature_item">
                           <h1><span class="fa fa-hand-o-right" > Planning</span></h1>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-3" style="margin-top: 60px">
                        <div class="feature_item">
                           <h1><span class="fa fa-hand-o-right"> Coding</span> </h1>
                        </div>
                    </div>
                      <div class="col-lg-3 col-md-3" style="margin-top: 120px">
                        <div class="feature_item">
                           <h1><span class="fa fa-hand-o-right"> Execution</span></h1>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-3" style="margin-top: 180px">
                        <div class="feature_item">
                           <h1><span class="fa fa-hand-o-right">performance</span></h1>
                        </div>
                    </div>
                </div>
            </div>
             
         </section>

        
       <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120">
          <div class="container">
            <div class="main_title">
              <h2>customers Feedbacks</h2>
              <p  style="content: '';background-color: black;height: 3px;width: 200px;margin-left:220px;margin-bottom: 40px"></p>
              <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
            </div>
            <div class="testi_inner">
          <div class="testi_slider owl-carousel">
            <div class="item">
              <div class="testi_item">
                <img src="{{asset('styling/img/personall.jpg')}}" class="img-circle w-50 " style="margin-left: 70px;margin-top: -40px">
                <p>You are doing a good job here, and I want you to know that your presence and work are acknowledged and they are helping us reach our targets and goals.</p>
                <h4>Hina Qayyum</h4>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star-half-o"></i></a>
              </div>
            </div>
            <div class="item">
              <div class="testi_item">
                 <img src="{{asset('styling/img/personall.jpg')}}" class="img-circle w-50 " style="margin-left: 70px;margin-top: -40px">
                <p>Your work speaks volumes of the kind of man you are – efficient, organized and result-oriented.</p>
                <h4>Basit Abbasi</h4>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star-half-o"></i></a>
              </div>
            </div>
            <div class="item">
              <div class="testi_item">
                 <img src="{{asset('styling/img/personall.jpg')}}" class="img-circle w-50 " style="margin-left: 70px;margin-top: -40px">
                <p>I'm Glad to Work with you serioulsy you are very hard worker and friendly guy.</p>
                <h4>Usman Ali</h4>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star"></i></a>
                <a href="#"><i class="fa fa-star-half-o"></i></a>
              </div>
            </div>
          </div>
            </div>
          </div>
        </section> -->
        <!--================End Testimonials Area =================-->
@endsection