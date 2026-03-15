<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">
      {{--    <p>{{ $universe }}</p> --}}
      <table>
        <tr>
          <th>ID</th>
          <th>Universe</th>
          <th>Company</th>
          <th>Edge</th>
        </tr>
        @foreach ($universe as $universos)
          <tr>
            <td>{{ $universos->id }}</td>
            <td>{{ $universos->universe }}</td>
            <td>{{ $universos->company }}</td>
            <td>{{ $universos->edge }}</td>
          </tr>
        @endforeach
      </table>
    </body>
</html>
