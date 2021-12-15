<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <style>
        .myClass {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Welcome Page</h2>
    <hr>
    @php
        $desc = 'Card description 1';
    @endphp
    <x-card title='Cart title 1' sub-title='subtitle 1' :description=$desc class='myClass'/>

    <x-card title='Cart title 2' sub-title='subtitle 2' :description=$desc/>


</body>
</html>