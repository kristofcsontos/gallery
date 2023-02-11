<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
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
    <div id="header">{{View::make('navbar')}}</div>
    <div class="main mt-4 p-3">
        <p> <h3>Lorem ipsum </h3><hr>
        Dolor sit amet, consectetur adipiscing elit. Duis sit amet diam finibus leo porta tristique. Sed lacus est, blandit eu magna sit amet, consequat ultrices nisl. Phasellus pretium sem a ligula aliquam ultricies. Cras vitae quam eget est fringilla rhoncus ut non mi. Quisque placerat rutrum lacus, a elementum purus condimentum a. Aliquam erat volutpat. Vivamus volutpat odio a semper fermentum. Ut dignissim sodales augue, vel feugiat ex fringilla sed. Duis quis nulla justo. Integer massa massa, tempus non dolor ut, porta auctor magna. Nam accumsan, leo rhoncus malesuada consequat, nisl nisl iaculis est, vel scelerisque sem eros et nisi. Aliquam eu rhoncus neque, eget laoreet augue. Ut sed mauris consectetur, accumsan odio vitae, molestie nisl. Morbi eleifend sodales venenatis. Sed suscipit, elit sed laoreet laoreet, sem dolor vehicula leo, sit amet posuere turpis risus et sem. In pellentesque velit ac neque bibendum, a mollis ex aliquet.
        </p> 
        <p> Integer finibus elit ut sapien volutpat vehicula. Aenean iaculis sem in enim fermentum, ut dictum dui commodo. Sed egestas eros ac est tincidunt posuere. Proin at eros eros. Etiam finibus rhoncus aliquam. Cras lorem risus, venenatis quis tellus sed, maximus ullamcorper leo. Sed semper malesuada tortor.
        </p>
        <p> Vestibulum quis euismod lacus. Vestibulum vestibulum, sapien mollis porta sagittis, leo nisi rutrum dui, eu pellentesque mi sapien id quam. Sed mattis, arcu sit amet varius bibendum, libero metus aliquam nulla, accumsan hendrerit arcu orci convallis velit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras luctus dictum est commodo placerat. Quisque eget condimentum erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc a erat a lectus sagittis iaculis. In pharetra turpis at consequat efficitur. Mauris nec rutrum nisl. Quisque tincidunt leo nec sem malesuada hendrerit at sit amet metus. Donec eget aliquet justo.
        </p>
        <p> Curabitur et elementum neque. Suspendisse potenti. Sed tincidunt sodales diam, eget convallis lectus. Vivamus volutpat hendrerit orci a tempus. Fusce ac purus pulvinar nunc ultrices vestibulum sed ut felis. Curabitur mollis, justo ut fermentum porta, arcu nibh aliquam orci, et scelerisque eros sem vitae magna. Cras mi magna, mattis vitae condimentum eu, finibus vitae enim. Interdum et malesuada fames ac ante ipsum primis in faucibus. In auctor pharetra pretium.
        </p>
        <p>Vivamus iaculis nunc risus, id tincidunt lectus dapibus et. Sed ultrices tempus tempus. Aenean ultricies dolor vel enim consequat, in facilisis nulla iaculis. Etiam facilisis nisl at lacinia placerat. Aliquam vitae eros tellus. In suscipit placerat accumsan. Vestibulum vitae metus orci. Sed ac dictum sem. Mauris sodales, ligula in pretium ultricies, nisl arcu dapibus metus, id faucibus tellus libero nec sem. Mauris commodo nunc a magna interdum dictum. Phasellus nec enim urna. Proin scelerisque porttitor eros et elementum. Nam tempus arcu id ligula lobortis, eu maximus eros finibus.
        </p>
        <hr>
    


    </div>
    <div id="footer">{{View::make('footer')}}</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>