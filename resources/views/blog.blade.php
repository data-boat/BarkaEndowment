<!DOCTYPE html>
<html lang="en">

<head>
    <title>Famouse</title>

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

@if (\Session::get('language') == 'en' )


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
                        </div>
                    </div> --}}
                    <!-- end navbar-header -->

                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <div class="collapse navbar-collapse text-center" id="navbar-collapse">
                            <ul class="nav navbar-nav local-scroll text-center">
                                <li class="active">
                                    <a href="#home">{{ __('Home') }}</a>
                                </li>
                                <li>
                                    <a href="#About Us">{{ __('AboutUs') }}</a>
                                </li>
                                <li>
                                    <a href="#Sectors">{{ __('sectors') }}</a>
                                </li>
                                <li>
                                    <a href="#Companies">{{ __('countries') }}</a>
                                </li>
                                <li>
                                    <a href="#contact">{{ __('contactus') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="menu-socials hidden-sm hidden-xs">
                        <ul>
                            <li>
                                <button class="lang" value="{{ \Session::get('language') == 'en' ? 'ar' : 'en' }}"><i class="fa fa-globe"></i></button>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://instagram.com/famous.inv?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/famousinv"><i class="fa fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="menu-socials hidden-sm hidden-xs">
                        <ul>
                          <li>
                            <button class="lang btn" value="{{ \Session::get('language') == 'en' ? 'ar' : 'en' }}">{{ \Session::get('language') =='en'?'العربية':'English'}}</button>
                          </li>
          
                        </ul>
                      </div> -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end navigation -->
    </nav>
    <!-- end navbar -->
</header>




@else




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



                    </div>
                    <div class="menu-socials hidden-sm hidden-xs">
                        <ul>
                            <li>
                                <button class="lang" value="{{ \Session::get('language') == 'en' ? 'ar' : 'en' }}"><i class="fa fa-globe"></i></button>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://instagram.com/famous.inv?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/famousinv"><i class="fa fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <div class="collapse navbar-collapse text-center" id="navbar-collapse">
                            <ul class="nav navbar-nav local-scroll text-center">

                                <li>
                                    <a href="#contact">{{ __('contactus') }}</a>
                                </li>

                                <li>
                                    <a href="#Companies">{{ __('countries') }}</a>
                                </li>

                                <li>
                                    <a href="#Sectors">{{ __('sectors') }}</a>
                                </li>

                                <li>
                                    <a href="#About Us">{{ __('AboutUs') }}</a>
                                </li>

                                <li class="active">
                                    <a href="#home">{{ __('Home') }}</a>
                                </li>




                            </ul>
                        </div>
                    </div>
                    {{-- <div class="logo-container">
                        <div class="logo-wrap local-scroll">
                            <a href="#home">
                                <img class="logo" src="webcss/img/llog.png" alt="logo" />
                            </a>
                        </div>
                    </div> --}}




                    <!-- <div class="menu-socials hidden-sm hidden-xs">
                        <ul>
                          <li>
                            <button class="lang btn" value="{{ \Session::get('language') == 'en' ? 'ar' : 'en' }}">{{ \Session::get('language') =='en'?'العربية':'English'}}</button>
                          </li>
          
                        </ul>
                      </div> -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end navigation -->
    </nav>
    <!-- end navbar -->
</header>
@endif

<body data-spy="scroll" data-offset="60" data-target=".navbar-fixed-top">

    <!-- Contact -->
    <section class="section-wrap contact" id="contact">
        <div class="container">
            <div class="row heading">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2 class="text-center bottom-line">{{ __('contactus') }}</h2>
                    <p class="subheading">
                        {{ __('co-title') }}
                    </p>
                </div>
            </div>
            <div>
                @if (\Session::get('language') == 'en' )
                <div class="row">
                    <div class="col-md-8">
                        <form id="contact-form" action="/web/store" method="POST">
                            @csrf
                            <div class="row contact-row">
                                <div class="col-md-6 contact-name" placeholder="invest">
                                    <select name="cars" id="name">
                                        <option value="invester">invester</option>
                                        <option value="projecter">Project mangment</option>
                                    </select>
                                    </br>
                                    <select name="cars" id="name">
                                        <option value="invester">invester</option>
                                        <option value="projecter">Project mangment</option>
                                    </select>
                                </div>
                                <div class="col-md-6 contact-email">
                                </div>
                            </div>
                            <input name="name" id="name" type="text" placeholder="{{ __('co-name1') }}" />
                            <input name="mail" id="mail" type="email" placeholder="{{ __('co-email') }}" />
                            <input name="subject" id="subject" type="text" placeholder="{{ __('co-subject1') }}" />
                            <textarea name="comment" id="comment" placeholder="{{ __('co-message') }}"></textarea>
                            <button class="btn btn-lg btn-color btn-submit" type="submit">{{ __('SendMessage') }}</button>
                            @csrf()
                        </form>
                    </div>
                    <!-- end col -->
                </div>
                @else
                <div class="row flib">

                    <div class="col-md-8">
                        <form id="contact-form" action="/web/store" method="POST">
                            @csrf
                            <div class="row contact-row">

                                <div class="col-md-6 contact-email">
                                    <input name="mail" id="mail" type="email" placeholder="{{ __('co-email') }}" />
                                </div>
                                <div class="col-md-6 contact-name">
                                    <input name="name" id="name" type="text" placeholder="{{ __('co-name1') }}" />
                                </div>
                            </div>
                            <input name="subject" id="subject" type="text" placeholder="{{ __('co-subject1') }}" />
                            <textarea name="comment" id="comment" placeholder="{{ __('co-message') }}"></textarea>
                            <button class="btn btn-lg btn-color btn-submit" type="submit">{{ __('SendMessage') }}</button>
                            @csrf()
                        </form>
                    </div>
                </div>
                <!-- end col -->
            </div>
            @endif
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer minimal bg-dark" style="background-image: url(webcss/img/pattern.png)">
        <div class="container">
            <div class="row">
                <div>
                    <h2>Famous Investment</h2>

                    <div class="socials footer-socials">
                        <a href="https://twitter.com/famousinv"><i class="fa fa-twitter"></i></a>
                        <a href="https://instagram.com/famous.inv?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

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