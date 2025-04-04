<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/login" method="POST">
        @csrf
        <input type="email" placeholder="email" name="email" required><br>
        <input type="password" placeholder="pass" name="password" required><br>
        <input type="submit" value="Log in">
    </form>
</body>

</html>