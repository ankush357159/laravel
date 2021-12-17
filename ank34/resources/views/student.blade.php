<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body > nav > div.hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between > div:nth-child(2) {
            display: none
        }
    </style>
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
    {{$student->marks}}
    {{$student->pass_date}}
    <br>
    {{$students->links()}}
        
    @endforeach
</body>
</html>