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
       

        <h3 class="title">Create Objective</h3>
    <form action="{{ route('objectives.store') }}" method="POST">
        @csrf
        <div class="form-group title">
            <label for="title_en">Title (English):</label>
            <input type="text" id="title_en" name="title_en" required>
        </div>
        <div class="form-group title">
            <label for="title_ar">Title (Arabic):</label>
            <input type="text" id="title_ar" name="title_ar" required>
        </div class="form-group title">
        <button class="form-group title"type="submit">Save</button>
    </form>
    <a class="form-group title"href="/objectives">Back to List</a>
        </br></br>

    </main>
</body>


</html>