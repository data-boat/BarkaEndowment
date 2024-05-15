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
    <!-- Page Heading -->
    <header>
        @include('layouts.header')
    </header>
    <!-- Page Content -->
    <main>
        <div>

            <form action="/result/update/{{$result->id}}" method="POST" role="form" enctype="multipart/form-data">

                <!-- Add CSRF Token -->
                @csrf
                <div style="padding-top :30px;">

                    <div>
                        <div>
                            <div>
                                <label class="labell required">{{ __('ResultFisrtName') }}</label><br />
                                <input class="edit" type="text" name="firstname" value="{{$result->firstname}}" required>
                            </div>
                        </div> <br />
                        <div>
                            <div>
                                <label class="labell required">{{ __('ResultFisrtNamear') }}</label><br />
                                <input class="edit" type="text" name="firstnamear" value="{{$result->firstnamear}}" required>
                            </div>
                        </div> <br />
                        <div>
                            <div>
                                <label class="labell required">{{ __('Statistc1') }}</label><br />
                                <input class="edit" type="number" name="first" value="{{$result->first}}">
                            </div>
                        </div><br />
                        <div>
                            <div>
                                <label class="labell required">{{ __('ResultSecName') }}</label><br />
                                <input class="edit" type="text" name="secountname" value="{{$result->secountname}}" required>
                            </div>
                        </div><br />
                        <div>
                            <div>
                                <label class="labell required">{{ __('ResultSecNamear') }}</label><br />
                                <input class="edit" type="text" name="secountnamear" value="{{$result->secountnamear}}" required>
                            </div>
                        </div><br />
                        <div>
                            <div>
                                <label class="labell required">{{ __('Statistc2') }}</label><br />
                                <input class="edit" type="number" name="secound" value="{{$result->secound}}">
                            </div>
                        </div><br />
                        <div>
                            <div>
                                <label class="labell required">{{ __('ResultThrName') }}</label><br />
                                <input class="edit" type="text" name="thairdname" value="{{$result->thairdname}}" required>
                            </div>
                        </div><br />
                        <div>
                            <div>
                                <label class="labell required">{{ __('ResultThrNamear') }}</label><br />
                                <input class="edit" type="text" name="thairdnamear" value="{{$result->thairdnamear}}" required>
                            </div>
                        </div><br />
                        <div>
                            <div>
                                <label class="labell required">{{ __('Statistc3') }}</label><br />
                                <input class="edit" type="number" name="thaird" value="{{$result->thaird}}">
                            </div>
                        </div>

                    </div>
                    <br />
                    <div class="btndiv">

<div class="btndiv">
                <button class="btnedit" type="submit">{{ __('submit') }}</button>&nbsp;&nbsp;&nbsp;<button class="btnedit"><a href="/result">{{ __('Back') }}</a></button>
                </div><br><br><br>
                </form>

        </div>
    </main>
</body>

</html>