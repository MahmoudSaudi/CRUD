<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Craete</title>
</head>
<body>

@extends('students.layout')
@section('content')
<div style="margin-top: 50px" class="container">

    <div class="card">
        <div class="card-header">Students Page</div>
  <div class="card-body">

      <form action="{{url('student')}}" method="post">
        @csrf
        <label>Name</label>
        <br>
        <input type="text" name="name" id="name" class="form-control">
        <br>
        <label>Email</label>
        <br>
        <input type="email" name="email" id="address" class="form-control">
        <br>
        <label>Mobile</label>
        <br>
        <input type="text" name="mobile" id="mobile" class="form-control">
        <br>
        <br>
        <label>Age</label>
        <br>
        <input type="text" name="age" id="age" class="form-control">
        <br>
        <input type="submit" value="Save" class="btn btn-success">
        <br>
    </form>

</div>
</div>
</div>

@endsection



</body>
</html>
