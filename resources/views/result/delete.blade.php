<h2>Delete Post</h2>

<form action="/result/destroy/{{$result->id}}" method="POST" class="form-horizontal custm-form" role="form" enctype="multipart/form-data">
    @csrf

    <label>Are you sure? <br> you want to delete this work</label>
    <br>
    <br>
    <button type="submit">Delete Post</button>
    @csrf()
</form>