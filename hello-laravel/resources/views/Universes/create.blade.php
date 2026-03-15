<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <h1>Create Universes</h1>
        
        <form action="{{ route('universe.store') }}" method="POST">
        @csrf
        <label>Universe:</label>
        <input type="text" name="universe" placeholder="Universe">
        <br>

        <label>Company:</label>
        <select name="company">
          <option value="Marvel">Marvel</option>
          <option value="DC">DC</option>
        </select>
        <br>

        <label>Edge:</label>
        <input type="text" name="edge" placeholder="Edge">
        <br>

        <button type="submit">Create</button>
        </form>
    </body>
</html>
