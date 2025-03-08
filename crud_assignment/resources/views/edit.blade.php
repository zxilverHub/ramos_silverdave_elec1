<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <form action="/submitedit" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $id }}">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ $name }}">
        <input type="submit" value="Submit">
    </form>
</body>

</html>