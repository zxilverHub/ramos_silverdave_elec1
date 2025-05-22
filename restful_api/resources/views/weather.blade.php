<!-- resources/views/weather.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>3 City Weather</title>
    <style>
        .weather-row {
            display: flex;
            justify-content: space-around;
            text-align: center;
            font-family: sans-serif;
        }

        .weather-box {
            border: 1px solid #ccc;
            padding: 20px;
            width: 30%;
        }
    </style>
</head>

<body>
    <h1 style="text-align:center;">Weather for 3 Cities</h1>
    <div class="weather-row">
        @foreach ($weatherData as $weather)
        <div class="weather-box">
            <h2>{{ ucfirst($weather['city']) }}</h2>
            <p><strong>Temperature:</strong> {{ $weather['temperature'] }}°C</p>
            <p><strong>Description:</strong> {{ $weather['description'] }}</p>
            <p><strong>Humidity:</strong> {{ $weather['humidity'] }}%</p>
        </div>
        @endforeach
    </div>
</body>

</html>