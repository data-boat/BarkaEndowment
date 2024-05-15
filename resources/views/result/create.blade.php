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


        <br />
        <h3 class="title"> {{ __('ResultPage') }} </h3>

        <br />

        <table class="tabl">
            @foreach($result as $result)

            <tr>
                <th>{{ __('ResultName') }}</th>
                <th>{{ __('Result') }}</th>

            </tr>

            <tr>
                <td>
                    {{$result->firstname}} ( {{$result->firstnamear}} )
                </td>
                <td>{{$result->first}}</td>
            </tr>
            <tr>
                <td>
                    {{$result->secountname}} ( {{$result->secountnamear}} )
                </td>
                <td>{{$result->secound}}</td>
            </tr>
            <tr>
                <td>
                    {{$result->thairdname}} ( {{$result->thairdnamear}} )
                </td>
                <td>{{$result->thaird}}</td>
            </tr>

        </table>
        </br>
        <button class="btn"><a href="result/edit/{{$result->id}}"><i class='fas fa-edit'>{{ __('Edit') }}</i></a></button>
        @endforeach
    </main>
</body>


</html>