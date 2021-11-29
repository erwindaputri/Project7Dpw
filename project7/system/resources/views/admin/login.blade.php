<!DOCTYPE html>
<html>

<head>
  @include('section.assets')
</head>

<body>
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="{{url('public')}}/images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      @include('section.header')
    </header>
    <!-- end header section -->
<div class="container py-2">
    <div class="row">
        <div class="col-md-12">
         <div class="logo">
            <a href="#">
               <h1>Vegetables</h1>
            </a>
         </div>
            <!-- plant section -->

<div class="container py-2">
    <div class="row">
        <div class="col-md-12">
      <div class="logo">
        <a href="#">
          <h1>Login Admin</h1>
        </a>
      </div>
            <div class="row">
                <div class="col-md-6 login-form mx-auto">
                    <!-- form card login -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        @include('utils.notif')
                        <div class="card-body">
                            <form id="formLogin" action="{{url('/dashboard')}}">
                              @csrf
                                <div class="form-group">
                                    <input for="username" class="form-control" id="name" name="name" placeholder="Username" type="text" required="">
                  <i class="fa fa-user"></i>
                                </div>
                                <div class="form-group">
                                    <input for="password" type="password" class="form-control" placeholder="Password" id="pwd" required="">
                  <i class="fa fa-lock"></i>
                                </div>
                <div class="row mb-3">
                  <div class="col-md-12">
                    <div class="checkbox checkbox-primary">
                      <input id="checkbox1" class="styled" type="checkbox">
                      <label for="checkbox1">
                        Remember me 
                      </label>
                    </div>
                  </div>
                  <div class="col-md-12 text-left">
                    <a href="#">forgot password?</a>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-lg-12 text-right"><button type="submit" class="btn btn-success hover-btn btn-wd " id="btnLogin"><span>Login</span></button></div>
                </div>
                            </form>
              <div class="naw-text mb-3">
                <h5>New to Cloud?</h5>
              </div>
              <div class="row mb-3">
                <div class="col-lg-6">
                  <a href="#" class="btn btn-primary btn-wd fb btn-block">
                    <span><i class="fa fa-facebook"></i> &nbsp;&nbsp;&nbsp;Login Facebook</span>
                  </a>
                </div>
                <div class="col-lg-6">
                  <a href="#" class="btn btn-info btn-wd gp btn-block">
                    <span><i class="fa fa-google-plus"></i> &nbsp;&nbsp;&nbsp;Login Google</span>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="create-box text-block text-center my-0">
                    <span class="text-small font-weight-semibold">Not a member ?</span>
                    <a href="#" class="text-black text-small">Create new account</a>
                  </div>
                </div>
              </div>
                        </div>
                        
                    </div>
                    <!-- /form card login -->
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->
  <!-- end about section -->

<!-- jquery latest version -->
<script src="{{url('public')}}/login/js/jquery.min.js"></script>
<!-- popper.min.js -->
<script src="{{url('public')}}/login/js/popper.min.js"></script>    
<!-- bootstrap js -->
<script src="{{url('public')}}/login/js/bootstrap.min.js"></script>
<!-- Jquery Rippler js -->
<script src="{{url('public')}}/login/js/jquery.rippler.min.js"></script>   
<!-- script js -->
<script src="{{url('public')}}/login/js/script.js"></script>
</body>
</html>
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <div class="container">
      <div class="row ">
        <div class="col-sm-6 col-md-4 col-lg-3 footer-col">
          <div class="footer_detail">
            <a href="index.html">
              <h4>
                Eatveg
              </h4>
            </a>
            <p>
              Soluta odit exercitationem rerum aperiam eos consectetur impedit delectus qui reiciendis, distinctio, asperiores fuga labore a? Magni natus.
            </p>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mx-auto footer-col">
          <h4>
            Contact us
          </h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit
          </p>
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +01 123455678990
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                Email : vegan@gmail.com
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_form">
            <h4>
              SIGN UP TO OUR NEWSLETTER
            </h4>
            <form action="">
              <input type="text" placeholder="Enter Your Email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Vegetables</a>
        </p>
      </div>
    </div>
  </section>
  <!-- end  footer section -->

 @include('section.js')
  <!-- End Google Map -->
</body>

</html>