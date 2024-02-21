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
<div id="printContainer">
<style>
    /* Gaya kustom untuk kop surat */
    .letterhead {
        text-align: center;
        padding: 20px;
        border-bottom: 4px solid #000; /* Sesuaikan warna sesuai kebutuhan */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .letterhead img {
        max-width: 100px; /* Sesuaikan lebar maksimal logo */
        max-height: 100px; /* Sesuaikan tinggi maksimal logo */
        margin-right: 20px; /* Sesuaikan margin sesuai kebutuhan */
    }

    .identitas-container {
        column-count: 2;
        column-gap: 50px;
        width: 100%; /* Menentukan lebar container */
    }

    .identitas-container p {
        margin: 0 0 20px 0;
        word-wrap: break-word;
    }

    .tabel-kustom {
        border-collapse: collapse;
        width: 100%;
        margin-bottom: 20px;
    }

    .tabel-kustom th, .tabel-kustom td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
        word-wrap: break-word;
        font-size: 16px; /* Menambahkan properti word-wrap */
        max-width: 90px; /* Menentukan lebar maksimal untuk kolom (sesuaikan sesuai kebutuhan) */
    }

    .footer-section {
            text-align: right;
            margin-top: 20px;
        }

        .signature-line {
            width: 25%;
            border: 0.5px solid #ccc;
            margin-right: 0;
            margin-left: auto;
        }

        .custom-font {
        font-family: 'Your Custom Font', sans-serif; /* Gantilah 'Your Custom Font' dengan nama font yang Anda inginkan */
        font-size: 1.5rem; /* Sesuaikan ukuran font sesuai keinginan Anda */
        font-weight: bold; /* Sesuaikan ketebalan font sesuai keinginan Anda */
        color: #000000; /* Sesuaikan warna font sesuai keinginan Anda */
    }

    /* CSS khusus untuk media cetak */

    /* CSS untuk menyembunyikan kop surat pada halaman web */
    @media screen {
        .letterhead {
            display: none;
        }
    }
    @media screen {
        .footer-section {
            display: none;
        }    
    }
    @media screen {
        .custom-font {
            display: none;
        }    
    }
</style>

<style type="text/css" media="print">
    .no-print {
        display: none;
    }
</style>
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
                 <p class="text-center">Apakah anda yakin untuk menghapus Rekam Medis? Data yang sudah dihapus tidak bisa kembali</p>
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

    <div id="print1">
<div class="letterhead">
    <img src="{{ asset('storage/logo/'. get_setting('gambar')) }}" alt="Logo">
    <div>
        <font size="7"><b>KEY_DHAN PET CLINIC</b></font><br>
        <font size="5"><i>Jl.Sk.Rd.Syahbudin, Mayang Mangurai, Kec.Kota Baru, Kota Jambi</i></font>
    </div>
