<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic" rel="stylesheet" />

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

        <h2 style=" margin-left:50% ; padding-top:15px; width:20%">{{ __('Contectsus-page') }}</h2><br />
        <table class="tabl">
            <tr>
                <th>{{ __('co-name') }}</th>
                <th>{{ __('co-mail') }}</th>
                <th>{{ __('co-subject') }}</th>
                <th>{{ __('co-comment') }}</th>
            </tr>
            @foreach($Web as $web)
            <tr>
                <td>{{$web->name}}</td>
                <td>{{$web->mail}}</td>
                <td>{{$web->subject}}</td>
                <td>{{$web->comment}}</td>

            </tr>
            @endforeach
        </table>
    </br>    </br>
</br>

    </main>
</body>
<style>
    label,
    th,
    td,
    a {
        color: black;
    }
</style>

</html>