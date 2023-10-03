<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">



</head>
<body class="bg-danger-subtle">
<section class="container bg-info-subtle p-5 mx-auto my-5">
<h1>Posts</h1>
<hr>


<table class="table table-striped">

  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Created</th>
      <th scope="col">Updated</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($posts as $d)

    <tr>
     <th scope="row">
        <a href="../show/{{$d->id}}" >
      {{$d->id}}</a></th>
      <td>{{$d->title}}</td>
      <td>{{$d->body}}</td>
      <td>{{$d->created_at}}</td>
      <td>{{$d->updated_at}}</td>
      <td>
        <a href="../update/{{$d->id}}" class="btn btn-success mb-1">Edit</a>
       <form action="../destroy/{{$d->id}}" method="post">
        @csrf
         <button type="submit" class="btn btn-danger mb-1">Delete</button>
</form>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
<a class="btn btn-primary" href="/dashboard">Dashboard</a>

</section>
</body>
</html>