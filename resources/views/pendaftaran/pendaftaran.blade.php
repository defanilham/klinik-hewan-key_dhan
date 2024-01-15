
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('judul_halaman')</title>
  <!-- Custom fonts for this template-->

  <link href= "{{ URL::asset('storage/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="{{ URL::asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  
   <!-- Bootstrap core JavaScript-->
  <script src="{{ URL::asset('storage/vendor/jquery/jquery.min.js') }}"></script> 
  <script src="{{ URL::asset('storage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('/js/printThis.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ URL::asset('storage/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    
  <script src="{{ URL::asset('js/fontawesome-iconpicker.js') }}"></script>
  <link href= "{{ URL::asset('css/fontawesome-iconpicker.min.css') }}" rel="stylesheet" type="text/css">
  </head>
  @yield('konten')
   <!-- Pesan Berhasil -->
@if (session()->has('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
       <p class="mb-0">
           {{ session()->get('pesan') }}
       </p>
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
       </button>
   </div>
@endif
<!-- End of Pesan Berhasil-->

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Formulir Pasien Baru</h6>
  </div>
  <div class="card-body">
  <div class="card-body">
      <form class="user" action="{{route('pendaftaran.simpan')}}" method="post">
      {{csrf_field()}}
      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir Pasien Baru</h6>
        </div>
        <div class="card-body">
            <form class="user" action="{{ route('pasien.simpan') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group row">
                    <!-- Informasi Pasien -->
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" name="Nama_Lengkap" placeholder="Nama Pemilik">
                    </div>
                    <div class="col-sm-2">
                        <label align="center" class="form-text">Tanggal lahir :</label>
                    </div>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="Tanggal_Lahir" placeholder="Tanggal lahir">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Alamat" placeholder="Alamat">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" name="Pekerjaan" placeholder="Pekerjaan">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="no_handphone" placeholder="Nomer Handphone">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <select class="form-control" name="Pendidikan_terakhir" placeholder="Pendidikan terakhir">
                          <option value="" selected disabled>Pendidikan Terakhir</option>
                          <option value="Tidak Ssekolah">Tidak Sekolah</option>
                          <option value="SD">SD</option>
                          <option value="SMP">SMP</option>
                          <option value="SMA">SMA</option>
                          <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <select class="form-control" name="Jenis_Kelamin" placeholder="Jenis Kelamin">
                          <option value="" selected disabled>Jenis Kelamin</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>

                <!-- Informasi Hewan -->
                <div class="form-group">
                    <input type="text" class="form-control" name="nama_hewan" placeholder="Nama Hewan">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="ras" placeholder="Ras Hewan">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="warna_bulu" placeholder="Warna Bulu Hewan">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="jenis_hewan" placeholder="Jenis Hewan">
                </div>

                <!-- Informasi Tambahan -->
                <div class="form-group">
                    <textarea class="form-control" name="alergi" placeholder="Daftar Alergi (Tidak Wajib)"></textarea>
                </div>                                
          <div class="form-group row">

              <div class="col-sm-3">
                  <button type="submit" class="btn btn-primary btn-block" name="simpan" value="simpan" >
                      <i class="fas fa-save fa-fw"></i> Simpan
                  </button>

              </div>       
          </div>
      </form>
  </div>
</div>


  <!-- Custom scripts for all pages-->
  <script src="{{ URL::asset('js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ URL::asset('storage/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::asset('storage/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ URL::asset('js/demo/datatables-demo.js') }}"></script>