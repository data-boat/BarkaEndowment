<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Css -->
    <link rel="stylesheet" href="assets/css/cms.css" />
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
            @csrf

        </div>
        <br />
        <h3 class="title">{{ __('sectorpage') }} </h3>

        <br />

        <table class="tabl">
            <tr>
                <th>{{ __('sectors') }}</th>
            </tr>
            @foreach($services as $service)
            <tr>
                <td>{{$service->tital}} ( {{$service->titalar}} )</td>
                <td>
                    <a href="services/details/{{$service->id}}"><i class='fas fa-info-circle'>details</i></a>
                    <a href="services/edit/{{$service->id}}"><i class='fas fa-edit'>edit</i></a>
                </td>


            </tr>

            @endforeach
        </table>
        </br></br>

    </main>
</body>


</html>