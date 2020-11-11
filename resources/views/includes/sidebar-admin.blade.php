<style>
  img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
  }
  h5 {
    cursor: default;
  }
</style>

  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
       <img src="{{URL::to('assets/images/mahaputra.JFIF')}}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">SmkMahaputra</h5>
   </div>



   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header"></li>

      <li>
        <a href="/dashboard" class="waves-effect">
          <i class="icon-home"></i> <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-home"></i> <span>Kelola Petugas TU</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/staffs/list-staff')}}"><i class="fa fa-circle-o"></i> Daftar Petugas TU</a></li>
          <li><a href="{{URL::to('#')}}"><i class="fa fa-circle-o"></i> Tambah Petugas TU</a></li>
          <li><a href="{{URL::to('#')}}"><i class="fa fa-circle-o"></i> Daftar Calon TU</a></li>
          <li><a href="{{URL::to('#')}}"><i class="fa fa-circle-o"></i> Daftar TU Ditolak</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-home"></i> <span>Kelola Guru</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/teachers/list-teacher')}}"><i class="fa fa-circle-o"></i> Daftar Guru</a></li>
          <li><a href="{{URL::to('#')}}"><i class="fa fa-circle-o"></i> Tambah Guru</a></li>
          <li><a href="{{URL::to('#')}}"><i class="fa fa-circle-o"></i> Daftar Calon Guru</a></li>
          <li><a href="{{URL::to('#')}}"><i class="fa fa-circle-o"></i> Daftar Guru Ditolak</a></li>
        </ul>
      </li>


      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-home"></i> <span>Kelola Siswa </span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('/students/list-student')}}"><i class="fa fa-circle-o"></i> Daftar Siswa</a></li>
          <li><a href="{{URL::to('#')}}"><i class="fa fa-circle-o"></i> Tambah Siswa</a></li>
          <li><a href="{{URL::to('#')}}"><i class="fa fa-circle-o"></i> Daftar Calon Siswa</a></li>
          <li><a href="{{URL::to('#')}}"><i class="fa fa-circle-o"></i> Daftar Siswa Ditolak</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-home"></i> <span>Template Halaman </span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{URL::to('page/list')}}"><i class="fa fa-circle-o"></i> List </a></li>
          <li><a href="{{URL::to('page/detail')}}"><i class="fa fa-circle-o"></i> Detail </a></li>
          <li><a href="{{URL::to('page/add')}}"><i class="fa fa-circle-o"></i> Add </a></li>
          <li><a href="{{URL::to('page/edit')}}"><i class="fa fa-circle-o"></i> Edit </a></li>
        </ul>
      </li>

     
    </ul>
   
   </div>
