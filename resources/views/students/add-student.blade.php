@extends('layouts.master')

@push('title')
- List Prospective Studends
@endpush

@push('styles')

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Rocker - Bootstrap4 Admin Dashboard Template</title>
<!--favicon-->
<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
<!-- simplebar CSS-->
<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
<!-- Bootstrap core CSS-->
<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- animate CSS-->
<link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css">
<!--Bootstrap Datepicker-->
<link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css">
<!-- Icons CSS-->
<link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
<!-- Sidebar CSS-->
<link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet">
<!-- Custom Style-->
<link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet">
@endpush

@section('content')

<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Tambah Siswa</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="{{ url('students') }}">Kelola Siswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah SIswa</li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form id="signupForm" novalidate="novalidate">

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-address-book-o"></i>
                        Data Pribadi
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Nama Lengkap<span style="color:red"> *</span></label>
                            <input type="text" class="form-control" id="input-10" name="firstname" placeholder="Masukan Nama Lengkap">
                        </div>
                        <div class="col-sm-4">
                            <label>Email<span style="color:red"> *</span></label>
                            <input type="text" class="form-control" id="input-10" name="firstname" placeholder="Masukan Email">
                        </div>
                        <div class="col-sm-4">
                            <label>Nomor Telepon<span style="color:red"> *</span></label>
                            <input type="text" class="form-control" id="input-10" name="firstname" placeholder="Masukan Nomor Telepon">
                        </div>

                    </div>
                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label>Password <span style="color:red"> *</span></label>
                            <input type="text" class="form-control" id="input-10" name="firstname" placeholder="Masukan Password">
                        </div>
                        <div class="col-sm-6">
                            <label>Ulangi Password <span style="color:red"> *</span></label>
                            <input type="text" class="form-control" id="input-10" name="firstname" placeholder="Ulangi Password">
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Nomor Identitas (NIK)</label>
                            <input type="text" class="form-control" id="input-10" placeholder="Masukan Nomor NIK">
                        </div>

                        <div class="col-sm-4">
                            <label>NIS</label>
                            <input type="text" class="form-control" id="input-10" placeholder="Masukan Nomor NIS">
                        </div>

                        <div class="col-sm-4">
                            <label>NISN</label>
                            <input type="text" class="form-control" id="input-10" placeholder="Masukan Nomor NISN">
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Tanggal Lahir</label>
                            <input type="text" id="autoclose-datepicker" class="form-control" placeholder="dd/mm/yyyy">
                        </div>
                        <div class="col-sm-4">
                            <label>Jenis Kelamin</label>

                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Laki Laki</option>
                                <option>Perempuan</option>
                            </select>

                        </div>

                        <div class="col-sm-4">
                            <label>Agama</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Provinsi</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Jawa BArat</option>
                                <option>Jawa Timur</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>Kabupaten</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Bandung</option>
                                <option>Jakarta</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>Kecamatan</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Katapang</option>
                                <option>Arjasari</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label>Alamat</label>
                            <input type="text" class="form-control" id="input-10" placeholder="Masukan Alamat">
                        </div>

                        <div class="col-sm-2">
                            <label>Kode Pos</label>
                            <input type="text" class="form-control" id="input-10" placeholder="Masukan Kode Pos">
                        </div>

                        <div class="col-sm-2">
                            <label>RT</label>
                            <input type="text" class="form-control" id="input-10" placeholder="Masukan Nomor RT">
                        </div>
                        <div class="col-sm-2">
                            <label>RW</label>
                            <input type="text" class="form-control" id="input-10" placeholder="Masukan Nomor RW">
                        </div>
                    </div>


                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-envelope-o"></i>
                        Data Ayah
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" placeholder="Masukan Nama Lengkap">
                        </div>

                        <div class="col-sm-4">
                            <label>Nomor Identitas (NIK)</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" placeholder="Masukan Nomor NIK">
                        </div>

                        <div class="col-sm-2">
                            <label>Tahun Lahir</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>2001</option>
                                <option>2000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-3">
                            <label>Pendidikan Terakhir</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>SD - Sederajat</option>
                                <option>SMP - Sederajat</option>

                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label>Pekerjaan</label>

                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Buruh</option>
                                <option>Wirausaha</option>
                            </select>

                        </div>
                        <div class="col-sm-3">
                            <label>Pendapatan Perbulan</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>
                                    < Rp. 500.000</option> <option> > Rp. 500.000
                                </option>
                            </select>
                        </div>


                        <div class="col-sm-3">
                            <label>Disablity</label>

                            <div class="radio icheck-info">
                                <input type="radio" id="info1" name="info">
                                <label for="info1">Ya</label>
                            </div>
                            <div class="radio icheck-info">
                                <input type="radio" checked="" id="info2" name="info">
                                <label for="info2">Tidak</label>
                            </div>


                        </div>
                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-envelope-o"></i>
                        Data Ibu
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" placeholder="Masukan Nama Lengkap">
                        </div>

                        <div class="col-sm-4">
                            <label>Nomor Identitas (NIK)</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" placeholder="Masukan Nomor NIK">
                        </div>

                        <div class="col-sm-2">
                            <label>Tahun Lahir</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>2001</option>
                                <option>2000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-3">
                            <label>Pendidikan Terakhir</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>SD - Sederajat</option>
                                <option>SMP - Sederajat</option>

                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label>Pekerjaan</label>

                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Buruh</option>
                                <option>Wirausaha</option>
                            </select>

                        </div>
                        <div class="col-sm-3">
                            <label>Pendapatan Perbulan</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>
                                    < Rp. 500.000</option> <option> > Rp. 500.000
                                </option>
                            </select>
                        </div>


                        <div class="col-sm-3">
                            <label>Disablity</label>

                            <div class="radio icheck-info">
                                <input type="radio" id="info3" name="warning">
                                <label for="info3">Ya</label>
                            </div>
                            <div class="radio icheck-info">
                                <input type="radio" checked="" id="info4" name="warning">
                                <label for="info4">Tidak</label>
                            </div>

                        </div>
                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-envelope-o"></i>
                        Data Wali
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" placeholder="Masukan Nama Lengkap">
                        </div>

                        <div class="col-sm-4">
                            <label>Nomor Identitas (NIK)</label>
                            <input type="text" class="form-control" id="input-10" name="firstname" placeholder="Masukan Nomor NIK">
                        </div>

                        <div class="col-sm-2">
                            <label>Tahun Lahir</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>2001</option>
                                <option>2000</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-sm-3">
                            <label>Pendidikan Terakhir</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>SD - Sederajat</option>
                                <option>SMP - Sederajat</option>

                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label>Pekerjaan</label>

                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>Buruh</option>
                                <option>Wirausaha</option>
                            </select>

                        </div>
                        <div class="col-sm-3">
                            <label>Pendapatan Perbulan</label>
                            <select class="form-control" id="basic-select">
                                <option disabled="" selected="">Pilih</option>
                                <option>
                                    < Rp. 500.000</option> <option> > Rp. 500.000
                                </option>
                            </select>
                        </div>


                        <div class="col-sm-3">
                            <label>Disablity</label>

                            <div class="radio icheck-info">
                                <input type="radio" id="info5" name="warning2">
                                <label for="info5">Ya</label>
                            </div>
                            <div class="radio icheck-info">
                                <input type="radio" checked="" id="info6" name="warning2">
                                <label for="info6">Tidak</label>
                            </div>

                        </div>
                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-phone"></i>
                        Kontak
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-6">
                            <label>Telepon Rumah</label>
                            <input type="text" class="form-control" id="input-10" placeholder="Masukan Nomor Telepon Rmah">
                        </div>

                        <div class="col-sm-6">
                            <label>Email Rumah</label>
                            <input type="text" class="form-control" id="input-10" placeholder="Masukan Nomor Telepon">
                        </div>

                    </div>

                    <h4 class="form-header text-uppercase">
                        <i class="fa fa-laptop"></i>
                        Data Periodik
                    </h4>

                    <div class="form-group row">

                        <div class="col-sm-4">
                            <label>Pilih Program Study 1:</label>
                            <select class="form-control" id="basic-select">
                                <option>D3 - Teknik Kompoter</option>
                                <option>WNI</option>
                                <option>WNA</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label>Pilih Program Study 2:</label>
                            <select class="form-control" id="basic-select">
                                <option>D3 - Teknik Kompoter</option>
                                <option>WNI</option>
                                <option>WNA</option>
                            </select>
                        </div>

                    </div>


                    <div class="form-footer">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@push('scripts')
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

