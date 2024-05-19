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
  <link rel="stylesheet" href="webcss/css/style.css" />
  <link rel="stylesheet" href=" {{\Session::get('language') == 'en'  ? 'webcss/css/style.css':'webcss/css/arabic.css'}}" />
  <link rel="stylesheet" href="webcss/css/responsive.css" />
  <link rel="stylesheet" href="webcss/css/spacings.css" />
  <link rel="stylesheet" href="webcss/css/animate.css" />
  <link rel="stylesheet" href="webcss/css/color.css" />
  {{-- <link rel="stylesheet" href="webcss/css/arabic.css"> --}}

  <!-- Favicons -->
  
      {{-- <link rel="shortcut icon" href="webcss/img/llog.png" /> --}}
  <link rel="apple-touch-icon" href="webcss/img/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="webcss/img/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="webcss/img/apple-touch-icon-114x114.png" />
</head>

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
            <div class="logo-container">
              <div class="logo-wrap local-scroll">

                            <button onclick="" style=" padding-top: 5px;
                            /* border-color: #fff; */
                            background-color: #1c3f39;
                            padding: 12px 16px;
                            font-size: 16px;" class="btn btn-lg btn-color btn-submit">{{ __('إدارة المشاريع') }} </button>
                <i class="fa fa-caret-square-o-down" aria-hidden="true"></i>

                {{-- <a href="/">
إدارة المشاريع                </a> --}}
              </div>
            </div>
          </div>
          <!-- end navbar-header -->

          <div class="col-md-8 col-xs-12 nav-wrap">
            <div class="collapse navbar-collapse text-center" id="navbar-collapse">
              <ul class="nav navbar-nav local-scroll text-center">
                <li class="{{ Request::is('/') ? 'active' : '' }}">
                  <a  href="/">{{ __('Home') }}</a>
                </li>
                <li class="{{ Request::is('AboutUs') ? 'active' : '' }}">
                  <a  href="#About-Us">{{ __('AboutUs') }}</a>
                </li>
                <li class="{{ Request::is('Sectors') ? 'active' : '' }}">
                  <a href="#Sectors">{{ __('sectors') }}</a>
                </li>
                <li class="{{ Request::is('Companies') ? 'active' : '' }}">
                  <a href="#Companies">{{ __('countries') }}</a>
                </li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}">
                  <a href="#contact">{{ __('contactus') }}</a>
                </li>
                {{-- <li class="{{ Request::is('Partner with Us') ? 'active' : '' }}">
                  <a href="/joinus">{{ __('Partner with Us') }}</a>
                </li> --}}
              </ul>
            </div>
          </div>
          <!-- end col -->
          <div class="menu-socials hidden-sm hidden-xs">
            <ul>
              <li>
                <button class="lang" value="ar">AR</button>
                {{-- <button class="lang" value="{{ \Session::get('language') == 'en' ? 'ar' : 'en' }}"> {{ \Session::get('language') == 'en' ? 'AR' : 'EN' }}</button> --}}

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

        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end navigation -->
  </nav>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoQ3_zzRfW-hYspkwr5kvwCwLPGZsN4nw"></script>
  <script type="text/javascript" src="webcss/js/gmap3.js"></script>
  <script type="text/javascript" src="webcss/js/plugins.js"></script>
  <script type="text/javascript" src="webcss/js/scripts.js"></script>
  <script type="text/javascript" src="webcss/js/jquery.min.js"></script>
  {{-- <script type="text/javascript" src="webcss/js/bootstrap.min.js"></script> --}}

  <script>
    // Add active class to the current button (highlight it)
    // var header = document.getElementById("navbar-collapse");
    // var titls = header.getElementsByClassName("title");
    // for (var i = 0; i < titls.length; i++) {
    //   titls[i].addEventListener("click", function() {
    //   var current = document.getElementsByClassName("active");
    //   current[0].className = current[0].className.replace(" active", "");
    //   this.className += " active";
    //   });
    // }
    $('.nav').on('click','li', function(){
        $(this).addClass('active').siblings().removeClass('active');
      });
    </script>