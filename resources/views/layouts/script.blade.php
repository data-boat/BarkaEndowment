
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
   
  $("#submit-code").click(function() {
    $("div.output").html($(".support-answer-textarea").val().replace(/\n/g, "<br>"));
  });

  

        

  

</script>
