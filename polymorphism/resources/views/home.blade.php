<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">
            <h1>Welcome to My Blog</h1>
        </div>
        @isset($contents)
        <div class="masonry">
            @foreach ($contents as $content)
                <div class="item">
                {!! $content !!}
                </div>
            @endforeach
        </div>
        @endisset
        @empty($contents)
            <div class="hint">
                <img src="img/disapointed.png" alt="Sad emoticon">
                <p>No content posted yet</p>
            </div>
        @endempty
    </div>
</body>
</html>