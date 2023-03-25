<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table border="2">
        <tr>
            <th>Husband</th>
            <th>Wife</th>
        </tr>

        @foreach ($husbands as $husband )
        <tr>
            <td>{{ $husband->name }}</td>
            <td>{{ $husband->wife ? $husband->wife->name : 'No Wife' }}</td>
        </tr>
        @endforeach

    </table>
</body>
</html>
