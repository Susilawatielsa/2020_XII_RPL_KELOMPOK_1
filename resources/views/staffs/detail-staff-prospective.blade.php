@extends('layouts.master')

@push('title')
- Template Detail
@endpush

@push('styles')
<!--favicon-->
<link rel="icon" href="{{ URL::to('assets/images/favicon.ico')}}" type="image/x-icon">
<!-- simplebar CSS-->
<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
<!-- Bootstrap core CSS-->
<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<!-- animate CSS-->
<link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css" />
<!-- Icons CSS-->
<link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
<!-- Sidebar CSS-->
<link href="{{ asset('assets/css/sidebar-menu.css')}}" rel="stylesheet" />
<!-- Custom Style-->
<link href="{{ asset('assets/css/app-style.css')}}" rel="stylesheet" />
@endpush

@section('content')
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Detail Staff</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="{{ url('staffs')}}">Daftar Staf</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Staf</li>
        </ol>
    </div>
</div>


<div class="col-lg-12">
    <div class="profile-card-3 ">
        <div class="text-center">
            <img src="{{ url('assets/images/avatars/avatar-2.png')}}" alt="user avatar" class="card-img-top" style="width: 200px;
                        height: 200px;
                        background: #dac52c;
                        border-radius: 100%;">
        </div>
        <hr>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="text-primary">DATA PRIBADI</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>Udin Nurahmat</td>

                            <th>NIK</th>
                            <td>:</td>
                            <td>3204000204900009</td>
                        </tr>
                        
                        <tr>
                            <th>GTK</th>
                            <td>:</td>
                            <td>-</td>

                            <th>NUPTK</th>
                            <td>:</td>
                            <td>-</td>
                        </tr>

                        <tr>
                            <th>Kewarganegaraan</th>
                            <td>:</td>
                            <td>WNI</td>

                            <th>Nama Negara</th>
                            <td>:</td>
                            <td>Indonesia</td>
                        </tr>

                        <tr>
                            
                            <th>Tempat Lahir</th>
                            <td>:</td>
                            <td>Bandung</td>

                            <th>Tanggal lahir</th>
                            <td>:</td>
                            <td>03/03/1991</td>
                        </tr>

                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>Laki Laki</td>

                            <th>Agama</th>
                            <td>:</td>
                            <td>Islam</td>
                        </tr>

                        <tr>
                            <th>Status Nikah</th>
                            <td>:</td>
                            <td>Sudah</td>    
                        </tr>
                        
                    </tbody>
                </table><br>
            </div>


            <h4 class="text-primary">INFORMASI KONTAK</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Provinsi</th>
                            <td>:</td>
                            <td>Jawa Barat</td>


                            <th>Kabupaten</th>
                            <td>:</td>
                            <td>Bandung</td>

                        </tr>

                        <tr>
                            <th>Kecamatan</th>
                            <td>:</td>
                            <td>Katapang</td>

                            <th>Alamat</th>
                            <td>:</td>
                            <td>Kp. Citereup</td>

                        </tr>

                        <tr>
                            <th>Kode Pos</th>
                            <td>:</td>
                            <td>40921</td>

                            <th>RT</th>
                            <td>:</td>
                            <td>02</td>
                        </tr>

                        <tr>
                            <th>RW</th>
                            <td>:</td>
                            <td>07</td>

                            <th>No Telepon</th>
                            <td>:</td>
                            <td>089613278889</td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>udin@gmail.com</td>
                        </tr>
                    </tbody>
                </table><br>
            </div>

            <h4 class="text-primary">DATA SUAMI/ISTERI</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama Suami/Istri</th>
                            <td>:</td>
                            <td>Sulastri</td>


                            <th>NIK</th>
                            <td>:</td>
                            <td>-</td>

                        </tr>
                        <tr>

                            <th>NIP</th>
                            <td>:</td>
                            <td>-</td>

                            <th>Pekerjaan</th>
                            <td>:</td>
                            <td>Ibu Rumah Tangga</td>

                        </tr>

                    </tbody>
                </table><br>
            </div>
<!-- //di komentarin dulu, masa calon ada status kepegawaian?
            <h4 class="text-primary">STATUS KEPEGAWAIAN</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>No SK</th>
                            <td>:</td>
                            <td>-/td>

                            <th>Tahun Masuk</th>
                            <td>:</td>
                            <td>Juni 2016</td>
                        </tr>

                        <tr>
                            <th>Kontrak Kerja</th>
                            <td>:</td>
                            <td>1 Tahun</td>

                            <th>Status Staf</th>
                            <td>:</td>
                            <td>Staf Tidak Tetap</td>

                        </tr>
                        <tr>
                            <th>Jabatan</th>
                            <td>:</td>
                            <td>Kepala Staf</td>
                        </tr>

                    </tbody>
                </table><br>
 -->
                <h4 class="text-primary">RIWAYAT PENDIDIKAN</h4>
                <div class="table-responsive">
                    <table class="table table-stripped">
                        <tbody>
                            <tr>
                                <th>Sekolah Dasar</th>
                                <td>:</td>
                                <td>SDN Angkasa 03</td>


                                <th>Tahun</th>
                                <td>:</td>
                                <td>2011</td>

                            </tr>
                            <tr>
                                <th>Sekolah Menengah Pertama</th>
                                <td>:</td>
                                <td>SMP Angkasa</td>

                                <th>Tahun</th>
                                <td>:</td>
                                <td>2018</td>

                            </tr>
                            <tr>
                                <th>Sekolah Menengah Akhir</th>
                                <td>:</td>
                                <td>SMA 23 BANDUNG</td>

                                <th>Tahun</th>
                                <td>:</td>
                                <td>2020</td>

                            </tr>

                            <tr>
                                <th>Perguruan Tinggi</th>
                                <td>:</td>
                                <td>UPI Bandung</td>

                                <th>Tahun</th>
                                <td>:</td>
                                <td>2010</td>

                            </tr>

                            <tr>
                                <th>Fakultas</th>
                                <td>:</td>
                                <td>FPEB</td>

                                <th>Jurusan</th>
                                <td>:</td>
                                <td>S1 Akuntansi</td>

                            </tr>
                            <tr>
                                <th>Gelar</th>
                                <td>:</td>
                                <td>SE</td>

                                <th>Tahun</th>
                                <td>:</td>
                                <td>2014</td>

                            </tr>

                        </tbody>
                    </table><br>
                </div>
                <h4 class="text-primary">SERTIFIKASI</h4>
                <div class="table-responsive">
                    <table class="table table-stripped">
                        <tbody>
                            <tr>
                                <th>Sudah atau Belum</th>
                                <td>:</td>
                                <td>Belum</td>


                                <th>Tahun</th>
                                <td>:</td>
                                <td>-</td>

                            </tr>
                            <tr>
                                <th>No Sertifikasi</th>
                                <td>:</td>
                                <td>-</td>

                                <th>Bidang Studi</th>
                                <td>:</td>
                                <td>-</td>

                            </tr>
                            <tr>
                                <th>Penyelenggara</th>
                                <td>:</td>
                                <td>-</td>

                                <th></th>
                                <td></td>
                                <td></td>

                            </tr>
                        </tbody>
                    </table><br>
                </div>
            </div>
        </div>
    </div>



    @endsection

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

    </body>

    @endpush