<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="img">
            <img src="{{ asset('assets/reg.jpg')}}" alt="">
        </div>

        <form action="register" method="post">
            <h1>Sign up</h1>
            @csrf
            <div> <input type="text" id="username" name="username" placeholder="Username" value="{{ old('username') }}">
                @error('username')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div> <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                <p>{{$message}}</p>
                @enderror
            </div>
            <div> <input type="password" id="password" name="password" placeholder="Password">
                @error('password')
                <p>{{$message}}</p>
                @enderror
            </div>
            <select name="role" id="role">
                <option value="admin">Admin</option>
                <option value="user">Regular user</option>
            </select>
            <input type="submit" value="Sign up">

            <p class="log">Already have account? <a href="loginpage">Log in here</a></p>
        </form>
    </div>
</body>

</html>