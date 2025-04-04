<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form action="/register" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <label for="password_confirmation">Confirm password</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <div>
            <input type="submit" value="Register">
        </div>
    </form>

</body>

</html>