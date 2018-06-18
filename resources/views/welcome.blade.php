<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Hello, Squirrel</h1>

        <ul>
            @foreach ($tasks as $key => $task)
                <li>{{ $task->body }}</li>
            @endforeach
        </ul>
    </body>
</html>
