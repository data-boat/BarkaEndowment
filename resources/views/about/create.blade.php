<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="assets/css/cms.css" /> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.head')
</head>

<body>
    @include('layouts.sidebar')
    <header>
        @include('layouts.header')
    </header>
    <main>


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
        @if(session('success'))
        <strong style="color:green;">{{session('success')}}</strong>
        @endif
        <div>
            <h3 class="title">{{ __('AboutusPage') }}</h3><br />

            @csrf
            @foreach($about as $about)

            <table class="tabl">
                <tr>
                    <th>{{ __('AboutUs') }}</th>
                </tr>

                <tr>
                    <td>
                        {{$about->aboutdescription}}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{$about->aboutdescriptionar}}
                    </td>
                </tr>


            </table></br>

            <button class="btn"><a href="about/edit/{{$about->id}}"><i class='fas fa-edit'>{{ __('Edit') }}</i></a></button>
            @endforeach
    </main>





</body>


</html>