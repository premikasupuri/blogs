<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body class="bg-danger-subtle">
<section class="container bg-info-subtle p-5 mx-auto my-5">
    @if($alert)
    <div class="alert alert-success" role="alert">
  {{$alert}}
</div>
    @endif
    <h1>post of {{$post->id}}</h1>
    <hr>
    <div>Title is <span class="text-primary">{{$post->title}}</span></div>
    <div>Post is <span class="text-primary">{{$post->body}}</span></div>
    <hr>
    <a class="btn btn-primary" href="/index">Posts</a>
</section>
</body>
</html>