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
            <form action="/Company/store" method="POST" class="form-horizontal custm-form" role="form" enctype="multipart/form-data">
                <!-- Add CSRF Token -->
                @csrf
                <div class="form-group">
                    <label>Author Name:</label>
                    <select type="text" name="country_id">
                        @foreach($Country as $Country)
                        <option value="{{$Country->id}}">{{$Country->CountryName}}</option>
                        @endforeach
                    </select>
                </div>
                <br><br>
                <div class="form-group">
                    <label>CompanyName</label><br />
                    <input type="text" class="form-control" name="CompanyName" required>
                </div>

                <br />
                <div class="form-group">
                    <label>CompanyLogo</label><br />
                    <input type="file" name="file" required>
                </div>
                <br />

                <div class="form-group">
                    <label>CompanyDesHeader</label><br />
                    <input type="text" class="form-control" name="CompanyDesHeader" required>
                </div>

                <br />
                <div class="form-group">
                    <label>CompanyDesBody</label><br />
                    <input type="text" class="form-control" name="CompanyDesBody" required>
                </div>

                <br />
                <div class="form-group">
                    <label>CompanyDesFooter</label><br />
                    <input type="text" class="form-control" name="CompanyDesFooter" required>
                </div>

                <br />
                <div class="form-group">
                    <label>CompanyLogo</label><br />
                    <input type="file" name="fileimage" required>
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
                <th>Country_id</th>
                <th>CompanyName</th>
                <th>CompanyLogo</th>
                <th>CompanyDesHeader</th>
                <th>CompanyDesBody</th>
                <th>CompanyDesFooter</th>
                <th>CompanyDesFooter</th>
            </tr>

            @foreach($Company as $Company)
            <tr>
                <td>{{$Company->country_id}}</td>
                <td>{{$Company->CompanyName}}</td>
                <td><img style="width: 10%; height:10%;" src="storage/Company/{{$Company->CompanyLogo}}"></td>
                <td>{{$Company->CompanyDesHeader}}</td>
                <td>{{$Company->CompanyDesBody}}</td>
                <td>{{$Company->CompanyDesFooter}}</td>
                <td><img style="width: 10%; height:10%;" src="storage/Company/{{$Company->CompanyImage}}"></td>
                <td>
                    <a href="Companys/delete/{{$Company->id}}">delete</a></br>
                    <br>
                    <a href="Companys/edit/{{$Company->id}}">edit</button></a>
                </td>


            </tr>

            @endforeach
        </table>

    </div>
</body>

</html>