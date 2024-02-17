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

        <form class="form-group" method="POST" action="{{ route('todo.create') }}">
            @csrf
            <input type="text" name="title">
            <button class="form-button">Add</button>
        </form>

        <ul>
            @forelse ($todos as $todo)
            <div class="list-items">
                <li>
                    {{ $todo->title }}
                </li>
                <div class="item">
                    <form>
                        <button>
                            <a href="{{ route('todo.edit', $todo) }}">Edit</a>
                        </button>
                    </form>
                    <form action="{{ route('todo.destroy', $todo) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>DEL</button>
                    </form>
                </div>
            </div>
            @empty
                <p>No dates</p>
            @endforelse
        </ul>
    </div>
</body>
</html>
