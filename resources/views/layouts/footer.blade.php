<!-- resources/views/layouts/frontend/app.blade.php -->

    <!-- Top Footer Area -->
    <div class="top-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="/" style="text-align: center;">
                            <h3 class="text-light footer-glow">KEY_DHAN PET CLINIC</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer Area -->
    <div class="bottom-footer-area d-flex justify-content-between align-items-center">
        <!-- Contact Info -->
        <div class="contact-info text-light">
            <a href="https://api.whatsapp.com/send?phone=6289630534329" class="footer-glow"><span>Phone:</span> +62-896-3053-4329</a>
            <a href="mailto:Key_Dhan@example.com" class="footer-glow"><span>Email:</span> Key_Dhan@example.com</a>
        </div>
        <!-- Follow Us -->
        <div class="follow-us">
            <a href="{{ route('logout') }}" class="text-light footer-glow"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/key_dhan_pet_klinik/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==" class="text-light footer-glow"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
    </div>

    <style>
        .footer-glow {
            font-size: 24px; /* Sesuaikan ukuran font */
            color: #ff6ac1; /* Warna tulisan dan ikon (pink neon) */
            text-shadow: 0 0 10px #ff6ac1, 0 0 20px #ff6ac1, 0 0 30px #ff6ac1;
        }
    </style>
</footer>
