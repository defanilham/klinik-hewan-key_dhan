<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cetak Rekam Medis</title>
    <!-- Tell the browser to be responsive to screen width -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    @stack('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed" onload="window.print()">
    <div class="container-fluid mt-5">
        <div class="text-center">
            <h3>Cetak Rekam Medis</h3>
        </div>
<!-- ##### Catagory Area End ##### -->

<!-- ##### Blog Details Content ##### -->
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <!-- Blog Details Text -->
                <div class="blog-details-text">
                    <div class="text-center">
                        <h3>Rekam Medis</h3>
                        <h3>Key_Dhan Pet Clinic</h3>
                    </div>
                    <br/>
                    <div class="text-right">
                        <p>Dokter Pemeriksa: dr.{{$dataRM->user->name}}</p>
                    </div>
                    <br/>
                    <p>Nama Lengkap : {!! $dataRM->pasien->nama !!}</p>
                    <p>Tanggal: {{\Carbon\Carbon::parse($dataRM->created_at)->translatedFormat('d-F-Y')}}</p>
                    <p>Waktu  : {{\Carbon\Carbon::parse($dataRM->created_at)->translatedFormat('H:i:s')}}</p>
                    <p>Tanggal lahir : {!! $dataRM->pasien->tgl_lhr !!}</p>
                    <p>Alamat : {!! $dataRM->pasien->alamat !!}</p>
                    <p>Jenis Kelamin : {{$dataRM->pasien->jk}}</p>
                    <p>Nama Hewan : {{ $dataRM->pasien->nama_hewan }}</p>
                    <p>Ras : {!! $dataRM->pasien->ras !!}</p>
                    <p>Warna Bulu : {!! $dataRM->pasien->warna_bulu !!}</p>
                    <p>Jenis Hewan : {{$dataRM->pasien->jenis_hewan}}</p>
                    <p>No. Handphone : {{ $dataRM->pasien->hp }}</p>
                    
                    <p>Keluhan Utama : {{ $dataRM->ku }}</p>
                    <p>Anamnesis : {!! $dataRM->anamnesis !!}</p>
                    <p>Pemeriksaan Fisix : {!! $dataRM->pxfisik !!}</p>
                    <p>Diagnosis : {{$dataRM->diagnosis}}</p>
                    
                   
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- jQuery -->
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- chart -->
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/chart.js/Chart.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/dist/js/adminlte.js"></script>
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/dist/js/adminlte.min.js?v=3.2.0"></script>
    <script src="{{ asset('templates/backend/AdminLTE-3.0.1') }}/dist/js/demo.js"></script>
    @stack('js')

</body>
</html>