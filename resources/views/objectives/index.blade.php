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
</head>

<body>
  @include('layouts.sidebar')


  <header>
    @include('layouts.header')
  </header>

  <main>

  <div class="main-wrapper-onepage main oh">
    <!-- Blog Single -->
    <section class="section-wrap pb-100 blog-single">
      <div class="container relative">

            <!-- standard post -->
        <h1 class="form-group title">Objectives</h1>
    <a class="form-group title"href="{{ route('objectives.create') }}">Create New Objective</a>
    <ul class="form-group title">
        @foreach ($objectives as $objective)
            <li>
                {{ $objective->title_en }} / {{ $objective->title_ar }}
                <a href="{{ route('objectives.edit', $objective->id) }}">Edit</a>
                <form action="{{ route('objectives.destroy', $objective->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
            <!-- end entry item -->
          </div>

      <!-- end container -->
    </section>
    <!-- end blog single -->
</div>
  </main>
</body>


</html>