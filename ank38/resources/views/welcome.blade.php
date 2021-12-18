<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   


</head>

<body>
    <h2>Student data</h2>
    <hr>

    <table class="table table-bordered border-primary w-50">
        <tr class="table-primary">
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">City</th>
            <th scope="col">Marks</th>
        </tr>
        <tbody>
            <tr class="table-primary">
                    @foreach ($students as $student) 
                    <td class="table-primary">{{$student->id}}</td>
                    <td class="table-primary">{{$student->name}}</td>
                    <td class="table-primary">{{$student->email}}</td>
                    <td class="table-primary">{{$student->city}}</td>
                    <td class="table-primary">{{$student->marks}}</td>
                <br>
                </tr>

            
        </tbody>

    </table>

    @endforeach


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>