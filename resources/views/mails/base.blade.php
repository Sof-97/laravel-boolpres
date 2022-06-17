<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>

<body>
    <h2>Hai creato un nuovo post</h2>
    <p>{{ $post->title }}</p>
    <img src="{{ asset("storage/$post   ->image") }}" alt="">
    <p>{{$post->content}}</p>
</body>

</html>
