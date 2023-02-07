<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recorded Duration</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <h1>Recorded Duration</h1>
    <table>
        <thead>
            <tr>
                <th>Duration</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($durations as $duration)
                <tr>
                    <td>{{ $duration->duration }}</td>
                    <td>{{ $duration->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
