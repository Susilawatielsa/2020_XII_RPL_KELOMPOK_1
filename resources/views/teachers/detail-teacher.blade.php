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
@if(Auth()->user()->hasRole('student'))
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Detail Guru</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="{{ url('staffs')}}">Daftar Guru</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Guru</li>
        </ol>
    </div>
</div>


<div class="col-lg-12">
    <div class="profile-card-3 ">
        <div class="text-center">
            <img src="{{ url('assets/images/AULIA_RAHMA_NUR_SALAM.jpg')}}" alt="user avatar" class="card-img-top" style="width: 200px;
                        height: auto;
                        background: #dac52c;
                        border-radius: 100%;">
        </div>
        <hr>
    </div>
</div>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="text-success">Data Pribadi</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>Siti Robiah Adawiyah, S.Pd</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>Perempuan</td>
                        </tr>

                        <tr>
                            <th>Tempat Lahir</th>
                            <td>:</td>
                            <td>Bandung</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>:</td>
                            <td>12 Agustus 1970</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td>Kp.Pesantren</td>
                        </tr>

                        <tr>
                            <th>RT</th>
                            <td>:</td>
                            <td>01</td>
                        </tr>

                        <tr>
                            <th>RW</th>
                            <td>:</td>
                            <td>06</td>
                        </tr>

                        <tr>
                            <th>Desa</th>
                            <td>:</td>
                            <td>Sukamukti</td>
                        </tr>

                        <tr>
                            <th>Kecamatan</th>
                            <td>:</td>
                            <td>Katapang</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>:</td>
                            <td>Aktif</td>
                        </tr>
                        


                    </tbody>
                </table><br>
             </div>
            </div>
        </div>
    </div>

@elseif(Auth()->user()->hasRole('teacher'))
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Detail Guru</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="{{ url('staffs')}}">Daftar Guru</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Guru</li>
        </ol>
    </div>
</div>


<div class="col-lg-12">
    <div class="profile-card-3 ">
        <div class="text-center">
            <img src="{{ url('assets/images/avatars/avatar-3.png')}}" alt="user avatar" class="card-img-top" style="width: 200px;
                        height: auto;
                        background: #dac52c;
                        border-radius: 100%;">
        </div>
        <hr>
    </div>
</div>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="text-success">Data Pribadi</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>Siti Robiah Adawiyah, S.Pd</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>Perempuan</td>
                        </tr>

                        <tr>
                            <th>Tempat Lahir</th>
                            <td>:</td>
                            <td>Bandung</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td>:</td>
                            <td>12 Agustus 1970</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>:</td>
                            <td>Kp.Pesantren</td>
                        </tr>

                        <tr>
                            <th>RT</th>
                            <td>:</td>
                            <td>01</td>
                        </tr>

                        <tr>
                            <th>RW</th>
                            <td>:</td>
                            <td>06</td>
                        </tr>

                        <tr>
                            <th>Desa</th>
                            <td>:</td>
                            <td>Sukamukti</td>
                        </tr>

                        <tr>
                            <th>Kecamatan</th>
                            <td>:</td>
                            <td>Katapang</td>
                        </tr>

                        <tr>
                            <th>Detail</th>
                            <td>:</td>
                            <td>Aktif</td>
                        </tr>



                    </tbody>
                </table><br>
             </div>
            </div>
        </div>
    </div>
@else
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Detail Guru</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('dashboard')}}">SMK Mahaputra</a></li>
            <li class="breadcrumb-item"><a href="{{ url('staffs')}}">Daftar Guru</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Guru</li>
        </ol>
    </div>
</div>


