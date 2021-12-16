<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
</head>

<body>
    @if ($errors->any())
        {{$errors}}
    @endif
    <form action="" method="post">
        @csrf
        Name<input type="text" name="name" id="name" placeholder="Enter your name" value="{{old('name')}}"><br><br>
        Email<input type="email" name="email" id="email" placeholder="Enter email" value="{{old('email')}}"><br><br>
        Password<input type="password" name="password" id="password" placeholder="Enter password"><br><br>
        <input type="submit" value="Submit">
    </form>

    @if (isset($data)) {
    @foreach ($data as $item)
    {{$item}}
    @endforeach

    }
    @endif





</body>

</html>