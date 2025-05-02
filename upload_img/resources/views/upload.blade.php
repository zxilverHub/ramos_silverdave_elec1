<!DOCTYPE html>
<html>

<head>
    <title>Laravel Image Upload (Single + Multiple)</title>
    <style>
        .nav-container {
            display: flex;
            justify-content: space-evenly;

        }

        .images {
            margin-top: 2rem;
            display: flex;
            justify-content: center;
            align-items: start;
            flex-wrap: wrap;
            gap: 2rem;

            img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 12px;
            }
        }

        .img {
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 30%;
            aspect-ratio: 1;
            gap: .5rem;

            >a {
                background-color: red;
                padding: .5rem;
                width: 100%;
                text-decoration: none;
                color: white;
                border-radius: 12px;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="nav-container">
        <div>
            <h1>Single Image Upload</h1>
            <form action="{{ route('photos.store.single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" required>
                <button type="submit">Upload</button>
            </form>
        </div>

        <div>
            <h1>Multiple Images Upload</h1>
            <form action="{{ route('photos.store.multiple') }}" method="POST" enctype="multipart/form-data">

                @csrf
                <input type="file" name="images[]" multiple required>
                <button type="submit">Upload</button>
            </form>
        </div>

        @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
        @endif
    </div>

    @if(session('images'))
    <div class="images">
        @foreach(session('images') as $image)
        <div class="img">
            <img src="{{ asset('images/' . $image->image) }}" alt="">
            <a href="delete/{{ $image->id }}">Delete</a>
        </div>
        @endforeach
    </div>
    @endif

</body>

</html>