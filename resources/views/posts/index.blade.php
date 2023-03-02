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
    <form action="{{ route('post.create') }}">
        <button class="btn btn-primary">create post</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Number</th>
                <th>Title</th>
                <th>Posted By</th>
                <th>Created At</th>
                <th>Acions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td style="display: flex;  gap: 5px;">
                        <form action="{{ route('post.show', $post->id) }}">
                            <button class="btn btn-primary">show</button>
                        </form>
                        <form action="{{ route('post.update', $post->id) }}">
                            <button class="btn btn-primary">update</button>
                        </form>
                        <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                            @method('DELETE')
                            @csrf()
                            <button  class="btn btn-primary" type="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
</body>

</html>

