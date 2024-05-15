<!DOCTYPE html>
<html lang="en">
    <head>
           <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css"  />  
    </head>
<body data-spy="scroll" data-offset="60" data-target=".navbar-fixed-top">
<!-- Navigation -->
@include('layouts.nav')
<!-- end navbar -->

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
            <span class="rotate">@if (\Session::get('language') == 'en' )
              {{$home->hometital}}
              @else
              {{$home->hometitalar}}
              @endif</span>
          </h1>
          <h2 class="hero-subtitle hidden-xs">

            @if (\Session::get('language') == 'en' )
            {{$home->homedescription}}
            @else
            {{$home->homedescriptionar}}
            @endif
          </h2>
        </div>
      </div>
    </div>
  </section>
  <!-- end video bg -->

  <!-- Intro -->



    <!-- About us / Progress Bars -->
    <section class="section-wrap pt-110 angle-bottom" id="About-Us">
      <div class="container">
        <div class="row mt-minus-30">


          <div class="col-sm-6">
            <div class="about-description mt-30">
              <h4>{{ __('AboutUs') }}</h4>
                {{-- <img src="webcss/img/Maskgroup.png" /> --}}
              
              <p >
                @if (\Session::get('language') == 'en' )
                {{$about->aboutdescription}}
                @else
                {{$about->aboutdescriptionar}}
                @endif
              </p>
            </div>
            
          </div>

        </div>
      </div>
  </div>
  </section>





  <section class="section-wrap process" style="background-image: url(webcss/img/Maskgroup.png)">
    <div class="container" id="Sectors">
      <div class="row heading">
        <div class="col-md-6 col-md-offset-3">
          <h2 class="text-center bottom-line">{{ __('oursectors') }}</h2>

        </div>
      </div>

      <div class="row">
        @foreach($service as $service)
        <div class="col-md-6 service-item">
          <div class="service-item-box icon-effect-1 icon-effect-1a text-center">
            
              {{-- <img src="{{url('../storage/services/'.$service->icon)}}" /> --}}
           
            <h3>
              @if (\Session::get('language') == 'en' )
              {{$service->tital}}
              @else
              {{$service->titalar}}
              @endif
            </h3>
            <p>
              @if (\Session::get('language') == 'en' )
              {{$service->description}}
              @else
              {{$service->descriptionar}}
              @endif
            </p>
            {{-- <button onclick="location.href='services/show/{{$service->id}}'" class="btn btn-lg btn-color btn-submit">{{ __('readmore') }} </button> --}}

          </div>
        </div>
        @endforeach
        <!-- end service item -->
      </div>
    </div>
    </div>
    </div>
  </section>

  <section class="section-wrap-mp pricing" id="Companies">
    <div class="container">
      <div class="row heading">
        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
          <h3 class="text-center bottom-line">
            {{ __('map') }}
          </h3>

        </div>
      </div>
 

        <div class="figure" style="width: 1200px; height: 260px;">
          {{-- <img class="image-main" src="webcss/img/map.png">
          <img class="image-hover" src="webcss/img/KSA.png">
          <img class="image-hover" src="webcss/img/UAE.png">
          <img class="image-hover" src="webcss/img/sudan.png">
          <img class="image-hover" src="webcss/img/Yemen.png">
          <img class="image-hover" src="webcss/img/oman.png"> --}}
        </div>

      </div>

    </div>
    </div>
  </section>