</div>
</div>
<!-- End Bagian Kop Surat -->
<div id="print2">
                <a href="#Identitas" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="Identitas">
                  <h6 class="m-0 font-weight-bold text-primary no-print">Identitas Pasien</h6></a>
                <div class="collapse show" id="Identitas">
                <div class="card-body">
          <h6 class="m-0 custom-font">Rekam Medis Hewan</h6>
          <br>
                    @foreach ($idens as $iden)
            <div class="identitas-container">
                <p><strong>ID Pasien : </strong> {{str_pad($iden->id, 4, '0', STR_PAD_LEFT)}}</p>

                <p><strong>Nama Pemilik : </strong> {{$iden->nama}}</p>
                <p><strong>No. Handphone : </strong> {{$iden->hp}}</p>
                <p><strong>Alamat : </strong> {{$iden->alamat}}</p>
                <p><strong>Nama Hewan : </strong> {{$iden->nama_hewan}}</p>
                <p><strong>Tanggal Lahir : </strong> {{$iden->tgl_lhr}}</p>
                <p><strong>Jenis Kelamin :</strong> {{$iden->jk}}</p>
                <p><strong>Jenis Hewan : </strong> {{$iden->jenis_hewan}}</p>
                <p><strong>Warna Bulu : </strong> {{$iden->warna_bulu}}</p>
                <p><strong>Ras : </strong> {{$iden->ras}}</p>
            </div>
            @endforeach
                
                </div>
                </div>
    </div>
    <div id="print3">
                <a href="#tambahrm" data-toggle="collapse" role="button" aria-expanded="true no-print" aria-controls="tambahrm">
                  <h6 class="m-0 font-weight-bold text-primary no-print">Rekam Medis pasien</h6> </a> 
                <div class="collapse show" id="tambahrm">
                <div class="card-body">

                    <form class="user" action="{{route('rm.update')}}" method="post">
                    {{csrf_field()}}
                    

                    <table class="tabel-kustom">
                  
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Id Rekam Medis</th>
                            <th>Tanggal</th>
                            <th>Dokter Pemeriksa</th>
                            <th>Keluhan Utama</th>
                            <th>Anamnesis</th>
                            <th>Pemeriksaan Fisik</th>
                            <th>Pemeriksaan Penunjang</th>
                            <th>Diagnosis</th>
                            <th>Resep</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($datas as $index => $data)
                          <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{str_pad($data->id, 4, '0', STR_PAD_LEFT)  }}</td>
                            <td>{{ format_date($data->created_time) }}</td>
                            <td>drh. {{ get_value('users',$data->dokter,'name') }}</td>
                            <td>{{ $data->ku }}</td>
                            <td>{{ $data->anamnesis}}</td>
                            <td>{{ $data->pxfisik}}</td>
                            <td>@if ($data->lab != NULL)
                                <ul style="list-style-type: none; padding: 0; margin: 0;">
                                @for ($i=0;$i<$num['lab'];$i++) <li> {{get_value('lab',array_keys($data->labhasil)[$i],'nama')}} : {{$data->labhasil[array_keys($data->labhasil)[$i]]}} {{get_value('lab',array_keys($data->labhasil)[$i],'satuan')}} </li>
                                
                                @endfor
                                @endif</td>
                            
                            <td>{{ $data->diagnosis }}</td>
                            <td>
                                @if ($data->resep != NULL)
                                    <ul style="list-style-type: none; padding: 0; margin: 0;">
                                        @for ($i = 0; $i < $num['resep']; $i++)
                                            <li style="text-md-left; margin-bottom: 5px;">
                                                {{get_value('obat', array_keys($data->allresep)[$i], 'nama_obat')}}
                                                {{get_value('obat', array_keys($data->allresep)[$i], 'sediaan')}}
                                                {{get_value('obat', array_keys($data->allresep)[$i], 'dosis')}}
                                                {{$data->allresep[array_keys($data->allresep)[$i]]}}
                                            </li>
                                        @endfor
                                    </ul>
                                @endif
                            </td>

                          </tr>
                        @endforeach
                        <!-- 5 Baris kosong di bawah tabel -->
    @for ($i = 0; $i < 5; $i++)
    <tr>
        <!-- Menambahkan sel kosong untuk setiap kolom -->
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    @endfor
</tbody>
</table>  

          <div class="footer-section">
            <p style="text-align: right;"> Jambi, {{ now()->format('d F Y') }} </p>
            <br>
            <br>
            <br>
            <br>
            <hr class="signature-line">
            <p style="text-align: right;">TTD</p>
        </div>
            
                        
                        
                        <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0 no-print">
                        @foreach ($idens as $iden)
                            <a href= "{{route('rm.list',$iden->id)}}" class="btn btn-danger btn-block" name="simpan">
                                 <i class="fas fa-arrow-left fa-fw"></i> kembali
                            </a>
                        @endforeach
                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0">

                        </div>
                        <div class="col-sm-4 mb-3 mb-sm-0 no-print">
                            <a href="javascript:;" data-toggle="modal" onclick="print()"  class="btn btn-primary btn-block">
                            <span class="icon"><i class="fa  fa-print" ></i></span><span class="text"> Cetak</span></a>
                        </div> 
                    </form>
                </div>
                </div>
                    
    </div>
    <script>
    $(document).ready( function () {
  var table = $('#pasien').DataTable( {
    pageLength : 5,
    lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']]
  } )
} );
    </script>
<script type="text/javascript">
   
    var i = $("#penunjang").attr('num');
    var a = $("#reseplist").attr('num');
       
    function addpenunjang() {
        
        
        var pen= $("#penunjang option:selected").html();
        var penid= $("#penunjang").val();
        var satuan =$("#penunjang option:selected").attr('satuan');
        if (penid !== null) {
            //code
            $("#dynamicTable").append('<tr><td><input type="hidden" name="lab['+i+'][id]" value="'+penid+'" class="form-control" readonly></td><td><input type="text" name="lab['+i+'][nama]" value="'+pen+'" class="form-control" readonly></td><td><input type="text" name="lab['+i+'][hasil]" placeholder="Hasil" class="form-control" required><td width=20%"><input class="form-control" value='+satuan+' readonly></td></td><td><button type="button" class="btn btn-danger remove-pen">Hapus</button></td></tr>');
        }
        ++i;
    };
    
     function addresep() {
        
        var res= $("#reseplist option:selected").html();
        var resid= $("#reseplist").val();
        if (resid !== null) {
            //code
            $("#reseps").append('<tr><td><input type="hidden" name="resep['+a+'][id]" value="'+resid+'" class="form-control" readonly></td><td><input type="text" name="resep['+a+'][nama]" value="'+res+'" class="form-control" readonly></td><td><input type="text" name="resep['+a+'][jumlah]" placeholder="Jumlah" class="form-control" required><td><input type="text" name="resep['+a+'][aturan]" placeholder="Aturan pakai" class="form-control" required></td><td><button type="button" class="btn btn-danger remove-res">Hapus</button></td></tr>');
        }
        ++a;
    };
   
    $(document).on('click', '.remove-pen', function(){  
         $(this).parents('tr').remove();
    });
    
    $(document).on('click', '.remove-res', function(){  
         $(this).parents('tr').remove();
    });  
   
</script>
    
                      <script type="text/javascript">
     function deleteData(id)
     {
         var id = id;
         var url = '{{ route("rm.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }

     <!-- Script Cetak -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-printThis/1.15.0/printThis.min.js"></script>
<script type="text/javascript">
    function print() {
        $('#printContainer').printThis();
    }
</script>
</script>

@endsection