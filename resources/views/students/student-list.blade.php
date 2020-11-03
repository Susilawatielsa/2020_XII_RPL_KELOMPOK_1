<!DOCTYPE html>
<html lang="en">

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Data Siswa</h4>

	   </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Siswa</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nisn</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Asal Sekolah</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>3202121890</td>
                        <td>Elsa Susilawati</td>
                        <td>Perempuan</td>
                        <td>SMPN 2 KATAPANG</td>
                        <td>Kp. Sompok</td>
                        <td><button type="button" class="btn btn-info btn-round waves-effect waves-light m-1">Edit</button>
                        <button type="button" class="btn btn-danger btn-round waves-effect waves-light m-1">Delete</button>
                    </tr>

                    <tr>
                        <td>3202121888</td>
                        <td>Rendy Joshua</td>
                        <td>Laki-laki</td>
                        <td>SMPN 2 KATAPANG</td>
                        <td>Kp. Bojong Tanjung</td>
                        <td><button type="button" class="btn btn-info btn-round waves-effect waves-light m-1">Edit</button>
                        <button type="button" class="btn btn-danger btn-round waves-effect waves-light m-1">Delete</button>

                    </tr>
                    
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
 
  </div><!--End wrapper-->


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
  Custom scripts
  <script src="assets/js/app-script.js"></script>
    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
	
<!-- Mirrored from codervent.com/rocker/color-version/table-data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Nov 2019 12:18:44 GMT -->
</html>
