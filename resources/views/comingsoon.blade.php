<!DOCTYPE html>
<html lang="en">

<head>
    <title>Barka Endowment Association</title>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic" rel="stylesheet" />

    <!-- Css -->
    <link rel="stylesheet" href="webcss/css/bootstrap.min.css" />
    <link rel="stylesheet" href="webcss/css/magnific-popup.css" />
    <link rel="stylesheet" href="webcss/css/font-icons.css" />
    <link rel="stylesheet" href="webcss/revolution/css/settings.css" />
    <link rel="stylesheet" href="webcss/css/rev-slider.css" />
    <link rel="stylesheet" href="webcss/css/sliders.css" />
    <link rel="stylesheet" href=" {{\Session::get('language') == 'en'  ? 'webcss/css/style.css':'webcss/css/arabic.css'}}" />
    <link rel="stylesheet" href="webcss/css/responsive.css" />
    <link rel="stylesheet" href="webcss/css/spacings.css" />
    <link rel="stylesheet" href="webcss/css/animate.css" />
    <link rel="stylesheet" href="webcss/css/color.css" />
    <!-- Favicons -->
    <link rel="shortcut icon" href="webcss/img/favicon.ico" />
    <link rel="apple-touch-icon" href="webcss/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="webcss/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="webcss/img/apple-touch-icon-114x114.png" />
</head>

<body data-spy="scroll" data-offset="60" data-target=".navbar-fixed-top">
    <!-- Preloader -->
    <!-- <div class="loader-mask">
    <div class="loader">"Loading..."</div>
  </div> -->

    <!-- Navigation -->
    <header class="nav-type-1" id="home">
        <nav class="navbar navbar-fixed-top">
            <div class="navigation-overlay">
                <div class="container-fluid relative">
                    <div class="row">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <!-- Logo -->
                            {{-- <div class="logo-container">
                                <div class="logo-wrap local-scroll">
                                    <a href="#home">
                                        <img class="logo" src="webcss/img/llog.png" alt="logo" />
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                        <!-- end navbar-header -->
                        <div class="menu-socials hidden-sm hidden-xs">
                            <ul>
                                <li>
                                    <a href="https://databoat.om/"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://databoat.om/"><i class="fa fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navigation -->
        </nav>
        <!-- end navbar -->
    </header>
    <!-- end navigation -->

    <div class="main-wrapper-onepage main oh">
        <!-- Video Background -->
        <section class="hero-wrap video-container text-center">
            <div class="container container-full-height">
                <div class="video-wrap" data-vide-bg="mp4: webcss/video/video, webm: video/video, ogv: video/video, poster: video/video" data-vide-options="posterType: jpg, loop: true, playsinline: true, muted: true, position: 50%">
                    <div class="video-overlay"></div>
                    <div class="video-img"></div>
                </div>

                <div class="hero-holder">
                    <div class="hero-message text-rotator">
                        <h1>
                            <span class="rotate">Coming Soon, Coming Soon , Coming Soon</span>
                        </h1>
                        <h2 class="hero-subtitle hidden-xs">Famous Investment Group</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end video bg -->

        <!-- Intro -->


        <div id="back-to-top">
            <a href="#top"><i class="fa fa-angle-up"></i></a>
        </div>
    </div>
    <!-- end main-wrapper -->

    <!-- jQuery Scripts -->
    <script type="text/javascript" src="webcss/js/jquery.min.js"></script>
    <script type="text/javascript" src="webcss/js/bootstrap.min.js"></script>
    <!-- 
    1. Generate your key here - https://developers.google.com/maps/documentation/javascript/get-api-key
    2. Paste your key in the script below.
  -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoQ3_zzRfW-hYspkwr5kvwCwLPGZsN4nw"></script>
    <script type="text/javascript" src="webcss/js/gmap3.js"></script>
    <script type="text/javascript" src="webcss/js/plugins.js"></script>
    <script type="text/javascript" src="webcss/js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            $('.lang').click(function() {
                var lang = $(this).val();
                window.location.href = "{{ route('changeLanguage') }}?language=" + lang;
            });
        });
    </script>
</body>

</html>