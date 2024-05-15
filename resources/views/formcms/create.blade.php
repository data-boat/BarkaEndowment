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

        <h2 style=" margin-left:50% ; padding-top:15px; width:20%">{{ __('investmentForm') }}</h2><br />
        <table class="tabl">
            <tr>
                <th>{{ __('areYou') }}</th>
                <th>{{ __('sector') }}</th>
                <th>{{ __('name') }}</th>
                <th>{{ __('invesrotemail') }}</th>
                <th>{{ __('number') }}</th>
                <th>{{ __('comment') }}</th>
            </tr>
            @foreach($form as $form)
            <tr>
                <td>{{$form->q1}}</td>
                <td>{{$form->sector}}</td>
                <td>{{$form->name}}</td>
                <td>{{$form->mail}}</td>
                <td>{{$form->phone}}</td>
                <td>{{$form->comment}}</td>

            </tr>
            @endforeach
        </table>
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