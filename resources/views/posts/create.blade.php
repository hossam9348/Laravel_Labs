<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
        #nav {
            background: black;
            display: flex;
            gap: 20px;
        }
        .iti {
            color: #999;
        }
    </style>
</head>

<body>
<nav id="nav">
        <p class="iti">ITI Blog</p>
        <a class="iti" href="{{ route('post.index') }}">All Posts</a>
        <a class="iti" href="{{ route('user.index') }}">All Users</a>
    </nav>
    <div class="row justify-between">
        <form class="col-6" action="{{ route('post.store') }}" method="POST">
            @csrf
            <div>
                <label class="form-label" for="title">Title</label>
                <input class="form-control" type="text" name="title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <input class="btn btn-primary" type="submit">
        </form>
    </div>
</body>

</html>
