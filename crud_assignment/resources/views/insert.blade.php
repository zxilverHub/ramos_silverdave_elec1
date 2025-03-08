<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>

<body>
    <form action="insert" method="post">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="Add student">
    </form>
</body>

</html>