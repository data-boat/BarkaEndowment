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

            <form action="/Country/store" method="POST" class="form-horizontal custm-form" role="form" enctype="multipart/form-data">
                <!-- Add CSRF Token -->
                @csrf
                <div class="form-group">
                    <label>Name</label><br />
                    <input type="text" class="form-control" name="CountryName" required>
                </div>

                <br />
                <div class="form-group">
                    <input type="file" name="file" required>
                </div>
                <br />
                <button type="submit">Submit</button>
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
            @foreach($Country as $Country)
            <tr>
                <td>{{$Country->CountryName}}</td>
                <td><img style="width: 10%; height:10%;" src="storage/Country/{{$Country->CountryFlag}}"></td>
                <td>
                    <a href="Countrys/delete/{{$Country->id}}">delete</a></br>
                    <br>
                    <a href="Countrys/edit/{{$Country->id}}">edit</button></a>
                </td>


            </tr>

            @endforeach
        </table>

    </div>
</body>

</html>