<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <th>ID</th>
        <th>NAME</th>
        <th>DESCRIPTION</th>

        <tbody>
            @foreach($artists as $artist)
                <tr>
                    <td>{{$artist->id}}</td>
                    <td>{{$artist->name}}</td>
                    <td>{{$artist->description}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>