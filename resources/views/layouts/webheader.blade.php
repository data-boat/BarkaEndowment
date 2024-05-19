<head>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="{{\Session::get('language') == 'en'  ? '../../webcss/css/style.css':'../../webcss/css/arabic.css'}}">
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
                                    <img class="logo" src="../../webcss/img/llog.png" alt="logo" />
                                </a>
                            </div>
                        </div>
                    </div> --}}
                    <!-- end navbar-header -->

                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <div class="collapse navbar-collapse text-center" id="navbar-collapse">
                            <ul class="nav navbar-nav local-scroll text-center">
                                <li class="active">
                                    <a href="/">{{ __('Home') }}</a>
                                </li>
                                <li>
                                    <a href="/">{{ __('AboutUs') }}</a>
                                </li>
                                <li>
                                    <a href="/">{{ __('sectors') }}</a>
                                </li>
                                <li>
                                    <a href="/">{{ __('countries') }}</a>
                                </li>
                                <li>
                                    <a href="/">{{ __('contactus') }}</a>
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
                                <a href="https://databoat.om/"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://databoat.om/"><i class="fa fa-twitter"></i></a>
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
                                <a href="https://databoat.om/"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://databoat.om/"><i class="fa fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <div class="collapse navbar-collapse text-center" id="navbar-collapse">
                            <ul class="nav navbar-nav local-scroll text-center">

                                <li>
                                    <a href="">{{ __('contactus') }}</a>
                                </li>

                                <li>
                                    <a href="/">{{ __('countries') }}</a>
                                </li>

                                <li>
                                    <a href="/">{{ __('sectors') }}</a>
                                </li>

                                <li>
                                    <a href="/">{{ __('AboutUs') }}</a>
                                </li>

                                <li class="active">
                                    <a href="/">{{ __('Home') }}</a>
                                </li>

                                <li>
                                    <a href="/">{{ __('contactus') }}</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                    {{-- <div class="logo-container">
                        <div class="logo-wrap local-scroll">
                            <a href="#home">
                                <img class="logo" src="../../webcss/img/llog.png" alt="logo" />
                            </a>
                        </div>
                    </div>
 --}}



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


<script>
    $(document).ready(function() {
        $('.lang').click(function() {
            var lang = $(this).val();
            window.location.href = "{{ route('changeLanguage') }}?language=" + lang;
        });
    });
</script>