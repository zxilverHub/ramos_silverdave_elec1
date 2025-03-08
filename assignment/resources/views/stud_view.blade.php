<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="insert">Create new</a>
    <table border="1" style="border-collapse: collapse">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td><a href="delete/{{ $user->id }}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>