<div class="clever-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <!-- Menu -->
        <nav class="classy-navbar justify-content-between" id="cleverNav">

            <!-- Logo -->
            <a class="nav-brand" href="/"><img src="{{ asset('img/icons') }}/01.jpg" width="50" alt=""> Key_Dhan Pet Clinic</a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

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

                <!-- Close Button -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="{{ route('pengumuman') }}" >Home</a></li>
                        <li><a href="{{ route('pendaftaran') }}" >Pendaftaran</a></li>
                        <li><a href="{{ route('about') }}" c>Tentang</a></li>
                        <li><a href="{{ route('contact') }}" >Kontak</a></li>
                        <li><a href="#" >Galeri</a></li>
                        <li><a href="#" >Pengumuman dan Berita</a></li>
                    </ul>


                    @auth
                    <div class="login-state d-flex align-items-center">
                        <div class="user-name mr-30">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                    <a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endauth

                </div>
                <!-- Nav End -->
            </div>
        </nav>
    </div>
</div>