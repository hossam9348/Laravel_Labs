<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    </style>
        <style>
        #nav {
            background: black;
        }
    </style>
</head>

<body>
    <nav id="nav">
        <p>ITI Blog</p>
        <p>All posts</p>
    </nav>
    <a href="{{ route('post.create') }}">create post</a>

    <table>
        <thead>
            <tr>
                <th>number</th>
                <th>Title</th>
                <th>Posted By</th>
                <th>Created At</th>
                <th>Acions</th>
                <th>...</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($posts as $post)
                <tr class="@if ($loop->first) active @endif">
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a href="{{ route('post.show', $post->id) }}">show</a>
                        <form action="{{ route('post.update', $post->id) }}">
                            <button>update</button>
                        </form>
                        <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                            @method('DELETE')
                            @csrf()
                            <button type="submit">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>

