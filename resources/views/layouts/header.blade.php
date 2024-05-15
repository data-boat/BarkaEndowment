<!-- head -->
<div class="header">
    <button class="lang btnn" value="{{ \Session::get('language') == 'en' ? 'ar' : 'en' }}">{{ \Session::get('language') =='en'?'العربية':'English'}}</button>

</div>

<!-- script -->
<script>
    $(document).ready(function() {
        $('.lang').click(function() {
            var lang = $(this).val();
            window.location.href = "{{ route('changeLanguage') }}?language=" + lang;
        });
    });
</script>