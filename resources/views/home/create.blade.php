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
    @if ($errors->any())
    <div class="alert alert-danger">
      <strong style="color:red">Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    @if(session('success'))

    <strong>{{session('success')}}</strong>
    @endif
    <div>
      <h3 class="title">{{ __('HomeSectionContent') }}</h3><br />

      @csrf
      <!-- <button style=" padding-top: 20px;margin-Right: 40%; background-color: #b5a55e;">hiiiii</button> -->

      <div>


        <table class="tabl">
          @foreach($home as $home)

          <tr>
            <th>{{ __('Title') }}</th>
            <th>{{ __('subtitle') }}</th>

          </tr>

          <tr>
            <td>
              {{$home->hometital}}
            </td>
            <td>{{$home->homedescription}}</td>
          </tr>
          <tr>
            <td>
              {{$home->hometitalar}}
            </td>
            <td>{{$home->homedescriptionar}}</td>
          </tr>


        </table></br>

      </div>
      <button class="btn"><a href="home/edit/{{$home->id}}"><i class='fas fa-edit'>{{ __('Edit') }}</i></a></button>
      @endforeach
  </main>
</body>


</html>