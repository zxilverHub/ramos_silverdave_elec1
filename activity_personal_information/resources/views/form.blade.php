<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
</head>

<body>
    <form action="form" method="post">
        @csrf
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" value="{{ old('fname') }}">
        @error('fname')
        <span style="color: red;">{{ $message }}</span>
        @enderror
        <br>

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" value="{{ old('lname') }}">
        @error('lname')
        <span style="color: red;">{{ $message }}</span>
        @enderror
        <br>

        <span>Sex: </span>
        <input type="radio" name="sex" id="male" value="male" {{ old('sex') == 'male' ? 'checked' : '' }}>
        <label for="male">Male</label>
        <input type="radio" name="sex" id="female" value="female" {{ old('sex') == 'female' ? 'checked' : '' }}>
        <label for="female">Female</label>
        @error('sex')
        <span style="color: red;">{{ $message }}</span>
        @enderror
        <br>

        <label for="phone">Mobile phone</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
        @error('phone')
        <span style="color: red;">{{ $message }}</span>
        @enderror
        <br>

        <label for="tel">Tel. No.</label>
        <input type="text" id="tel" name="tel" value="{{ old('tel') }}">
        @error('tel')
        <span style="color: red;">{{ $message }}</span>
        @enderror
        <br>

        <label for="bd">Birth date</label>
        <input type="date" id="bd" name="bd" value="{{ old('bd') }}">
        @error('bd')
        <span style="color: red;">{{ $message }}</span>
        @enderror
        <br>

        <label for="addr">Address</label>
        <input type="text" id="addr" name="addr" value="{{ old('addr') }}">
        @error('addr')
        <span style="color: red;">{{ $message }}</span>
        @enderror
        <br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">
        @error('email')
        <span style="color: red;">{{ $message }}</span>
        @enderror
        <br>

        <label for="website">Website</label>
        <input type="text" id="website" name="website" value="{{ old('website') }}">
        @error('website')
        <span style="color: red;">{{ $message }}</span>
        @enderror
        <br>

        <input type="submit" value="Submit">
    </form>

</body>

</html>