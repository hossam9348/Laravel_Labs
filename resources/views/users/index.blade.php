<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
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
    <table class="table">
        <thead>
            <tr>
                <th>Number</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td><form action="{{ route('user.show', $user->id) }}">
                    <button class="btn btn-primary">show</button>
                    </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>