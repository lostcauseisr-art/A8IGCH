<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">
      
      <table>
        <tr>
          <th>ID</th>
          <th>Universe</th>
          <th>Company</th>
          <th>Edge</th>
          <th>Universe_id</th>
        </tr>
        @foreach ($characters as $character)
          <tr>
            <td>{{ $character->id }}</td>
            <td>{{ $character->name }}</td>
            <td>{{ $character->real_name }}</td>
            <td>{{ $character->gender }}</td>
            <td>{{ $character->universe_id }}</td>
          </tr>
        @endforeach
      </table>
    </body>
</html>
