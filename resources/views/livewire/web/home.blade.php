<head>
    <!-- HOME ASSET -->
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('home/assets/images/favicon.png')}}" type="image/png">
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{asset('home/assets/css/animate.css')}}">
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{asset('home/assets/css/magnific-popup.css')}}">
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{asset('home/assets/css/slick.css')}}">
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('home/assets/css/LineIcons.css')}}">
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{asset('home/assets/css/font-awesome.min.css')}}">
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}">
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('home/assets/css/default.css')}}">
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{asset('home/assets/css/style.css')}}">
</head>
<div>
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg active">
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="navbar-brand" href="/">
                                            <strong> SCALES IOT - MIOT </strong>
                                            {{-- <h4 class="page-scroll">SCALES IOT - MIOT
                                            </h4> --}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="ml-auto navbar-nav">
                                    <li class="nav-item">
                                        <a href="/project/scale/logout" class="page-scroll" style="cursor: pointer">LOGOUT</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#facts">Why</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#blog">Blog</a>
                                    </li>--}}
                                </ul>
                            </div> <!-- navbar collapse -->

                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="home" class="header-hero bg_cover" style="background-image: url({{asset('home/assets/images/banner-bg.svg')}})">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="text-center header-hero-content">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                Tubes IOT</h3>
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                                Index Mass Body Scale - MIOT</h2>
                            <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Dibuat untuk
                                mempelajari tentang IOT dan untuk memenuhi tugas kuliah</p>
                            <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">IOT - Teknik
                                Komputer</p>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center header-hero-image wow fadeIn" data-wow-duration="1.3s"
                            data-wow-delay="1.4s">
                            <img src="{{asset('home/assets/images/header-hero.png')}}" alt="hero">
                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->


    <!--====== SERVICES PART START ======-->

    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="pb-40 text-center section-title">
                        <div class="m-auto line"></div>
                        <h3 class="title">"Do not compare yourself to others, <span> Compare yourself with yesterday's
                                you.</span>"</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="table-responsive">
                            <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Weight</th>
                                    <th scope="col">Height</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($scales as $value)
                                    <tr>
                                        <td>{{ $value->weight }}</td>
                                        <td>{{ $value->height }}</td>
                                        <td>{{ $value->status }}</td>
                                        <td>{{ $value->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        <!--{{ $scales->links() }}-->
                        <!--<span style="height: 50px;width: 20%">{{ $scales->links() }}</span>-->
                        </div>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="text-center about-image mt-50 wow fadeInRightBig" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        @if ($scales->last()->status == 'Terlalu Kurus')
                            <img src="{{asset('home/assets/images/very_thin.png')}}" alt="Very Thin">
                        @elseif($scales->last()->status == 'Kurus')
                            <img src="{{asset('home/assets/images/skinny.png')}}" alt="Skinny">
                        @elseif($scales->last()->status == 'Normal')
                            <img src="{{asset('home/assets/images/normal.png')}}" alt="Normal">
                        @elseif($scales->last()->status == 'Gemuk')
                            <img src="{{asset('home/assets/images/fat.png')}}" alt="Fat">
                        @elseif($scales->last()->status == 'Terlalu Gemuk')
                            <img src="{{asset('home/assets/images/very_fat.png')}}" alt="Very Fat">
                        @endif
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="{{asset('home/assets/images/about-shape-1.svg')}}" alt="shape">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section class="about-area pt-70">
        <div class="about-shape-2">
            <img src="{{asset('home/assets/images/about-shape-2.svg')}}" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="text-center about-image mt-50 wow fadeInLeftBig" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <div id="chartweight"></div>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="text-center about-image mt-50 wow fadeInRightBig" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <div id="chartheight"></div>
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <!--====== ABOUT PART START ======-->

    <section class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title"> Solutions For Your Weight </h3>
                        </div> <!-- section title -->
                        @if ($scales->last()->status == 'Terlalu Kurus')
                            <p class="text" style="text-align: justify;">Beberapa solusi untuk kategori ini adalah tambah asupan kalori anda dengan mengkonsumsi susu, juga bisa menambahkan keju dan alpukat sebagai isi roti. Fokuslah pada makanan yang kaya nutrisi. Seperti daging sapi rendah lemak, daging ayam tanpa kulit, dan keju. Pilih sumber karbohidrat rendah glikemik, misalnya beras merah dan biji-bijian. Pilih camilan yang mengandung banyak protein dan karbohidrat sehat, seperti protein bar, kacang rebus, atau minum milk shake buatan sendiri. Jika masih belum berhasil, kamu bisa menambah upaya ini dengan minum susu weight gain. Susu ini memiliki kandungan L-Lysine yang berguna untuk meningkatkan protein didalam tubuh hingga berat badan pun bisa bertambah. Dan konsultasi ke dokter ahli yang akan memberimu daftar menu, suplemen, atau obat tertentu yang dapat membantu berat badan agar meningkat dengan cara yang sehat.</p>
                        @elseif($scales->last()->status == 'Kurus')
                            <p class="text" style="text-align: justify;">Beberapa solusi untuk kategori ini adalah tambah asupan kalori anda dengan mengkonsumsi susu, juga bisa menambahkan keju dan alpukat sebagai isi roti. Fokuslah pada makanan yang kaya nutrisi. Seperti daging sapi rendah lemak, daging ayam tanpa kulit, dan keju. Pilih sumber karbohidrat rendah glikemik, misalnya beras merah dan biji-bijian. Pilih camilan yang mengandung banyak protein dan karbohidrat sehat, seperti protein bar, kacang rebus, atau minum milk shake buatan sendiri. Jika masih belum berhasil, kamu bisa menambah upaya ini dengan minum susu weight gain. Susu ini memiliki kandungan L-Lysine yang berguna untuk meningkatkan protein didalam tubuh hingga berat badan pun bisa bertambah. Dan konsultasi ke dokter ahli yang akan memberimu daftar menu, suplemen, atau obat tertentu yang dapat membantu berat badan agar meningkat dengan cara yang sehat.</p>
                        @elseif($scales->last()->status == 'Normal')
                            <p class="text" style="text-align: justify;">Berat badan sudah baik dan ideal, tetap jaga pola hidup untuk mempertahankan berat badan agar tetap ideal yaitu seperti rutin berolahraga, miliki pola makan yang sehat dan batasi kenaikan berat badanmu.</p>
                        @elseif($scales->last()->status == 'Gemuk')
                            <p class="text" style="text-align: justify;">Beberapa solusi untuk kategori ini adalah Rutin Berolahraga dapat dengan aerobic. Beberapa pilihan aerobik yang bisa dengan mudah dilakukan antara lain jogging, bersepeda, berenang, atau olahraga tinju. Batasi karbohidrat olahan, kurangi minuman kemasan seperti soda, jus, kopi, dan teh umumnya tinggi gula dan dapat menambah berat badan secara signifikan. Sebaliknya, mengganti minuman manis dengan air putih dapat mengurangi asupan kalori dan menurunkan berat badan. Serta meningkatkan jumlah protein dalam makanan anda yang dapat membantu menurunkan berat badan dengan cara mengurangi nafsu makan. Pasalnya, tubuh akan mencerna protein lebih lama ketimbang makanan lain, sehingga perut akan terasa kenyang lebih lama.</p>
                        @elseif($scales->last()->status == 'Terlalu Gemuk')
                            <p class="text" style="text-align: justify;">Beberapa solusi untuk kategori ini adalah Rutin Berolahraga dapat dengan aerobic. Beberapa pilihan aerobik yang bisa dengan mudah dilakukan antara lain jogging, bersepeda, berenang, atau olahraga tinju. Batasi karbohidrat olahan, kurangi minuman kemasan seperti soda, jus, kopi, dan teh umumnya tinggi gula dan dapat menambah berat badan secara signifikan. Sebaliknya, mengganti minuman manis dengan air putih dapat mengurangi asupan kalori dan menurunkan berat badan. Serta meningkatkan jumlah protein dalam makanan anda yang dapat membantu menurunkan berat badan dengan cara mengurangi nafsu makan. Pasalnya, tubuh akan mencerna protein lebih lama ketimbang makanan lain, sehingga perut akan terasa kenyang lebih lama.</p>
                        @endif
                        <p class="text"></p>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="text-center about-image mt-50 wow fadeInRightBig" data-wow-duration="1s"
                        data-wow-delay="0.5s">
                        <img src="{{asset('home/assets/images/working_out.svg')}}" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="{{asset('home/assets/images/about-shape-1.svg')}}" alt="shape">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->


    <!--====== ABOUT PART ENDS ======-->

    <!--====== VIDEO COUNTER PART START ======-->

    <section id="facts" class="video-counter pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img class="dots" src="{{asset('home/assets/images/dots.svg')}}" alt="dots">
                        <div class="video-wrapper">
                            <div class="video-image">
                                <img src="{{asset('home/assets/images/video.jpg')}}" alt="video">
                            </div>
                            <div class="video-icon">
                                <a href="https://www.youtube.com/watch?v=ZHi_A6tC40Y" class="video-popup"><i
                                        class="lni-play"></i></a>
                            </div>
                        </div> <!-- video wrapper -->
                    </div> <!-- video content -->
                </div>
                <div class="col-lg-6">
                    <div class="counter-wrapper mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="counter-content">
                            <div class="section-title">
                                <div class="line"></div>
                                <h3 class="title">What is Body Mass Index ?</h3>
                            </div> <!-- section title -->
                            <p class="text" style=" text-align: justify;">Body mass index (BMI) is a person's weight in kilograms divided by the
                                height in meters squared. BMI is an inexpensive and easy screening method for the weight
                                categories - underweight, healthy weight, overweight, and obese.

                                BMI does not measure body fat directly, but it correlates moderately with more direct
                                measurement of body fat. Additionally, BMI appears to correlate strongly with various
                                metabolic and disease outcomes such as this more direct measure of body fat.</p>
                            <p style=" text-align: justify; padding-top: 40px;"><strong>Your ethnic group can also affect your risk of some health conditions. You should
                                    not use BMI as a measure if you're pregnant.</strong></p>
                        </div> <!-- counter content -->
                    </div> <!-- counter wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== VIDEO COUNTER PART ENDS ======-->

    <!--====== BLOG PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area pt-120">
        <div class="container" style="padding-bottom: 50px;">
            <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row justify-content-center">
                    <div class="col-lg-16">
                        <div class="text-center">
                            <h3 class="header-sub-title wow fadeInUp" style="color:rgb(0, 0, 0); padding-bottom: 70px;"
                                data-wow-duration="1.3s" data-wow-delay="0.2s">
                                Thank You For Visiting Our Website, Hopefully It Will Help You In Realizing Your Ideal Body
                            </h3>
                            <h2 class="header-title wow fadeInUp" style="color:rgb(0, 0, 0);"
                                data-wow-duration="1.3s" data-wow-delay="0.5s">
                                Index Mass Body Scale - MIOT</h2>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- subscribe area -->
        </div> <!-- container -->
        <div id="particles-2"></div>
    </footer>

    {{-- <footer id="footer" class="footer-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-16">
                    <div class="text-center header-hero-content">
                        <h3 class="header-sub-title wow fadeInUp" style="color:rgb(0, 0, 0); padding-bottom: 70px;"
                            data-wow-duration="1.3s" data-wow-delay="0.2s">
                            Thank You For Visiting Our Website, Hopefully It Will Help You In Realizing Your Ideal Body
                        </h3>
                        <h2 class="header-title wow fadeInUp" style="color:rgb(0, 0, 0); padding-bottom: 50px;"
                            data-wow-duration="1.3s" data-wow-delay="0.5s">
                            Index Mass Body Scale - MIOT</h2>
                    </div> <!-- header hero content -->
                </div>
            </div> <!-- row -->
        </div>
        <!--====== BACK TOP TOP PART START ======-->

        <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

        <!--====== BACK TOP TOP PART ENDS ======-->
    </footer> --}}

    <!--====== FOOTER PART ENDS ======-->

    <!--====== Jquery js ======-->
    <script src="{{asset('home/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('home/assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('home/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('home/assets/js/bootstrap.min.js')}}"></script>

    <!--====== Plugins js ======-->
    <script src="{{asset('home/assets/js/plugins.js')}}"></script>

    <!--====== Slick js ======-->
    <script src="{{asset('home/assets/js/slick.min.js')}}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{asset('home/assets/js/ajax-contact.js')}}"></script>

    <!--====== Counter Up js ======-->
    <script src="{{asset('home/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('home/assets/js/jquery.counterup.min.js')}}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{asset('home/assets/js/jquery.magnific-popup.min.js')}}"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="{{asset('home/assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('home/assets/js/scrolling-nav.js')}}"></script>

    <!--====== wow js ======-->
    <script src="{{asset('home/assets/js/wow.min.js')}}"></script>

    <!--====== Particles js ======-->
    <script src="{{asset('home/assets/js/particles.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('home/assets/js/main.js')}}"></script>

    <!-- Charts -->
    @extends('layouts.chart')
</div>
