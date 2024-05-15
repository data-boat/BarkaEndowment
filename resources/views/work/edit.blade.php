<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic" rel="stylesheet" />

    <!-- Css -->
    <link rel="stylesheet" href="css/cms.css" />
    @include('layouts.header')
</head>

<body>
    @include('layouts.sidebar')
    <div style="margin-left:20%">
        <div>
            <form action="/work/update/{{$work_page->id}}" method="POST" class="form-horizontal custm-form" role="form" enctype="multipart/form-data">
                <!-- Add CSRF Token -->
                @csrf
                <div class="form-group">
                    <label>Name</label><br />
                    <input type="text" class="form-control" name="name" value="{{$work_page->name}}" required>
                </div>
                <br />
                <img style="width: 10%; height:10%;" src="storage/work/{{$work_page->file_path}}">
                <br />
                <div class=" form-group">
                    <input type="file" name="file" value="{{$work_page->file_path}}">
                </div>
                <br />
                <button type="submit">Submit</button>
            </form>

        </div>
    </div>
</body>

</html>