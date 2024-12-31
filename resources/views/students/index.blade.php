@extends('students.master');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Detail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    @section('content')
    <h1 class="text-center">Student Details</h1>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($student as $s)
    <tr>
      <th scope="row">{{$s->id}}</th>
      <td>{{$s->fname}}</td>
      <td>{{$s->lname}}</td>
      <td>{{$s->email}}</td>
      <td>{{$s->password}}</td>
      <td>
      <button class="btn btn-info"><a href="{{route('students.show',$s->id)}}"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></button>
      <button class="btn btn-success"><a href="{{route('students.edit',$s->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
      <form action="{{route('students.destroy',['student'=>$s->id])}}" method="post">
        @method('DELETE')
        @csrf
      <button class="btn btn-danger"><a href="{{route('students.destroy',['student'=>$s->id])}}"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
    @endsection
   
</body>
</html>