<div class="col-lg-12">
    <div class="profile-card-3 ">
        <div class="text-center">
            <img src="{{ url('assets/images/avatars/avatar-3.png')}}" alt="user avatar" class="card-img-top" style="width: 200px;
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
            <h4 class="text-success">Data Pribadi</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td>Siti Robiah Adawiyah, S.Pd</td>


                            <th>Email</th>
                            <td>:</td>
                            <td>sitirobiah@gmail.com</td>

                        </tr>
                        <tr>
                            <th>No Telepon</th>
                            <td>:</td>
                            <td>089527103940</td>

                            <th>NIK</th>
                            <td>:</td>
                            <td>3204115208700009</td>

                        </tr>

                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td>Perempuan</td>


                            <th>Tempat Lahir</th>
                            <td>:</td>
                            <td>Bandung</td>


                        </tr>
                        <tr>
                            <th>Tanggal lahir</th>
                            <td>:</td>
                            <td>12 Agustus</td>

                            <th>Alamat</th>
                            <td>:</td>
                            <td>Kp. Pasantren</td>

                        </tr>
                        <tr>
                            <th>RT</th>
                            <td>:</td>
                            <td>02</td>

                            <th>RW</th>
                            <td>:</td>
                            <td>06</td>

                        </tr>

                        <tr>
                            <th>Kecamatan</th>
                            <td>:</td>
                            <td>Katapang</td>

                            <th>Kode Pos</th>
                            <td>:</td>
                            <td>40971</td>
                        </tr>

                        <tr>
                            <th>Desa</th>
                            <td>:</td>
                            <td>Sukamukti</td>


                            <th>Agama</th>
                            <td>:</td>
                            <td>Islam</td>

                        </tr>

                        <tr>
                            <th>GTK</th>
                            <td>:</td>
                            <td>16.17.003</td>


                            <th>NUPTK</th>
                            <td>:</td>
                            <td>1144748649300010</td>

                        </tr>


                    </tbody>
                </table><br>
            </div>
            <h4 class="text-success">Data Suami/Istri</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>Nama Suami/Istri</th>
                            <td>:</td>
                            <td>Agus Sofian</td>


                            <th>NIK</th>
                            <td>:</td>
                            <td>3204115208700009</td>

                        </tr>
                        <tr>
                            <th>Pekerjaan</th>
                            <td>:</td>
                            <td>Bendahara TU</td>

                            <th>NIP</th>
                            <td>:</td>
                            <td>-</td>

                        </tr>

                    </tbody>
                </table><br>
            </div>
            <h4 class="text-success">Status Pekerjaan</h4>
            <div class="table-responsive">
                <table class="table table-stripped">
                    <tbody>
                        <tr>
                            <th>TMT</th>
                            <td>:</td>
                            <td>Juni 2016</td>


                            <th>No SK</th>
                            <td>:</td>
                            <td>-</td>

                        </tr>
                        <tr>
                            <th>Durasi</th>
                            <td>:</td>
                            <td>1 Tahun</td>

                            <th>NIP</th>
                            <td>:</td>
                            <td>-</td>

                        </tr>
                        <tr>
                            <th>Status Guru</th>
                            <td>:</td>
                            <td>Guru Tidak Tetap</td>

                            <th>Posisi</th>
                            <td>:</td>
                            <td>Guru Mata Pelajaran</td>

                        </tr>

                        <tr>
                            <th>Sudah Masuk?</th>
                            <td>:</td>
                            <td>Tidak</td>

                            <th></th>
                            <td></td>
                            <td></td>

                        </tr>

                    </tbody>
                </table><br>

                <h4 class="text-success">Mengajar Di SMK</h4>
                <div class="table-responsive">
                    <table class="table table-stripped">
                        <tbody>
                            <tr>
                                <th>Subjek</th>
                                <td>:</td>
                                <td>PJOK</td>


                                <th>Kelas</th>
                                <td>:</td>
                                <td>XII MM dan XII RPL</td>

                            </tr>
                            <tr>
                                <th>Durasi</th>
                                <td>:</td>
                                <td>1 Tahun</td>

                                <th>NIP</th>
                                <td>:</td>
                                <td>-</td>

                            </tr>
                            <tr>
                                <th>Jumlah Jam Pelajaran</th>
                                <td>:</td>
                                <td>-</td>

                                <th>Tugas Tambahan</th>
                                <td>:</td>
                                <td>Wali Kelas XII RPL 2</td>

                            </tr>
                        </tbody>
                    </table><br>
                </div>

                <h4 class="text-success">Sejarah Mengajar</h4>
                <div class="table-responsive">
                    <table class="table table-stripped">
                        <tbody>
                            <tr>
                                <th>Subjek</th>
                                <td>:</td>
                                <td>PAI</td>


                                <th>Nama Sekolah</th>
                                <td>:</td>
                                <td>SMP Matlahul Anwar</td>

                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <td>:</td>
                                <td>VII,VIII,IX</td>

                                <th>Jumlah Jam</th>
                                <td>:</td>
                                <td>24 JP</td>

                            </tr>
                            <tr>
                                <th>Dari tahun</th>
                                <td>:</td>
                                <td>1993-2011</td>

                                <th>Status</th>
                                <td>:</td>
                                <td>Tidak Aktif</td>

                            </tr>
                        </tbody>
                    </table><br>
                </div>
                <h4 class="text-success">Latar Belakang Pendidikan</h4>
                <div class="table-responsive">
                    <table class="table table-stripped">
                        <tbody>
                            <tr>
                                <th>Sekolah Dasar</th>
                                <td>:</td>
                                <td>SDN Angkasa 2 </td>


                                <th>Tahun</th>
                                <td>:</td>
                                <td>1983</td>

                            </tr>
                            <tr>
                                <th>Sekolah Menengah Pertama</th>
                                <td>:</td>
                                <td>MTs I'Anatut Thalibin</td>

                                <th>Tahun</th>
                                <td>:</td>
                                <td>1987</td>

                            </tr>
                            <tr>
                                <th>Sekolah Menengah Akhir</th>
                                <td>:</td>
                                <td>MA I'Anatut Thalibin </td>

                                <th>Tahun</th>
                                <td>:</td>
                                <td>1990</td>

                            </tr>

                            <tr>
                                <th>Perguruan Tinggi</th>
                                <td>:</td>
                                <td>UNNUS</td>

                                <th>Tahun</th>
                                <td>:</td>
                                <td>1996</td>

                            </tr>

                            <tr>
                                <th>Jurusan</th>
                                <td>:</td>
                                <td>S1 Bahasa Arab </td>

                                <th>Tahun</th>
                                <td>:</td>
                                <td>1996</td>

                            </tr>
                            <tr>
                                <th>Gelar</th>
                                <td>:</td>
                                <td>S. Pd</td>

                                <th>Tahun</th>
                                <td>:</td>
                                <td>1996</td>

                            </tr>

                        </tbody>
                    </table><br>
                </div>
                <h4 class="text-success">Sertifikasi</h4>
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

@endif



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