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
    <section class="section-wrap pt-80 " id="About-Us">
      <div class="container">
        <div class="row mt-minus-30">


          <div class="col-sm-6">
            <div class="about-description mt-30 ">
              <h4 class=" text-center bottom-line">{{ __('AboutUs') }}</h4>
                {{-- <img src="webcss/img/Maskgroup.png" /> --}}
              
              <p style="text-align: justify; color:#7a7a7a" >
                @if (\Session::get('language') == 'en' )
                {{$about->aboutdescription}}
                @else
                {{$about->aboutdescriptionar}}
                @endif
              </p>
            </div>
            
          </div>
          
          <div class="col-sm-6">
            <img class="Rectangle49" style="width: 474px; height: 328px; left: 75px; position: relative; background: linear-gradient(0deg, #56CACD 0%, #56CACD 100%); border-radius: 10px" src="webcss/img/Rect.png">
            <img class="Rectangle50" style="width: 241px; height: 179px; top: -99px; position: relative; background: linear-gradient(0deg, #0B826F 0%, #0B826F 100%); border-radius: 10px" src="webcss/img/Rectt.png">
    
          </div>
        </div>
      </div>
  </div>
  </section>



  <section class="section-wrap process " style="padding-bottom: 134px; background-image: url(webcss/img/Maskgroup.png)">
    <div class="container" id="Sectors">
      <div class="row heading">
        <div class="col-md-6 col-md-offset-3">
          <h2 class="text-center bottom-line">{{ __('oursectors') }}</h2>

        </div>
      </div>

      <div class="row" style="display: flex; justify-content: center;">
        @foreach($service as $service)
        <div class="col-md-4 service-item" >
          <div class="service-item-box icon-effect-1 icon-effect-1a text-center">
            
              <img style="padding-bottom: 15px" src="{{url('../storage/services/'.$service->icon)}}" />
           
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

  <section style="    padding: 40px;
   background: #e5e5e5;" id="Companies">
    <div class="container">
      <div class="row heading">


  


        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
          <h3 class="text-center bottom-line">
            {{ __('map') }}
          </h3>


        </div>

        
      </div>
 

        <div style=" width: 1300px; height: 360px;">



          <div class="Goals"
          style="width: 480px; top: 1721px; height: 90px; left: 740px; border-radius: 68px; position: absolute; box-shadow: 4.531680107116699px 9.063360214233398px 9.063360214233398px rgba(0, 0, 0, 0.25)">
          <div class="Rectangle65"
            style="width: 480px; height: 90px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 72.51px">
          </div>
          <div class="Group14" style="width: 114.57px; height: 139px; left: 620.84px; top: 1.81px; position: absolute">
            <div class="Ellipse12"
              style="width: 60px; height: 60px; left: -210px; top: 13px; position: absolute; background: #0B826F; border-radius: 9999px">
            </div>
            <div
              style="left: -186px; top: -25px; position: absolute; text-align: right; color: rgb(252, 251, 251); font-size: 30px; font-family: Pragati Narrow; font-weight: 700; text-transform: capitalize; line-height: 138.95px; word-wrap: break-word">
              1</div>
          </div>
          <div
            style="width: 560.12px; height: 90.63px; left: -156px; top: 26.28px; position: absolute; text-align: right; color: black; font-size: 15px; font-family: Poppins; font-weight: 400; text-transform: capitalize; line-height: 23px; word-wrap: break-word">
            تمكين المجتمع بكافة أطيافه من المساهمة في انشاء المشاريع الوقفية والإشراف </br> عليها وإدارتها 
            وتنميتها بالطرق المثلى
            لتكون صدقة جارية للواقف</div>
        </div>
        <div class="Goals"
          style="width: 480px; height: 90px;     top: 1721px;
          left: 148px;  border-radius: 68px; position: absolute; box-shadow: 4.531680107116699px 9.063360214233398px 9.063360214233398px rgba(0, 0, 0, 0.25)">
          <div class="Rectangle65"
            style="width: 480px; height: 90px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 72.51px">
          </div>
          <div class="Group14" style="width: 114.57px; height: 139px; left: 620.84px; top: 1.81px; position: absolute">
            <div class="Ellipse12"
              style="width: 60px; height: 60px; left: -209.12px;
              top: 12.91px; position: absolute; background: #0B826F; border-radius: 9999px">
            </div>
            <div
              style="left: -190px;
              top: -27px; position: absolute; text-align: right; color: rgb(248, 246, 246); font-size: 40px; font-family: Pragati Narrow; font-weight: 700; text-transform: capitalize; line-height: 138.95px; word-wrap: break-word">
              2</div>
          </div>
          <div
            style="width: 560.12px; height: 90.63px; left: -164.12px;
            top: 17.28px; position: absolute; text-align: right; color: black; font-size: 15pxpx; font-family: Poppins; font-weight: 500; text-transform: capitalize; line-height: 23pxpx; word-wrap: break-word">
            إحياء سنة الوقف وتجديد الدعوة له من خلال مشروعات ذات أبعاد تنموية</br> وبطرق استثمارية مبتكرة.</div>
        </div>
        <div class="Goals"
          style="width: 480px; height: 90px; left: 60px;border-radius: 68px; top: 1880px; position: absolute; box-shadow: 4.531680107116699px 9.063360214233398px 9.063360214233398px rgba(0, 0, 0, 0.25)">
          <div class="Rectangle65"
            style="width: 480px; height: 90px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 72.51px">
          </div>
          <div class="Group14" style="width: 40px; height: 40px; left: 620.84px; top: 1.81px; position: absolute">
            <div class="Ellipse12"
              style="width: 60px; height: 60px; left: -211px;
              top: 13.28px;; position: absolute; background: #0B826F; border-radius: 9999px">
            </div>
            <div
              style="left: -193px;
              top: -26px; position: absolute; text-align: right; color: rgb(252, 251, 251); font-size: 40px; font-family: Pragati Narrow; font-weight: 700; text-transform: capitalize; line-height: 138.95px; word-wrap: break-word">
              4</div>
          </div>
          <div
            style="width: 560.12px; height: 90.63px; left: -158px;
            top: 13.28px; position: absolute; text-align: right; color: black; font-size: 15px; font-family: Poppins; font-weight: 500; text-transform: capitalize; line-height: 23px; word-wrap: break-word">
            إدارة واستثمار وإنشاء الأصول الوقفية وتطويرها وتجديد دورها التنموي للانتقال </br>بها من فكرة الإنفاق المباشر إلى ايجاد
            المصدر المالي المستدام الداعم لمختلف </div>
        </div>
        <div class="Goals"
          style="width: 480px; height: 90px; left: 680px; border-radius: 68px; top: 1880px; position: absolute; box-shadow: 4.531680107116699px 9.063360214233398px 9.063360214233398px rgba(0, 0, 0, 0.25)">
          <div class="Rectangle65"
            style="width: 480px; height: 90px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 72.51px">
          </div>
          <div class="Group14" style="width: 114.57px; height: 139px; left: 620.84px; top: 1.81px; position: absolute">
            <div class="Ellipse12"
              style="width: 60px; height: 60px; left: -213px;
              top: 14px; position: absolute; background: #0B826F; border-radius: 9999px">
            </div>
            <div
              style="left: -190px; top: -24px; position: absolute; text-align: right; color: rgb(254, 252, 252); font-size: 40.58px; font-family: Pragati Narrow; font-weight: 700; text-transform: capitalize; line-height: 138.95px; word-wrap: break-word">
              3</div>
          </div>
          <div
            style="width: 560.12px; height: 90.63px; left: -163.12px; top: 26.28px; position: absolute; text-align: right; color: black; font-size: 15px; font-family: Poppins; font-weight: 500; text-transform: capitalize; line-height: 23px; word-wrap: break-word">
            إعادة تنظيم الأوقاف القديمة بالولاية وتحديثها والانتقال بها من الإدارة الفردية </br>إلى العمل المؤسسي المتكامل.</div>
        </div>
  

      


          
  




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
            <p style="color: #FFBC00;">
              Sun-Thur: 9:00 – 6:00

            </p>
          </div>



          <div class="contact-item">
            <div class="contact-icon">
              <i class="icon icon-Pointer"></i>
            </div>
            <h6 style="color: #fcfcfa;">{{ __('address') }}</h6>
            <p style="color: #FFBC00;">
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
          {{-- <h2>famous Investment</h2> --}}

          <div class="socials footer-socials">
            <a href="https://databoat.om/"><i class="fa fa-twitter"></i></a>
            <a href="https://databoat.om/"><i class="fa fa-instagram"></i></a>
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
