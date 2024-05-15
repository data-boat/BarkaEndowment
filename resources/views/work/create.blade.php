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

        <a class="twitter-timeline" href="https://twitter.com/Databoat_OM?ref_src=twsrc%5Etfw">Tweets by DataBoat</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        <div>
            <form action="/work/store" method="POST" class="form-horizontal custm-form" role="form" enctype="multipart/form-data">
                <!-- Add CSRF Token -->
                @csrf
                <div class=" form-group">
                    <label>Name</label><br />
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <br />
                <div class="form-group">
                    <input type="file" name="file" id="file" required>
                </div>
                <br />
                <button type="submit">Submit</button>
                @csrf()
            </form>

        </div>
        <br /><br />
        <style>
            table,
            td,
            th {
                border: 1px solid;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }
        </style>
        <table>
            <tr>
                <th>title</th>
                <th>img</th>
            </tr>
            @foreach($works as $work_page)
            <tr>
                <td>{{$work_page->name}}</td>
                <td><img style="width: 10%; height:10%;" src="storage/work/{{$work_page->file_path}}"></td>
                <td>
                    <a href="work/delete/{{$work_page->id}}">delete</a></br>
                    <br>
                    <a href="work/edit/{{$work_page->id}}">edit</button></a>
                </td>
            </tr>

            @endforeach
        </table>
    </div>
</body>

</html>