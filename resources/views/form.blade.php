<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Register</title>
</head>
<body>
<h1>User Form</h1>
<form action="/" method="post">
    {{ csrf_field()}}

    Identity Number <input type="text" name="inum">
    <span style="color: red">@error('inum') * {{ $message }}
        @enderror</span>
    <br><br>


    First Name <input type="text" name="firstName">
    <span style="color: red">@error('firstName') * {{ $message }}
        @enderror</span>
    <br><br>


    Last Name <input type="text" name="lastName">
    <span style="color: red">@error('lastName') * {{ $message }}
        @enderror</span>
    <br><br>

    Phone <input type="text" name="phone">
    <span style="color: red">@error('phone') * {{ $message }}
        @enderror</span>
    <br><br>


    Gender <input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="female"> Female
    <br><br>
    <input type="submit">
    <input type="reset">
</form>
</body>
</html>
