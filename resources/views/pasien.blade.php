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

<!--Modal Konfirmasi Delete-->
    <div id="DeleteModal" class="modal fade text-danger" role="dialog">
   <div class="modal-dialog modal-dialog modal-dialog-centered ">
     <!-- Modal content-->
     <form action="" id="deleteForm" method="post">
         <div class="modal-content">
             <div class="modal-header bg-danger">
                 <h4 class="modal-title text-center text-white" >Konfirmasi Penghapusan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             </div>
             <div class="modal-body">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <p class="text-center">Apakah anda yakin untuk menghapus pasien? Data yang sudah dihapus tidak bisa kembali</p>
             </div>
             <div class="modal-footer">
                 <center>
                     <button type="button" class="btn btn-success" data-dismiss="modal">Tidak, Batal</button>
                     <button type="button" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Ya, Hapus</button>
                 </center>
             </div>
         </div>
     </form>
   </div>
  </div>
<!--End Modal-->

    <div class="card shadow mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between py-3">               
            <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
            @if (Auth::user()->profesi == 'Admin')
            <a href="{{route('pasien.tambah')}}" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm">
            <i class="fas fa-plus fa-sm"></i> Tambah Pasien</a> 
            @endif

            <div class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm no-print" onclick="printPasien()">
                <span class="icon"><i class="fa  fa-print"></i></span>
                <span class="text"> Cetak Laporan Data Pasien</span> 
              </div> 
        </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                            <th>No RM</th>
                            <th>Nama Pemilik</th>
                            <th>Usia</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No. Hp</th>
                            <!-- Tambahkan kolom untuk hewan -->
                            <th>Nama Hewan</th>
                            <th>Ras</th>
                            <th>Warna Bulu</th>
                            <th>Jenis Hewan</th>
                            <th>Berat Badan</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No RM</th>
                            <th>Nama Pemilik</th>
                            <th>Usia</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No. Hp</th>
                            <th>Nama Hewan</th>
                            <th>Ras</th>
                            <th>Warna Bulu</th>
                            <th>Jenis Hewan</th>
                            <th>Berat Badan</th>
                            <th>Tindakan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($pasiens as $pasien)
                            <tr>
                                <!-- Kolom Data -->
                                <td>{{ str_pad($pasien->id, 4, '0', STR_PAD_LEFT) }}</td>
                                <td>{{ $pasien->nama }}</td>
                                <td>{{ hitung_usia($pasien->tgl_lhr) }}</td>
                                <td>{{ $pasien->jk }}</td>
                                <td class="text-truncate" style="max-width: 150px;">{{ $pasien->alamat }}</td>
                                <td>{{ $pasien->hp }}</td>
                                <!-- Kolom Data Hewan -->
                                <td>{{ $pasien->nama_hewan }}</td>
                                <td>{{ $pasien->ras }}</td>
                                <td>{{ $pasien->warna_bulu }}</td>
                                <td>{{ $pasien->jenis_hewan }}</td>
                                <td>{{ $pasien->berat_badan }}kg</td>
                                <!-- Akhir tambahan -->
                                <td width="120px">
                                    <!-- Tombol Aksi -->
                                    <div class="btn-group">
                                        <a href="{{ route('rm.list', $pasien->id) }}" class="btn btn-success btn-sm">
                                            <i class="fas fa-eye"></i> Lihat
                                        </a>
                                        @if (Auth::user()->profesi == 'Admin')
                                        <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-pen"></i> Edit
                                        </a>
                                        <a href="javascript:;" data-toggle="modal" onclick="deleteData({{ $pasien->id }})" data-target="#DeleteModal" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> Hapus
                                        </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Script untuk Mengatur Aksi Hapus -->
    <script type="text/javascript">
        function deleteData(id) {
            var id = id;
            var url = '{{ route("pasien.destroy", ":id") }}';
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }

        function formSubmit() {
            $("#deleteForm").submit();
        }

        function printPasien() {
                var popupWindow = window.open('{{ route("pasien.cetakAll") }}', '_blank');
                popupWindow.onload = function() {
                    popupWindow.print();
                };
            }
        
    </script>
@endsection
