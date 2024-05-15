<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Css -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.head')
</head>

<body>
    @include('layouts.sidebar')
    <!-- Page Heading -->
    <header>
        @include('layouts.header')
    </header>
    <!-- Page Content -->
    <main>
        <div>
            <form action="/about/update/{{$about->id}}" method="POST" role="form" enctype="multipart/form-data">
                <!-- Add CSRF Token -->
                @csrf

                <div style="padding-top :15px; margin-left:22% ;">
                    <label class="labell required">{{ __('AboutUsen') }}</label><br />
                    <textarea class="edit" id="story" name="aboutdescription" rows="4" maxlength="1000" required>@isset($about){{$about->aboutdescription}}@else @endIf</textarea>
                    <br /><label class="labell required">{{ __('AboutUsar') }}</label><br />
                    <textarea class="edit" id="story" name="aboutdescriptionar" rows="4" maxlength="1000" required>@isset($about){{$about->aboutdescriptionar}}@else @endIf</textarea>

                </div>
                <br />
                <div class="btndiv">
                    <button class="btnedit" type="submit">{{ __('submit') }}</button>&nbsp;&nbsp;&nbsp;<button class="btnedit"><a href="/about">{{ __('Back') }}</a></button>
                </div><br><br><br>
            </form>

        </div>
    </main>
</body>


</html>