<!-- Contact -->
<section class="section-wrap process" id="contact" style="background-image: url(webcss/img/pattern.png)" >
  <div class="container">
    <div class="row heading">
      <div class="col-md-6 col-md-offset-3 text-center">
        <h2 class="text-center bottom-line">{{ __('contactus') }}</h2>
      
      </div>
    </div>
    <div>

      @if (\Session::get('language') == 'en' )





      <div class="row">
        <div class="col-md-4">
          

          <div class="contact-item">
            <div class="contact-icon">
              <i class="fa fa-clock-o"></i>
            </div>
            <h6 style="color: #fcfcfa;" >{{ __('getintuch') }}</h6>
            <p>
              Sun-Thur: 9:00 – 6:00

            </p>
          </div>



          <div class="contact-item">
            <div class="contact-icon">
              <i class="icon icon-Pointer"></i>
            </div>
            <h6 style="color: #fcfcfa;">{{ __('address') }}</h6>
            <p>
              oman,
              Muscat, Sultan Qaboos City,</br> Al Manal Building , floor P,</br> Office Number 702

            </p>
          </div>
          <!-- end address -->
          <div class="contact-item">
            <div class="contact-icon">
              <i class="fa fa-phone"></i>
            </div>
            <h6 style="color: #fcfcfa;" >{{ __('Calls') }}</h6>
            <a style="color: #FFBC00;">22678652</a>
          </div>
          <div class="contact-item">
            <div class="contact-icon">
              <i class="fa fa-whatsapp"></i>
            </div>
            <h6 style="color: #fcfcfa;">{{ __('whatsapp') }}</h6>
            <a style="color: #FFBC00;" href="https://api.whatsapp.com/send/?phone=%2B96899009985&text&type=phone_number&app_absent=0">99009985</a>
          </div>
          <!-- end phone number -->

          <div class="contact-item">
            <div class="contact-icon">
              <i class="icon icon-Mail"></i>
            </div>
            <h6 style="color: #fcfcfa;">{{ __('email') }}</h6>
            <a style="color: #FFBC00;" href="mailto:enigmasupport@gmail.com">info@famousinvst.com</a>
          </div>
          <!-- end email -->
        </div>

        <div class="col-md-8">
                   @if ($errors->any())
        <div class="alert alert-danger">
            <strong style="color:red">Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    
          <form id="contact-form" action="/storecontact" method="POST">
            @csrf
            <div class="row contact-row">
              <div class="col-md-6 contact-name">
                <input name="name" id="name" type="text" placeholder="{{ __('co-name1') }}" required/>
              </div>
              <div class="col-md-6 contact-email">
                <input name="email" id="email" type="email" placeholder="{{ __('co-email') }}" required/>
              </div>
            </div>
            <input name="subject" id="subject" type="text" placeholder="{{ __('co-subject1') }}" />
            <textarea name="comment" id="comment" placeholder="{{ __('co-message') }}" required ></textarea>
            <button  class="btn btn-lg btn-color btn-submit" type="submit">{{ __('SendMessage') }}</button>
            @csrf()
          </form>
        </div>
      </div>


      @else




      <div class="row flib">
        <div class="col-md-8">
                   @if ($errors->any())
        <div class="alert alert-danger">
            <strong style="color:red">Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
  
          <form id="contact-form" action="/storecontact" method="POST">
            @csrf
            <div class="row contact-row">

              <div class="col-md-6 contact-email">
                <input name="email" id="email" type="email" placeholder="{{ __('co-email') }}"  required />
              </div>
              <div class="col-md-6 contact-name">
                <input name="name" id="name" type="text" placeholder="{{ __('co-name1') }}" required/>
              </div>
            </div>
            <input name="subject" id="subject" type="text" placeholder="{{ __('co-subject1') }}" />
            <textarea name="comment" id="comment" placeholder="{{ __('co-message') }}" required></textarea>
            <button class="btn btn-lg btn-color btn-submit" type="submit">{{ __('SendMessage') }}</button>
            @csrf()
          </form>
        </div>

        <div class="col-md-3">
          
          <div class="contact-item">
            <div class="contact-icon">
              <i style="color: #FFBC00; border-color: #FFBC00; " class="fa fa-clock-o"></i>
            </div>
            <h6 style="color: #fcfcfa;">{{ __('getintuch') }}</h6>
            <p style="color: #FFBC00;" >
              {{ __('days') }}

            </p>
          </div>
          <div class="contact-item flib">
            <div class="contact-icon flib ">
              <i class="icon icon-Pointer"></i>
            </div>
            <h6 style="color: #fcfcfa;" >{{ __('address') }}</h6>
            <p style="color: #FFBC00;" >
              {{ __('llocation') }}

            </p>
          </div>
          <!-- end address -->

          <div class="contact-item">
            <div class="contact-icon">
              <i class="fa fa-phone"></i>
            </div>
            <h6 style="color: #fcfcfa;">{{ __('Calls') }}</h6>
            <a style="color: #FFBC00;">22678652</a>
          </div>
          <!-- end phone number -->
          <div class="contact-item">
            <div class="contact-icon">
              <i class="fa fa-whatsapp"></i>
            </div>
            <h6 style="color: #fcfcfa;" >{{ __('whatsapp') }}</h6>
            <a style="color: #FFBC00;" href="https://api.whatsapp.com/send/?phone=%2B96899009985&text&type=phone_number&app_absent=0">99009985</a>
          </div>

          <div class="contact-item">
            <div class="contact-icon">
              <i class="icon icon-Mail"></i>
            </div>
            <h6 style="color: #fcfcfa;">{{ __('email') }}</h6>
            <a style="color: #FFBC00;" href="mailto:enigmasupport@gmail.com">info@famousinvst.com</a>
          </div>
          <!-- end email -->
        </div>
        <!-- end col -->
      </div>

      @endif
    </div>




  </div>
</section>
</form>
<!-- end contact -->


  <!-- Footer -->
  <footer class="footer minimal bg-dark" style="background-color:#1C3F39;">
    <div class="container">
      <div class="row">
        <div>
          {{-- <h2>Famous Investment</h2> --}}

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
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js" ></script>
<script>
	 @if(session('success'))
		
     
Toastify({ text: '{{session('success')}}', duration: 3000,

style: { background: "linear-gradient(to right, #bfa67a, #bfa67a)" }

}).showToast();

        @endif
</script>
	
</body>

</html>
