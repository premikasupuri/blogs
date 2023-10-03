<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">



</head>
<body class="bg-danger-subtle">
<section class="container bg-info-subtle p-5 mx-auto my-5">
<h1>Updated post
</h1>
<form action="/save/{{$post->id}}" method="post">
    @csrf
<div class="form-floating">
  <textarea class="form-control" name="title" value="{{$post->title}}"></textarea>
  <label for="floatingTextarea">Title</label>
</div>
<br>
<div class="form-floating">
  <textarea class="form-control" name="body" style="height: 100px" value="{{$post->body}}"></textarea>
  <label for="floatingTextarea2">Post</label>
</div>
<br>
    <div>
    <button type="Login" class="btn btn-success">Save</button>
    <a href="/dashboard">Dashboard</a>
    </div>
</form>
</section>
</body>
</html>