<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Posts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: sans-serif;
            background: #f9f9f9;
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        a.button {
            display: inline-block;
            padding: 8px 12px;
            background-color: #3490dc;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .actions a {
            margin-right: 10px;
        }

        .message {
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            margin-bottom: 10px;
            border-radius: 4px;
        }

        tr {
            text-align: center;
        }
    </style>
</head>

<body>

    <h1>All Posts</h1>

    <a href="{{ route('posts.create') }}" class="button">Create New Post</a>

    @if (session('success'))
        <div class="message">
            {{ session('success') }}
        </div>
    @endif

    @if ($posts->isEmpty())
        <p>No posts found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($post->content, 50) }}</td>
                        <td class="actions">
                            <a href="{{ route('posts.show', $post->id) }}">View</a>
                            <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                style="display:inline-block;" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    style="color: red; background: none; border: none; cursor: pointer;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>

</html>
