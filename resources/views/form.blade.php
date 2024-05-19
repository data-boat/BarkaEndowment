<!DOCTYPE html>
<html lang="en">
    <head>
                   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css"  />  
                   <style>
                   .select{
    -webkit-appearance: listbox !important;}
    </style>
    </head>
<!-- Navigation -->
@include('layouts.secondnav')
<!-- end navbar -->

<body data-spy="scroll" data-offset="60" data-target=".navbar-fixed-top">
    <!-- Contact -->
    <section class="section-form" >
        <div class="container">
            <div class="row heading">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="text-center bottom-line">{{ __('investmentForm') }}</h2>
                    <p >
                        {{ __('header') }}
                    </p>
                </div>
            </div>
            <div>
                <div class="row">
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
    
                    <div class="">
                        <form action="/storejoinus" method="POST">
                            @csrf
                            <div>
                                <div>
                                    
                                    <h5>
                                        {{ __('areYou') }} 
                                    </h5>
									<div class="form-label-contact">
                                    <select class="select" name="q1" id="name" >
                                        <option  value="{{ __('invester') }}">{{ __('invester') }}</option>
                                        <option  value="{{ __('Entrepreneur') }}">{{ __('Entrepreneur') }}</option>
                                    </select>
									</div>
                                    </br>
                                    <h5>
                                        {{ __('sector') }} 
                                    </h5>
									<div class="form-label-contact">
                                    <select class="select"name="sector" id="name">
                                        <option value="{{ __('Agriculture') }}">{{ __('Agriculture') }}</option>
                                        <option value="{{ __('Industrial') }}">{{ __('Industrial') }}</option>
                                        <option value="{{ __('personal') }}">{{ __('personal') }}</option>
                                        <option value="{{ __('personal') }}">{{ __('personal') }}</option>
                                    </select>
									</div>
                                </div>
                                <div class="col-md-6 contact-email">
                                </div>
                            </div>
                            </br>
                            <h5 >
                                {{ __('personal') }}
                            </h5>
                            <input  name="name" id="name" type="text" placeholder="{{ __('name') }}" required/>
                            <input  name="mail" id="mail" type="email" placeholder="{{ __('invesrotemail') }}" required/>
                            <input  name="phone" type="text" placeholder="{{ __('number') }}" />
                            <textarea  name="comment" id="comment" placeholder="{{ __('comment') }}" required ></textarea>
                            <button class="btn btn-lg btn-color btn-submit" type="submit">{{ __('SendMessage') }}</button>
                            @csrf()
                        </form>
                    </div>
                    <!-- end col -->
                </div>
            </div>
    </section>
    <!-- Footer -->
    <footer class="footer minimal bg-dark" style="background-image: url(webcss/img/pattern.png)">
        <div class="container">
            <div class="row">
                <div>
                    <h2>Barka Endowment Association</h2>

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
    <!--script type="text/javascript" src="webcss/js/jquery.min.js"></script>
    <script type="text/javascript" src="webcss/js/bootstrap.min.js"></script-->
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