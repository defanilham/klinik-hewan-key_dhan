<!DOCTYPE html>
<html>

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

        <style>
            /* Gaya kustom untuk kop surat */
            .letterhead {
                text-align: center;
                padding: 20px;
                border-bottom: 5px solid #000; /* Sesuaikan warna sesuai kebutuhan */
                display: flex;
                align-items: center;
                justify-content: center;
            }
        
            .letterhead img {
                max-width: 100px; /* Sesuaikan lebar maksimal logo */
                max-height: 100px; /* Sesuaikan tinggi maksimal logo */
                margin-right: 20px; /* Sesuaikan margin sesuai kebutuhan */
            }

        .table th {
            background-color: #95adec;
            color: #000000;
            font-size: 17px;
            text-align: center;
        }

        .table td {
            font-size: 16px;
            text-align: center;
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
        </style>

        <div class="letterhead">
            <img src="{{ asset('storage/logo/'. get_setting('gambar')) }}" alt="Logo">
            <div>
                <font size="6"><b>KEY_DHAN PET CLINIC</b></font><br>
                <font size="4"><i>Jl.Sk.Rd.Syahbudin, Mayang Mangurai, Kec.Kota Baru, Kota Jambi</i></font>
            </div>
        </div>
        </div>
    
          <!-- Card Header - Accordion -->
          <br>
          <h6 class="m-0 custom-font">Data Rekam Medis</h6>
          <br>

             <div class="table-responsive">
          <table class="table table-bordered table-striped" id="pasien" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Id</th>
                <th>No RM</th>
                <th>Tanggal Periksa</th>
                <th>Dokter Pemeriksa</th>
                <th>Keluhan Utama</th>
                <th>Lab</th>
                <th>Diagnosis</th>
                <th>Resep</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($rms as $index => $rm)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{str_pad($rm->id, 4, '0', STR_PAD_LEFT)  }}</td>
                <td>{{str_pad($rm->idpasien, 4, '0', STR_PAD_LEFT)  }}</td>
                <td>{{ format_date($rm->created_time) }}</td>
                <td>dr. {{ get_value('users',$rm->dokter,'name') }}</td>
                <td>{{ $rm->ku }}</td>
                <td>
                @if ($rm->lab != NULL)
                  @for ($i=0;$i<sizeof($lab=encode($rm->lab));$i++)
                      @if ($has=encode($rm->hasil))
                          <li>{{get_value('lab',$lab[$i],'nama')}} : {{$has[$i]}} {{get_value('lab',$lab[$i],'satuan')}}</li>
                      @endif
                  @endfor
                @endif
                </td>
                <td>{{ $rm->diagnosis}}</td>
                <td>
                @if ($rm->resep != NULL)
                  @for ($i=0;$i<sizeof($resep=encode($rm->resep));$i++)
                      @if ($aturan=encode($rm->aturan))
                          <li>{{ get_value('obat',$resep[$i],'nama_obat')}} {{ get_value('obat',$resep[$i],'sediaan')}} {{ get_value('obat',$resep[$i],'dosis')}} {{ get_value('obat',$resep[$i],'satuan')}} : {{$aturan[$i]}}</li>
                      @endif
                  @endfor
                @endif
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
            </div>
          </div>
          <br></br>

          <div class="footer-section">
            <p style="text-align: right;"> Jambi, {{ now()->format('d F Y') }} </p>
            <br>
            <br>
            <hr class="signature-line">
            <p style="text-align: right;">TTD</p>
        </div>

  
  <!-- Custom scripts for all pages-->
  <script src="{{ URL::asset('js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ URL::asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ URL::asset('js/demo/datatables-demo.js') }}"></script>
</body>

</html>