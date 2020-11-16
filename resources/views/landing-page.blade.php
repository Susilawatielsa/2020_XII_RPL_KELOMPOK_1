<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- My Css -->
    <style>
        /* navbar */
.navbar{
    position: relative;
    z-index: 1;
}

.navbar-brand {
    font-family: viga;
    font-size: 15px;
}

.navbar img {
    width: 80px;
    height: 80px;
 }


/*jumbotron*/
.jumbotron{
    background-color: orange;
    background-size: cover;
    height: 550px;
    text-align: center;
    position: relative;
}


.jumbotron .container{
    z-index: 1;
    position: relative;
} 

.jumbotron::after {
    content: '';
    display: block;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(to top, rgba(255,255,255,0.40), rgba(0,0,0,0.10));
    position: absolute;
    bottom: 0;
}

.jumbotron .display-4{
    color: white;
    text-align: center;
    margin-top: 10px;
    font-weight: 200;
    text-shadow: 2px 2px 10px grey;
    font-size: 30px;
    margin-bottom: 30px;
}

.jumbotron .display-4 span{
    font-weight: 500;
    margin-top: -5px;
}

/*info panel*/

.info-panel{
    box-shadow: 0 3px 20px rgba(0,0,0,0.5);
    border-radius: 12px;
    margin-top: 20px;
    background-color: white;
    padding: 30px;

}

.info-panel img{
    width: 80px;
    height: 8-px;
    margin-right: 20px;
    margin-bottom: 20px;
}

.info-panel p{
    font-size: 14px;
    color: grey;
    margin-top: 10px;
    font-weight: 200;
}

/*workingspace*/
.workingspace{
    margin-top: 80px;
    text-align: right;
}

.workingspace p{
    font-size: 18px;
    color: grey;
    font-weight: 200;
    font-family: viga; 
    text-align: left;
}

/*footer*/
.footer{
    margin-top: 100px;
    background-color: silver;
    font-size: 12px;
}

.footer p{
    color: grey;
    font-size: 18px;

}

.responsive-img img{
    width: 50px;
    height: 50px;

}




/*desktop version*/
@media (min-width: 992px) {
    /*navbar*/
    .navbar-brand, .nav-link{
        color: white !important;
        text-shadow: 2px 2px 5px grey;
    }

    .nav-link{
        text-transform: uppercase;
        margin-right: 30px;
    }

    .navbar img {
    width: 70px;
    height: 70px;
    }


    .navbar-brand {
    font-size: 32px;
    }

    .nav-link:hover::after{
        content: '';
        display: block;
        border-bottom: 3px solid blue;
        width: 50%;
        margin: auto;
        padding-bottom: 5px;
        margin-bottom: -8px;  
    }

    /*jumbotron*/
    .jumbotron{
        margin-top: -100px;
        margin-right: -100px;
        height: 660px;
    }

    .jumbotron .display-4{
        margin-top: 100px;
        font-size: 40px;
    }

    /*info panel*/
    .info-panel{
    margin-top: 100px;
    }

    /*wo*/
    .workingspace {
       text-align: right;
        margin-top: 10px;
    }

}    
    </style>



    <title>Landing Page</title>
  </head>
  <body>
    <!-- navbar -->
    <header class="topbar-nav">
    <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
      <img src="assets/images/logo.png">
      <a class="navbar-brand" href="#">SMK MAHAPUTRA CERDAS UTAMA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            @if (Route::has('login'))
            @auth
            @if(Auth()->user()->hasRole('teacher'))
            <a href="{{ route('dashboard.users') }}">Home</a>
            @elseif(Auth()->user()->hasRole('staff'))
            <a href="{{ route('dashboard.users') }}">Home</a>
            @elseif(Auth()->user()->hasRole('student'))
            <a href="{{ route('dashboard.users') }}">Home</a>
            @elseif(Auth()->user()->hasRole('admin'))
            <a href="{{ route('dashboard.users') }}">Home</a>
            @else
            @endif
            @else
            <a class="nav-link" href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a class="nav-link" href="{{ url('select-registration') }}">Register</a>
            @endif
            @endauth
            @endif
        </div>
      </div>
    </div>
    </nav>
