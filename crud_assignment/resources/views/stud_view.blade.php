<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
    <a href="insert">Add student</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>

        @foreach($students as $stud)
        <tr>
            <td>{{ $stud->id }}</td>
            <td>{{ $stud->name }}</td>
            <td><a href="delete/{{ $stud->id }}">Delete</a></td>
            <td><a href="edit/{{ $stud->id }}/{{ $stud->name }}">Edit</a></td>
        </tr>
        @endforeach

    </table>
</body>

</html>