<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 2rem;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .country {
            border: 1px solid #ccc;
            padding: 1rem;
            width: 200px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .flag {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <h1>Countries</h1>
    <div class="container">
        @foreach($countries as $country)
        <div class="country">
            <img src="{{ $country['flag'] }}" alt="{{ $country['name'] }} flag" class="flag">
            <p><strong>{{ $country['name'] }}</strong></p>
            <p>{{ $country['region'] }}</p>
        </div>
        @endforeach
    </div>
</body>

</html>