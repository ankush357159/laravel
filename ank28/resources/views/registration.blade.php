<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
</head>

<body>
    {{-- @if ($errors->any())
    {{$errors}}
    @endif --}}

    {{-- @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $message)
        <li>
            {{$message}}
        </li>
        @endforeach
        @endif
    </ul> --}}

    {{-- @if ($errors->any())

    {{($errors->first('email'))}}

    @endif --}}

    {{-- @if ($errors->any())
    @if ($errors->has('email'))
    <h4>Correct the error in email</h4>
    @endif

    @endif --}}

    <form action="" method="post">
        @csrf
        Name<input type="text" name="name" id="name" placeholder="Enter your name" value="{{old('name')}}">
        <br><br>


        Email<input type="email" name="email" id="email" placeholder="Enter email" value="{{old('email')}}">
        @error('email')
        <h5>{{$message}}</h5>
        @enderror
        <br><br>


        {{-- @if ($errors->any())
        <ul>
            @foreach ($errors->get('email') as $message)
            <li>
                {{$message}}
            </li>
            @endforeach
        </ul>
        @endif --}}

        Password<input type="password" name="password" id="password" placeholder="Enter password">
        @error('password')
        <h5>{{$message}}</h5>
        @enderror
        <br><br>

        {{-- @if ($errors->any())
        <ul>
            @foreach ($errors->get('password') as $message)
            <li>
                {{$message}}
            </li>
            @endforeach
        </ul>
        @endif --}}
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