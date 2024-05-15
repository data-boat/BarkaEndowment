<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <h2 style="margin-left: 36%">{{$services->tital}}</h2>

        <div class="edit">
            <img style="width: 50%; height:50%;  display: block;
          margin-left: auto;   margin-right: auto;
" src="{{url('storage/services/'.$services->file_path)}}" />
            <div class="container">
                <h4>{{$services->description}}</h4>
                <p>{{$services->By}}</p>
                <p>{{$services->Date}}</p>
                <br />
                <p>{!! nl2br(e($services->DesHeader)) !!}</p>
                <br />
                <p>{!! nl2br(e($services->DesBody)) !!}</p>
                <br />
                <p>{!! nl2br(e($services->DesFooter)) !!}</p>
            </div>
        </div>
        <br /><br />
        <h2 style="margin-left: 36%">{{$services->titalar}}</h2>
        <div class="edit">
            <img style="width: 50%; height:50%; ; display: block;
          margin-left: auto; 
         margin-right: auto; " src="{{url('storage/services/'.$services->file_path)}}" />
            <div class="container">
                <h4>{!! nl2br(e($services->descriptionar)) !!}</h4>
                <p>{!! nl2br(e($services->Byar)) !!}</p>
                <p>{!! nl2br(e($services->Date)) !!}</p>
                <br />
                <p>{!! nl2br(e($services->DesHeaderar)) !!}</p>
                <br />
                <p>{!! nl2br(e($services->DesBodyar)) !!}</p>
                <br />
                <p>{!! nl2br(e($services->DesFooterar)) !!}</p>
            </div>
        </div>
        <br />
        <button class="btn"><a href="/services">{{ __('Back') }}</a></button>

        <br /> <br />
        <br />



    </main>
</body>


</html>