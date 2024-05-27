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
      <table class="tabl">
        <tr>
                   <h1 class="form-group title">Objectives</h1>
                   <a class="form-group title"href="{{ route('objectives.create') }}">Create New Objective</a>
  
        </tr>
        @foreach ($objectives as $objective)
        <tr>
            <td> {{ $objective->title_ar }}</td>
            <td>{{ $objective->title_en }} </td>

            <td>
                <a href="{{ route('objectives.edit', $objective->id) }}">Edit</a>
              </td>
            <td>
              <form action="{{ route('objectives.destroy', $objective->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
          </td>
  
        </tr>
  
        @endforeach
    </table>
  
    </section>


</div>
  </main>
</body>


</html>