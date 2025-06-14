<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: sans-serif; background: #f0f0f0; padding: 20px; }
        h1 { margin-bottom: 20px; }
        form { background: #fff; padding: 20px; border-radius: 8px; max-width: 600px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.05); }
        label { display: block; margin-bottom: 8px; font-weight: bold; }
        input[type="text"], textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #3490dc;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover { background-color: #2779bd; }
        a { display: inline-block; margin-top: 10px; text-decoration: none; color: #3490dc; }
    </style>
</head>
<body>

    <h1>Create a New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>

        <label for="content">Content:</label>
        <textarea id="content" name="content" rows="6" required>{{ old('content') }}</textarea>

        <button type="submit">Save Post</button>
    </form>

    <a href="{{ route('posts.index') }}">← Back to Posts</a>

</body>
</html>
