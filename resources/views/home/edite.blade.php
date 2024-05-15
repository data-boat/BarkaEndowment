<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Css -->
    <!-- <link rel="stylesheet" href="../../../assets/css/cms.css" /> -->

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

        <div style="padding-top :15px;  margin-left:26% ; width:70%">
            <form action="/home/update/{{$pages_home->id}}" method="POST" role="form" enctype="multipart/form-data">
                <!-- Add CSRF Token -->
                @csrf

                <div>
                    <label class="labell required">{{ __('Titleen') }}</label><br />
                    <input class="edit" type="text" name="hometital" value="{{$pages_home->hometital}}" required>
                </div>
                <br /><br />
                <div>
                    <label class="labell required">{{ __('subtitleen') }}</label><br />
                    <textarea class="edit" id="story" name="homedescription" rows="3" required>@isset($pages_home){{$pages_home->homedescription}}@else @endIf</textarea>
                </div>
                <br />
                <div>
                    <label class="labell required">{{ __('Titlear') }}</label><br />
                    <input class="edit" type="text" name="hometitalar" value="{{$pages_home->hometitalar}}" required>
                </div>
                <br /><br />
                <div>
                    <label class="labell required">{{ __('subtitlear') }}</label><br />
                    <textarea class="edit" id="story" name="homedescriptionar" rows="3" required>@isset($pages_home){{$pages_home->homedescriptionar}}@else @endIf</textarea>
                </div>
                <br />
                <div class="btndiv">
                <button class="btnedit" type="submit">{{ __('submit') }}</button>&nbsp;&nbsp;&nbsp;<button class="btnedit"><a href="/home">{{ __('Back') }}</a></button>
                </div><br><br><br>
            </form>

        </div>
    </main>
</body>


</html>