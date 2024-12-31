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
    <h1 class="text-center">Show Student Detail</h1>
    <div class="container">
        <div class="row bg-info">
            <div class="col">
                FirstName
            </div>
            <div class="col">
                LastName
            </div>
            <div class="col">
                Email
            </div>
            <div class="col">
                Password
            </div>
        </div>
            <div class="row bg-secondary">
            <div class="col">
            {{$id->fname}}
            </div>
            <div class="col">
            {{$id->lname}}
            </div>
            <div class="col">
            {{$id->email}}
            </div>
            <div class="col">
            {{$id->password}}
            </div>
        </div>
    </div>
    @endsection
</body>
</html>