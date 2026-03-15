<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <h1>Create Characters</h1>
        
        <form action="{{ route('characters.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" placeholder="Name">
        <br>

        <label>Real Name:</label>
        <input type="text" name="real_name" placeholder="Real Name">
        <br>

        <label>Gender:</label>
        <select name="gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
        <br>

        <button type="submit">Create</button>
        </form>
    </body>
</html>