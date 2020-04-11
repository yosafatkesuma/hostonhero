@extends('layouts.homepage')

@section('title')
    Blog
@endsection

@section('css')
    <link rel="stylesheet" href="../global/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../global/css/bootstrap.min.css">
    <link rel="stylesheet" href="../global/css/jquery-ui.css">
    <link rel="stylesheet" href="../global/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../global/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../global/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../global/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../global/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../global/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../global/css/aos.css">
    <link rel="stylesheet" href="../global/css/style.css">
@endsection

@section('blog')
    <section class="site-section" id="blog-section">
        <div class="container" style="margin-top:100px;">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                <h1 class="text-black h1 site-section-heading text-center">Blog</h1>
                </div>
            </div>
            <div>
                @if ($blog != null)
                    <img src="{{ asset('/images/'.$blog->gambar) }}" alt="Image" class="img-fluid">
                    <h2>{{ $blog->judul }}</h2>
                    <p>{{ $blog->isi }}</p>
                @endif                
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="../global/js/jquery-3.3.1.min.js"></script>
    <script src="../global/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../global/js/jquery-ui.js"></script>
    <script src="../global/js/popper.min.js"></script>
    <script src="../global/js/bootstrap.min.js"></script>
    <script src="../global/js/owl.carousel.min.js"></script>
    <script src="../global/js/jquery.stellar.min.js"></script>
    <script src="../global/js/jquery.countdown.min.js"></script>
    <script src="../global/js/bootstrap-datepicker.min.js"></script>
    <script src="../global/js/jquery.easing.1.3.js"></script>
    <script src="../global/js/aos.js"></script>
    <script src="../global/js/jquery.fancybox.min.js"></script>
    <script src="../global/js/jquery.sticky.js"></script>

    <script src="../global/js/typed.js"></script>
                <script>
                var typed = new Typed('.typed-words', {
                strings: ["Web Apps"],
                typeSpeed: 80,
                backSpeed: 80,
                backDelay: 4000,
                startDelay: 1000,
                loop: true,
                showCursor: true
                });
                </script>

    <script src="../global/js/main.js"></script>
@endsection