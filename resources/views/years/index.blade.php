@extends('layouts.master')

@push('title')
- Daftar Tahun Ajaran
@endpush

@push('styles')
<!--favicon-->
<!--favicon-->
<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
<!-- simplebar CSS-->
<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
<!-- Bootstrap core CSS-->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
<!--Data Tables -->
<link href="{{ asset('assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
<!-- animate CSS-->
<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />
<!-- Icons CSS-->
<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
<!-- Sidebar CSS-->
<link href="{{ asset('assets/css/sidebar-menu.css') }}" rel="stylesheet" />
<!-- Custom Style-->
<link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <h4 class="page-title">Tahun Ajaran</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tahun Ajaran</li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header"><i class="fa fa-table"></i> Daftar Tahun Ajaran</div>
      <div class="card-body">
        <div class="table-responsive">
          <div class="container" style="margin-bottom: 10px; margin-left: -5px; margin-top: -4px;">
            <a href="{{URL::to('/school-years/create')}}" data-toggle="tooltip" data-placement="top" title="TAMBAH TAHUN AJARAN" type="button" class="btn btn-outline-primary waves-effect waves-light m-1"> <i class="zmdi zmdi-plus fa-lg"></i> </a>
          </div>
          <table id="example" class="table table-bordered">
            <thead>
              <tr>
                <th>NO</th>
                <th>Tahun Ajaran</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>2016/2017</td>
                <td>

                  <a href="{{ url('/school-years/edit/1')}}" data-toggle="tooltip" data-placement="top" title="EDIT" type="button" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="fa fa-edit fa-lg"></i> </a>
                  <a href="{{ url('/school-years/delete')}}" type="button" data-toggle="tooltip" data-placement="top" title="DELETE" class="btn btn-outline-danger waves-effect waves-light m-1"> <i class="fa fa-trash fa-lg"></i> </a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>2017/2018</td>
                <td>

                  <a href="{{ url('/school-years/edit/1')}}" type="button" data-toggle="tooltip" data-placement="top" title="EDIT" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="fa fa-edit fa-lg"></i> </a>
                  <a href="{{ url('/school-years/delete')}}" type="button" data-toggle="tooltip" data-placement="top" title="DELETE" class="btn btn-outline-danger waves-effect waves-light m-1"> <i class="fa fa-trash fa-lg"></i> </a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>2018/2019</td>
                <td>

                  <a href="{{ url('/school-years/edit/1')}}" type="button" data-toggle="tooltip" data-placement="top" title="EDIT" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="fa fa-edit fa-lg"></i> </a>
                  <a href="{{ url('/school-years/delete')}}" type="button" data-toggle="tooltip" data-placement="top" title="DELETE" class="btn btn-outline-danger waves-effect waves-light m-1"> <i class="fa fa-trash fa-lg"></i> </a>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>2019/2020</td>
                <td>

                  <a href="{{ url('/school-years/edit/1')}}" type="button" data-toggle="tooltip" data-placement="top" title="EDIT" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="fa fa-edit fa-lg"></i> </a>
                  <a href="{{ url('/school-years/delete')}}" type="button" data-toggle="tooltip" data-placement="top" title="DELETE" class="btn btn-outline-danger waves-effect waves-light m-1"> <i class="fa fa-trash fa-lg"></i> </a>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>2020/2021</td>
                <td>

                  <a href="{{ url('/school-years/edit/1')}}" type="button" data-toggle="tooltip" data-placement="top" title="EDIT" class="btn btn-outline-success waves-effect waves-light m-1"> <i class="fa fa-edit fa-lg"></i> </a>
                  <a href="{{ url('school-years/delete')}}" type="button" data-toggle="tooltip" data-placement="top" title="DELETE" class="btn btn-outline-danger waves-effect waves-light m-1"> <i class="fa fa-trash fa-lg"></i> </a>
                </td>
              </tr>

            </tbody>

          </table>


        </div>
      </div>
    </div>
  </div>
</div><!-- End Row-->

<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->

@push('scripts')
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- simplebar js -->
<script src="{{ asset('assets/plugins/simplebar/js/simplebar.js') }}"></script>
<!-- waves effect js -->
<script src="{{ asset('assets/js/waves.js') }}"></script>
<!-- sidebar-menu js -->
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
<!-- Custom scripts -->
<script src="{{ asset('assets/js/app-script.js') }}"></script>

<!--Data Tables js-->
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js') }}"></script>


<script>
  $(document).ready(function() {
    //Default data table
    $('#default-datatable').DataTable();


    var table = $('#example').DataTable({
      lengthChange: false,
      buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
    });

    table.buttons().container()
      .appendTo('#example_wrapper .col-md-6:eq(0)');

  });
</script>
@endpush
@endsection