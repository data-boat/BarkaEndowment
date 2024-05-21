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
        <h2 style="margin-left: 36%">{{$objective->tital}}</h2>

          
      
        <h2 style="margin-left: 36%">{{$services->titalar}}</h2>
        
        <button class="btn"><a href="/objectives">{{ __('Back') }}</a></button>

        <br /> <br />
        <br />



    </main>
</body>


</html>