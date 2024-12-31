@extends('students.master');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Detail</title>
</head>
<body>
    @section('content')
    <h1 class="text-center">Edit Student Detail</h1>
    <form method="post" action="{{route('students.update',$id->id)}}">
    @method('PUT')
    @csrf
    <div class="container">
<div class="row g-3 my-3">
  <div class="col">
    <input type="text" name="fname" class="form-control" placeholder="First name" value="{{$id->fname}}">
  </div>
  <div class="col">
    <input type="text" name="lname" class="form-control" placeholder="Last name" value="{{$id->lname}}">
  </div>
  <div class="col">
    <input type="email" name="email" class="form-control" placeholder="Email" value="{{$id->email}}">
  </div>
  <div class="col">
    <input type="password" name="password" class="form-control" placeholder="Password" value="{{$id->password}}">
  </div>
  </div>
  <button type="submit" name="submit">Edit</button>
  </div>
</form>
    @endsection
</body>
</html>