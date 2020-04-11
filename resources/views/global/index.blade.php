@extends('layouts.homepage')

@section('title')
    Index
@endsection

@section('css')
    <link rel="stylesheet" href="global/fonts/icomoon/style.css">
    <link rel="stylesheet" href="global/css/bootstrap.min.css">
    <link rel="stylesheet" href="global/css/jquery-ui.css">
    <link rel="stylesheet" href="global/css/owl.carousel.min.css">
    <link rel="stylesheet" href="global/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="global/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="global/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="global/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="global/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="global/css/aos.css">
    <link rel="stylesheet" href="global/css/style.css">
@endsection

@section('land')
    <div class="site-blocks-cover overlay" style="background-image: url(global/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                            
                <div class="row justify-content-center mb-4">
                    <div class="col-md-8 text-center">
                    <h1>Do our exam <span class="typed-words"></span></h1>
                    <p class="lead mb-5">Free Web Template by <a href="#" target="_blank">Colorlib</a></p>
                    <div><a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="btn btn-primary btn-md">Watch Video</a></div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('service')
    <section class="site-section border-bottom" id="services-section">
        <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center" data-aos="fade-up">
            <h2 class="text-black h1 site-section-heading text-center">Our Services</h2>
            </div>
        </div>
        <div class="row align-items-stretch">
            <div class="col-md-12">
                @foreach ($menus as $menu)
                    @if ($menu->nama == "Service")
                    <p> {{$menu->isi}}</p>
                    @endif
                @endforeach
            </div>
                {{-- <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary icon-laptop2"></span></div>
                        <div>
                        <h3>Web Design</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary icon-shopping_cart"></span></div>
                        <div>
                        <h3>eCommerce</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary icon-question_answer"></span></div>
                        <div>
                        <h3>Web Applications</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                    </div>


                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary icon-format_paint"></span></div>
                        <div>
                        <h3>Branding</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary icon-extension"></span></div>
                        <div>
                        <h3>Copy Writing</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary icon-phonelink"></span></div>
                        <div>
                        <h3>Mobile Applications</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                        <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                    </div>

                </div> --}}
        </div>
    </section>
@endsection

@section('about')
    <div class="site-section" id="about-section">
        <div class="container">
        <div class="row mb-5">
            
            <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
            <img src="global/images/about_1.jpg" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-md-6 order-md-1" data-aos="fade">

            <div class="row">

                <div class="col-12">
                <div class="text-left pb-1">
                    <h2 class="text-black h1 site-section-heading">About Us</h2>
                </div>
                </div>
                <div class="col-12 mb-4">
                    @foreach ($menus as $menu)
                        @if ($menu->nama == "About")
                            <p class="lead"> {{$menu->isi}}</p>
                        @endif
                    @endforeach
                </div>
            </div>
            </div>
            
        </div>
        </div>
    </div>
@endsection

@section('blog')
    <section class="site-section" id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                <h2 class="text-black h1 site-section-heading text-center">Blog</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                        <div class="h-entry">
                            <a href="{{ route('showImage', $blog->id) }}"><img src="{{ asset('/images/'.$blog->gambar) }}" alt="Image" class="img-fluid"></a>
                            <h2 class="font-size-regular"><a href="">{{$blog->judul}}</a></h2>
                            {{-- <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div> --}}
                            <p>{{ substr($blog->isi, 0, 150) }}</p>
                            <p><a href="{{ route('show', $blog->id) }}}}">Continue Reading...</a></p>
                        </div> 
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('contact')
    <section class="site-section bg-light" id="contact-section">
        <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
            <h2 class="text-black h1 site-section-heading">Contact Us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 mb-5">
                <form action="{{ route('store') }}" class="p-5 bg-white" method="POST">
                    @csrf
                    <h2 class="h4 text-black mb-5">Contact Form</h2> 
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black" for="fname">Your Name</label>
                            <input type="text" id="nama"name="nama" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="lname">Email</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="subject">Subject</label> 
                            <input type="subject" id="judul" name="judul" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="message">Message</label> 
                            <textarea name="pesan" id="pesan" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
                <p class="mb-0 font-weight-bold">Address</p>
                <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

                <p class="mb-0 font-weight-bold">Phone</p>
                <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                <p class="mb-0 font-weight-bold">Email Address</p>
                <p class="mb-0"><a href="#">youremail@domain.com</a></p>

            </div>
            
            </div>
        </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="global/js/jquery-3.3.1.min.js"></script>
    <script src="global/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="global/js/jquery-ui.js"></script>
    <script src="global/js/popper.min.js"></script>
    <script src="global/js/bootstrap.min.js"></script>
    <script src="global/js/owl.carousel.min.js"></script>
    <script src="global/js/jquery.stellar.min.js"></script>
    <script src="global/js/jquery.countdown.min.js"></script>
    <script src="global/js/bootstrap-datepicker.min.js"></script>
    <script src="global/js/jquery.easing.1.3.js"></script>
    <script src="global/js/aos.js"></script>
    <script src="global/js/jquery.fancybox.min.js"></script>
    <script src="global/js/jquery.sticky.js"></script>

    <script src="global/js/typed.js"></script>
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

    <script src="global/js/main.js"></script>
@endsection