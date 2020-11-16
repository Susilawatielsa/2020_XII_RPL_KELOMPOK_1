<style>
  img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
  }
   h5{
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
        <a href="{{URL::to('/teachers')}}" class="waves-effect">
          <i class="icon-home"></i> <span>Daftar Guru</span> 
        </a>

     
    </ul>
   
   </div>
