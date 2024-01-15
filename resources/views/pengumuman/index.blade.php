<!-- resources/views/pengumuman/index.blade.php -->
@extends('layouts.app1')
<div class="mt-100"> <!-- Tambahkan class mt-80 untuk memberi ruang di bagian atas halaman -->

            <!-- ##### Hero Area Start ##### -->
            <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url('{{ asset('img/bg/bg3.png') }}')">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <!-- Hero Content -->
                            <div class="hero-content text-center">
                                <h2>SELAMAT DATANG DI KEY_DHAN PET CLINIC</h2>
                    <a href="{{ route('login') }}" class="btn clever-btn">login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ##### Hero Area End ##### -->

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

            <div class="regular-page-area section-padding-100 mt-5 mb-4">
                <div class="col-lg-10 mx-auto">
                    <div class="card">
                        <div class="card-header"><strong>KEY_DHAN PET CLINIC</strong></div>
                        <div class="card-body">
                            <strong>Visi:</strong>
<p class="lead">Menjadi Klinik Hewan Unggulan di Kota Jambi</p>

<strong>Misi:</strong>
<ul>
    <li>Menjadi Klinik Hewan yang memiliki layanan unggulan yang didukung tenaga profesional</li>
    <li>Memberi pelayanan Kesehatan Hewan yang cepat, tepat, ramah dan terpercaya</li>
    <li>Menjadi Klinik Hewan yang menjunjung tinggi animal welfare (kesejahteraan hewan)</li>
    <li>"One World One Health". Memberi pelayanan masyarakat melalui sosialisasi kesehatan hewan dengan tujuan agar masyarakat bebas dari penyakit menular dari hewan kepada manusia atau sebaliknya (Zoonosis) sesuai dengan konsep organisasi Perserikatan Bangsa-bangsa (OIE, WHO dan FAO)</li>
</ul>

<strong>Motto:</strong>
<p class="lead">Melayani dengan sepenuh hati dan menyayangi sepenuh jiwa<br>(Serve with heart and loving whole souled)</p>

<strong>Slogan:</strong>
<p class="lead">Solusi Hewan Kesayangan Anda<br>(Your Pet Solution)</p>

                        </div>
                    </div>
                </div>
            </div>
            <style>
                .table-text {
                    font-size: 20px; /* You can adjust the font size as needed */
                }
            </style>
    </div>