<!-- simplebar js -->
<script src="{{ asset('assets/plugins/simplebar/js/simplebar.js')}}"></script>
<!-- waves effect js -->
<script src="{{ asset('assets/js/waves.js')}}"></script>
<!-- sidebar-menu js -->
<script src="{{ asset('assets/js/sidebar-menu.js')}}"></script>
<!-- Custom scripts -->
<script src="{{ asset('assets/js/app-script.js')}}"></script>

<!--Form Validatin Script-->
<script src="{{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
<script>
    $().ready(function() {

        $("#personal-info").validate();

        // validate signup form on keyup and submit
        $("#signupForm").validate({
            rules: {
                firstname: "required",
                lastname: "required",
                username: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                },
                contactnumber: {
                    required: true,
                    minlength: 10
                },
                topic: {
                    required: "#newsletter:checked",
                    minlength: 2
                },
                agree: "required"
            },
            messages: {
                firstname: "Please enter your firstname",
                lastname: "Please enter your lastname",
                username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
                email: "Please enter a valid email address",
                contactnumber: "Please enter your 10 digit number",
                agree: "Please accept our policy",
                topic: "Please select at least 2 topics"
            }
        });

    });
</script>

<!--Bootstrap Datepicker Js-->
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script>
    $('#default-datepicker').datepicker({
        todayHighlight: true
    });
    $('#autoclose-datepicker').datepicker({
        autoclose: true,
        todayHighlight: true
    });

    $('#inline-datepicker').datepicker({
        todayHighlight: true
    });

    $('#dateragne-picker .input-daterange').datepicker({});
</script>
@endpush
@endsection