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
        @foreach($galleryAll as $gallery)
        <div class="gallery">
            <a href="/galeria/g={{$gallery->id}}">
                <img src="image/{{$gallery->galleryImageName}}" alt="{{$gallery->galleryName}}" style="width: 200px; height: 130px;">
            </a>
            <div class="desc">{{$gallery->galleryName}} galéria</div>
        </div>
        @endforeach
        <div class="upload">
            <div>
                <form action="/galeria" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                    <label class="form-label">Galéria feltöltés</label>
                    <input name="gall" class="form-control" type="file">
                    </div>
                    <div class="m-2">
                    <label class="form-label">Név</label>
                    <input type="text" name="name">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary m-3">Kész</button>
                </form>
            </div>
        </div>
    </div>

    {{View::make('footer')}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>