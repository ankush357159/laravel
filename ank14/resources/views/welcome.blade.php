<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    {{-- <link rel="stylesheet" href={{url('css/style.css')}}> --}}
    <title>Document</title>
  {{-- <style>
      h2 {
          color: rgb(235, 6, 56)
      }
  </style> --}}
</head>
<body>
    <h2>Home Page</h2>

    {{-- <script>
        alert('Hello laravel')
    </script> --}}
    {{-- <script src="js/myscript.js"></script> --}}
    <script src={{asset("js/myscript.js")}}></script>
    {{-- <script src={{url("js/myscript.js")}}></script> --}}
</body>
</html> 