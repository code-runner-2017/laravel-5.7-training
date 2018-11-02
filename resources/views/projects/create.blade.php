<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projects</title>
</head>
<body>

    <h1>Create a new Project:</h1>

    <form action="/projects" method="post">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="project title">
        </div>

        <div>
            <input type="text" name="description" placeholder="project description">
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>

</body>
</html>
