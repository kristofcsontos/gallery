<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galéria</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo asset('css/app.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
    {{View::make('navbar')}}
    <div class="gallerys">
        @foreach($imageWithGalleryId as $image)
        <div class="gallery">
            <a href="">
                <img src="/image/{{$image->imageName}}.png" style="width: 200px; height: 130px;">
            </a>
            <div class="desc">{{$image->imageName}}</div>
        </div>
        @endforeach
        <div class="upload">
            <div class="mb-2">
                <form action="/galeria/g={{$id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label class="form-label">Képfeltöltés</label>
                    <input name="image" class="form-control" type="file">
                    <button type="submit" class="btn btn-primary">Kész</button>
                </form>
            </div>
        </div>
    </div>
    {{View::make('footer')}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>