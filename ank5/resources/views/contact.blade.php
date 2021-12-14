<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contact Page</h1>
    <hr>
    {{-- <h2>Welcome {{$nm ?? ''}}</h2> --}}
    {{-- <h2>Time: {{time()}}</h2> --}}

    {{-- @if ($nm == 'Pooja') 
        <h2>Hello {{$nm}}</h2>
    @else
        <h2>Hello Guest</h2>         
    @endif --}}

    {{-- @if($nm=='Sonam')
        <h2>Hello {{$nm}}</h2>
    @elseif($nm=='Pooja')
        <h2>Hello {{$nm}}</h2>
    @else   
        <h2>Hello Guest</h2>
    @endif --}}

    {{-- @unless ($nm == 'Pooja')
        <h2>You are not admin</h2>
    @endunless --}}

    {{-- @isset($nm)
        <h1>{{$nm}}</h1>        
    @endisset --}}

    {{-- @empty($nm)
        <h1>Hello {{$nm}}</h1>
    @endempty --}}

    {{-- @production
        <h2>Work only in product</h2>
    @endproduction --}}

    {{-- @env('local')
    <h1>Work in local environment</h1>        
    @endenv --}}

    {{-- @env(['local','staging'])
    <h1>Works both in production and local environment</h1>        
    @endenv --}}

    {{-- @switch(3)
        @case(1)
            <h1>First</h1>
            @break
        @case(2)
            <h2>Second</h2>
            @break
        @default
            <h1>Default</h1>
    @endswitch --}}

    {{-- @for ($i = 0; $i < 10; $i++)
        <h2>{{$i}}</h2>        
    @endfor --}}

    {{-- @foreach($students as $stu)
    <h4>{{$stu}}</h4>        
    @endforeach --}}

    {{-- @forelse ($students as $student)
    <h4>{{$student}}</h4>        
    @empty
    <h4>No student</h4>        
    @endforelse --}}

    {{-- Do not run below code since system will crash --}}
    {{-- @while (true)
        <h1>Hello forever</h1>
    @endwhile --}}

    @foreach ($students as $student)
        @if ($student=='Sonam')
        @break            
        @endif
        <h3>{{$student}}</h3>
    @endforeach






  

  
</body>
</html>