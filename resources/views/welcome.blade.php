@extends('master')
@section('content')
   <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="container box_1620">
              <div class="banner_inner d-flex align-items-center">
          <div class="banner_content">
            <div class="media">
              <div class="d-flex">
                <img src="{{asset('styling/img/personall.jpg')}}" alt="sherImage" style="width: 550px">
              </div>
              <div class="media-body">
                <div class="personal_text">
                  <h6>Hello Everybody, i am</h6>
                  <h3>Sher M.K</h3>
                  <h4>Junior UI/UX Developer</h4>
                  <p>Thank you for taking the time to visit.I design beautiful,engaging user experience for the web.I pride myself on reliable communication with my clients and I'm an easy to work with,friendly guy.Fill your senses with highlight of works,read the juicy bits <b><a href="{{asset('about')}}" style="color: black">About me</a></b>,find out why you should hire me nd then get in touch for a chat about your project.</p>
                  <ul class="list basic_info">
                    <li><a href="#"><i class="lnr lnr-calendar-full"></i> 4th October, 1997</a></li>
                    <li><a href="#"><i class="lnr lnr-phone-handset"></i> +92343 1058 380</a></li>
                    <li><a href="#"><i class="lnr lnr-envelope"></i>sherali7298@gmail.com</a></li>
                    <li><a href="#"><i class="lnr lnr-home"></i> Rawalpindi, Pakistan</a></li>
                  </ul>
                  <ul class="list personal_social">
                    <li><a href="https://www.facebook.com/sherali7298?ref=bookmarks"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/SherAli67460889"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_area p_120">
          <div class="container">
            <div class="row welcome_inner">
              <div class="col-lg-6">
                <div class="welcome_text">
                  <h4>About Myself</h4>
                  <p style="text-indent: 70px;text-align: justify;"><b style="color: black">Hello</b> everybody, I'm Sher Muhammad Khan from Rawalpindi, pakistan and working as a juniior Ui/Ux developer at New Vision Technalogies and also Freelancer.I have a diverce set of skill,ranging from design,to HTML+CSS+Javascript,all way to PHP and custome Drupal developer. </p>
                  <p style="margin-top: -40px;text-indent: 70px;text-align: justify;">I primarily use PHP, but picking up a new framework or language is't a problem.I have extensive programming experience and I'm comfortable developing on the frontend or backend as well as setting up or managing infrastrucutre.You can Find me on Twitter,Facebook, Stackoverflow or Github if you are interested in working on a project together.Don't hesitate to get in touch.
                  </p>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="wel_item">
                        <i class="lnr lnr-database"></i>
                        <h4>$2.5M</h4>
                        <p>Total Donation</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="wel_item">
                        <i class="lnr lnr-book"></i>
                        <h4>1465</h4>
                        <p>Total Projects</p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="wel_item">
                        <i class="lnr lnr-users"></i>
                        <h4>3965</h4>
                        <p>Total Volunteers</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="tools_expert">
                  <div class="skill_main">
                  <!-- <h4>After Effects <span class="counter">85</span>%</h4> -->
                  <div class="skill_item">
                  <h4>PHP 95%</h4>
                  <div class="progress_br">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="skill_item">
                  <h4>Javascript 80%</h4>
                  <div class="progress_br">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="skill_item">
                  <h4>HTML & CSS 95 %</h4>
                  <div class="progress_br">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="skill_item">
                  <h4>Bootsrap 95 %</h4>
                  <div class="progress_br">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="skill_item">
                  <h4>React Native 60 %</h4>
                  <div class="progress_br">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
                <div class="skill_item">
                  <h4>Illustrator 60 %</h4>
                  <div class="progress_br">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================End Welcome Area =================-->
           <!--================Start Tab Area =================-->
      


  <!--================My Tabs Area =================-->
        <section class="mytabs_area p_120">
          <div class="container">
            <div class="tabs_inner">
          <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-left: 380px;margin-top: -20px">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">My Experiences</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Education</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane  show active" id="home" role="tabpanel" aria-labelledby="home-tab" >
              <ul class="list">
                <li>
                  <span></span>
                  <div class="media">
                    <div class="d-flex">
                      <p>November 2019 to Con't</p>
                    </div>
                    <div class="media-body">
                      <h4>Inetrnship</h4>
                      <p>Junior web dveloper <br/> N.V Technalogies</p>
                    </div>
                  </div>
                </li>
                <li>
                  <span></span>
                  <div class="media">
                    <div class="d-flex">
                      <p>March 2018 to 2018</p>
                    </div>
                    <div class="media-body">
                      <h4>Inetrnship</h4>
                      <p>Web Developer <br /> MegaIT</p>
                    </div>
                  </div>
                </li>
                <li>
                <span></span>
                  <div class="media">
                    <div class="d-flex">
                      <p>March 2017 to present</p>
                    </div>
                    <div class="media-body">
                      <h4>Colorlib</h4>
                      <p>Senior Web Developer <br />Santa monica, Los angeles</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <ul class="list">
                <li>
                  <span></span>
                  <div class="media">
                    <div class="d-flex">
                      <p>March 2017 to present</p>
                    </div>
                    <div class="media-body">
                      <h4>Colorlib</h4>
                      <p>Senior Web Developer <br />Santa monica, Los angeles</p>
                    </div>
                  </div>
                </li>
                <li>
                  <span></span>
                  <div class="media">
                    <div class="d-flex">
                      <p>March 2017 to present</p>
                    </div>
                    <div class="media-body">
                      <h4>Colorlib</h4>
                      <p>Senior Web Developer <br />Santa monica, Los angeles</p>
                    </div>
                  </div>
                </li>
                <li>
                <span></span>
                  <div class="media">
                    <div class="d-flex">
                      <p>March 2017 to present</p>
                    </div>
                    <div class="media-body">
                      <h4>Colorlib</h4>
                      <p>Senior Web Developer <br />Santa monica, Los angeles</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
            </div>
          </div>
        </section>
       
        
        
        <!--================End My Tabs Area =================--> 
        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120">
          <div class="container">
            <div class="main_title">
              <h2>Testimonials</h2>
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
        </section>
        <!--================End Testimonials Area =================-->
@endsection
