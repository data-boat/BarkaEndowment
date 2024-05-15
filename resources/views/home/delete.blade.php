<html>

<head>
</head>
@include('layouts.head')

<body>
@include('layouts.sidebar')
<header>
        @include('layouts.header')
    </header>
    <div style="padding-top :20px; margin-left:25%">

<h2>Delete Post</h2>

<form action="/home/destroy/{{$pages_home->id}}" method="POST" class="form-horizontal custm-form" role="form" enctype="multipart/form-data">
    @csrf

    <label>Are you sure? <br> you want to delete - {{{$pages_home->hometital}}} - works</label>
    <br>
    <br>
    <button _ngcontent-hnq-c108="" type="submit" style="margin-left:40%" id="btnUpload"  fdprocessedid="47smt">Submit</button>
    @csrf()
</form>