<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: sans-serif; background: #f9f9f9; padding: 20px; }
        .container { max-width: 700px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        h1 { margin-bottom: 10px; }
        p { margin-bottom: 20px; line-height: 1.6; }
        a.button {
            display: inline-block;
            padding: 8px 12px;
            background-color: #3490dc;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-right: 10px;
        }
        a.button:hover { background-color: #2779bd; }
    </style>
</head>
<body>

<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.index') }}" class="button">← Back to Posts</a>
    <a href="{{ route('posts.edit', $post->id) }}" class="button">Edit Post</a>
</div>

</body>
</html>
