<!DOCTYPE html>
<html lang="en">
    <!-- Navigation -->


@include('layouts.secondnav')
<!-- end navbar -->

<body data-spy="scroll" data-offset="60" data-target=".navbar-fixed-top">




  <div class="main-wrapper-onepage main oh">
    <!-- Blog Single -->
    <section class="section-wrap pb-100 blog-single">
      <div class="container relative">
        <div class="row">
          <!-- content -->
          <div class="col-sm-12 blog-content">
            <!-- standard post -->
            <div class="entry-item">
              <div class="entry-img">
                <img src="{{url('../storage/services/'.$services->file_path)}}" />
              </div>

              <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                  <div class="entry-title">
                    <h2>
                      @if (\Session::get('language') == 'en' )
                      {{$services->tital}}
                      @else
                      {{$services->titalar}}
                      @endif
                    </h2>
                  </div>
             

                  <div>
                    <div>
                      <p>

                        @if (\Session::get('language') == 'en' )
                        {!! nl2br(e($services->DesHeader)) !!}
                        @else
                        {!! nl2br(e($services->DesHeaderar)) !!}
                        @endif
                      </p>
                      <br />

                      <div >
                        <p>
                          @if (\Session::get('language') == 'en' )
                          {!! nl2br(e($services->DesBody)) !!}
                          @else
                          {!! nl2br(e($services->DesBodyar)) !!}
                          @endif
                        </p>
                      </div>
                      <br />
                      <p>

                        @if (\Session::get('language') == 'en' )
                        {!! nl2br(e($services->DesFooter)) !!} @else
                        {!! nl2br(e($services->DesFooterar)) !!} @endif
                      </p>
                    </div>
                  </div>
                  <!-- end entry -->
                </div>
              </div>
              <!-- end row -->
            </div>
            <!-- end entry item -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end blog single -->

    <!-- Footer -->
    <footer class="footer minimal bg-dark" style="background-image: url(../../webcss/img/pattern.png)">
      <div class="container">
        <div class="row">
          <div>
            <h2>Barka Endowment Association</h2>

            <div class="socials footer-socials">
              <a href="https://twitter.com/famousinv"><i class="fa fa-twitter"></i></a>
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

@include('layouts.script')


</body>


</html>