</header>
    <!-- akhir navbar -->

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><span>Selamat Datang</span> di SMK Mahaputra Cerdas Utama, sekolah dengan konsep <span>Green School</span> pertama di <span>Kabupaten Bandung</span></h1>
            <div class="row justify-content-center">
            <div class="col-10 info-panel">

                <!-- info panel -->
                <div class="row">
                    <div class="col-lg">
                        <img src="assets/images/siswa.jfif" class="float-left">
                        <p>Pendaftaran</p>
                        <a href="" style="color: orange;" ><b style="font-size: 15px;">Siswa Baru</b></a>
                    </div>
                    <div class="col-lg">
                        <img src="assets/images/guru.jfif" class="float-left">
                        <p>Pendaftaran</p>
                        <a href="" style="color: orange;" ><b style="font-size: 15px;">Guru Baru</b></a>
                    </div>
                    <div class="col-lg">
                        <img src="assets/images/staff4.jfif" class="float-left">
                         <p>Pendaftaran</p>
                        <a href="" style="color: orange;" ><b style="font-size: 15px;">Kependidikan Baru</b></a>
                    </div>
                </div>
                <!-- akhir info panel -->

            </div>  
        </div>
        </div>
    </div>
    <!-- akhir jumbotron -->



    <div class="container">

        
         <!-- info panel -->
                <div class="row workingspace">
                    <p class="program"> PROGRAM KEAHLIAN DI SMK MAHAPUTRA CERDAS UTAMA</p>
                    <div class="col-lg-12">
                         <a href="" style="color: orange;" ><b style="font-size: 15px;">REKAYASA PERANGKAT LUNAK</b></a>
                        <img src="assets/images/4.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="row workingspace">
                    <div class="col-lg-12">
                         <a href="" style="color: orange;" ><b style="font-size: 15px;">MULTIMEDIA</b></a>
                        <img src="assets/images/3.jpg"  class="img-fluid">
                    </div>
                </div>
                <!-- akhir info panel -->
        
        

    </div>
    

    <!-- footer -->
        <div class="row footer ">
            <div class="col s6 m3 l2">
                <footer class="page-footer psy-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col s6 m3 l2">
                                <img class="responsive-img psy-image-footer" data-lazysrc="https://smkmahaputra.sch.id/public/logo/image.png" src="assets/images/logo.png">
                            </div>
                            <div class="col">
                               <br><br><br><br>    
                                <h5 class=""><b>SMK MAHAPUTRA CERDAS UTAMA</b></h5>
                                <p class="">Jl Katapang Andir KM. 4 Kp Pasantren Ds Sukamukti Kec Katapang Kab Bandung</p>
                                <p class="">022 85876147</p>
                                <a href="mailto:"><img title="email" src="https://smkmahaputra.sch.id/public/img/sosmed/email.png" alt="email" width="35" height="35"></a>
                                <a href="https://www.facebook.com/" target="_blank"><img title="Facebook" src="https://smkmahaputra.sch.id/public/img/sosmed/facebook.png" alt="Facebook" width="35" height="35"></a>
                                <a href="https://www.youtube.com/https://www.youtube.com/channel/UCCfYqV-2N44pFhsQpGEedCw" target="_blank"><img title="Youtube" src="https://smkmahaputra.sch.id/public/img/sosmed/youtube.png" alt="RSS" width="35" height="35"></a>
                                <a href="https://www.instagram.com/" target="_blank"><img title="Instagram" src="https://smkmahaputra.sch.id/public/img/sosmed/instagram.png" alt="RSS" width="35" height="35"></a>
                                <a href="https://www.twitter.com/" target="_blank"><img title="Instagram" src="https://smkmahaputra.sch.id/public/img/sosmed/twitter.png" alt="RSS" width="35" height="35"></a>
                            </div>
                        </div>
                    </div>


                    <div class="footer-copyright">
                        <div class="container">
                            <p>SMK MAHAPUTRA CERDAS UTAMA © 2020 </p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!-- akhir footer -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>