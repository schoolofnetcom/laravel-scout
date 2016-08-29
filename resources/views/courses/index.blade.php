<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Courses</h1>
    <form action="/" method="get">
        Search: <input type="text" name="str" value="{{$str}}">
        <input type="submit" class="btn btn-primary" value="OK">
    </form>

    @foreach($courses as $course)
        <div class="col-md-3" style="border: 1px solid #ccc; margin: 10px; min-height: 275px;">
            <h3>{{ $course->name }}</h3>
            <p>{{$course->description}}. <br><br>By {{$course->author}}</p>
        </div>
    @endforeach
</div>
</body>
</html>