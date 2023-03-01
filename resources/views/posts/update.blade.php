<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('post.edit', $post->id) }}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="title" value="{{ $post->title }}">
        <input type="text" name="posted_by" value="{{ $post->user->name }}">
        <input type="submit">
    </form>

</body>

</html>
