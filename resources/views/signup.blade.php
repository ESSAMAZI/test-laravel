<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form  method="POST" action="{{url('/edit')}}"> -->
    <!-- <form  method="POST" action="{{route('insert')}}"> -->
    <form  method="GET" action="{{route('delete')}}">
        @csrf
    Name :      <input type="text" placeholder="Your name">
        <br>
    Email :    <input type="email" placeholder="Your email">
        <br>
    Password : <input type="password" placeholder="Your password">
        <br>
        <input type="submit" value="Sign up" name="submit">
        <br>

    </form>
</body>
</html>