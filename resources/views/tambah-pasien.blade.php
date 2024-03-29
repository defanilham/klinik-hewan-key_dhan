@extends('master')

@foreach ($metadatas as $metadata)
    @section('judul_halaman')
        {{ $metadata->Judul }}
    @endsection

    @section('deskripsi_halaman')
        {{ $metadata->Deskripsi }}
    @endsection
@endforeach

@section('konten')
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
                <div class="form-group">
                    <input type="text" class="form-control" name="berat_badan" placeholder="berat badan">
                </div>

                <!-- Informasi Tambahan -->
                <div class="form-group">
                    <textarea class="form-control" name="alergi" placeholder="Daftar Alergi (Tidak Wajib)"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="diagnosa_awal" placeholder="Diagnosa Awal"></textarea>
                </div>

                <div class="form-group row">
                    <!-- Tombol Aksi -->
                    <div class="col-sm-3">
                        <a href="{{ route('pasien') }}" class="btn btn-danger btn-block btn">
                            <i class="fas fa-arrow-left fa-fw"></i> Kembali
                        </a>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">

                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">

                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary btn-block" name="simpan" value="simpan">
                            <i class="fas fa-save fa-fw"></i> Simpan
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
