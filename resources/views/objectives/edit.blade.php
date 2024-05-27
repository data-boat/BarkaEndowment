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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


</head>

<body>
    
    @include('layouts.sidebar')
    <!-- Page Heading -->
    <header>
        @include('layouts.header')
    </header>
    <!-- Page Content -->
    <main>
       <form action="{{ route('objectives.update', $objective->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label class="form-group title"for="title_en">Title (English):</label>
            <textarea class="edit form-group title"type="text" id="title_en" name="title_en" required>{{ $objective->title_en }}</textarea>
        </div>
        <div>
            <label class="form-group title"for="title_ar">Title (Arabic):</label>
            <textarea class="edit form-group title"type="text" id="title_ar" name="title_ar" required>{{ $objective->title_ar }}</textarea>
        </div>
        <button class="btnedit submit-code"type="submit">Save</button>
    </form>
    <a class="form-group title"href="{{ route('objectives.index') }}">Back to List</a>
    </main>
</body>


</html>