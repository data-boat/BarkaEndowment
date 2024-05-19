<h2>Delete Post</h2>

<form action="/services/destroy/{{$services->id}}" method="POST" class="form-horizontal custm-form" role="form" enctype="multipart/form-data">
    @csrf

    <label>Are you sure? <br> you want to delete - {{{$services->tital}}} - works</label>
    <br>
    <br>
    <button type="submit">Delete Post</button>
    @csrf()
</form>