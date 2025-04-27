<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            padding: 5%;
        }

        .main-container {
            width: 100%;
            max-width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;

            svg {
                width: 200px;
                height: 200px;
            }

            .card {
                display: flex;
                flex-direction: column;
                gap: 1rem;

                background-color: lightgray;
                padding: .5rem;
            }
        }

        nav {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 0 3rem 0;

            input {
                padding: .5rem 1rem;
            }
        }
    </style>
</head>

<body>
    <nav>
        <h1>Students</h1>
        <form action="/" method="post">
            @csrf
            <input type="text" placeholder="Search" name="search">
            <input type="submit" value="Search">
        </form>
    </nav>
    <div class="main-container">
        <?php $index = 0; ?>
        @foreach($qrcodes as $qrcode)
        <div class="card">
            {!! $qrcode !!}
            <p>{{ $students[$index]->fullname }}</p>
            <?php $index++; ?>
        </div>
        @endforeach
    </div>
</body>

</html>