<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
</head>
<body>
<h2>Student Data</h2>
<hr>
@foreach ($students as $student)
    {{$student->id}}
    {{$student->name}}
    {{$student->email}}
    {{$student->city}}  
    <br>  
@endforeach
</body>
</html>