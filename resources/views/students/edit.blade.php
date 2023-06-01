<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>
    <div style="margin-top: 50px">

        @extends('students.layout')
        @section('content')

        <div class="card">
            <div class="card-header">Contactus Page</div>
      <div class="card-body">

          <form action="{{url('student')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PATCH")
            <input type="hidden" name="id" id="id" placeholder="id" value="{{$student->id}}" id="id" />
            <label>Name</label>
            <br>
            <input type="text" name="name" id="name"  placeholder="name"  value="{{$student->name}}" class="form-control">
            <br>
            <label>Email</label>
            <br>
            <input type="text" name="email" id="address" placeholder="email" value="{{$student->email}}" class="form-control">
            <br>
            <label>Mobile</label>
            <br>
            <input type="text" name="mobile" id="mobile" placeholder="mobile" value="{{$student->mobile}}" class="form-control">
            <br>
            <label>Age</label>
            <br>
            <input type="text" name="age" id="age" placeholder="age" value="{{$student->age}}" class="form-control">
            <br>
            <input type="submit" value="Update" class="btn btn-success">
            <br>
        </form>

    </div>
    </div>
</div>

    @endsection
</body>
</html>
