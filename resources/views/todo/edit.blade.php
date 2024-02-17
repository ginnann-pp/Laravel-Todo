<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>My BBS</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Todo List</h1>
        
        <form class="form-group" action="{{ route('todo.update', $todo) }}" method="POST">
            @csrf
            @method('PATCH')

            <input type="text" name="title" value="{{ old('title' , $todo->title) }}">
            <button class="form-button">Edit</button>
        </form>
    </div>
</body>
</html>
