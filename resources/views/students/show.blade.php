<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
</head>
<body>

    <div style="margin-top: 50px">

        @extends('students.layout')
        @section('content')


    <div class="card">
        <div class="card-header" style="font-size: x-large">Students Page</div>
      <div class="card-body">


          <div class="card-body">
            <h3 class="card-title">Name : <span style="color: rgb(48, 108, 143)">  {{ $student->name }} </span> </h3>
            <h3 class="card-text">Email : <span style="color: rgb(48, 108, 143)"> {{ $student->email }} </span> </h5>
            <h3 class="card-text">Mobile : <span style="color: rgb(48, 108, 143)"> {{ $student->mobile }} </span> </h5>
            <h3 class="card-text">Age :  <span style="color: rgb(48, 108, 143)"> {{ $student->age }} </span> </h5>

      </div>

      <hr>

    </div>
</div>

</div>
</body>
</html>
