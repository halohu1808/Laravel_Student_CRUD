<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>

<form action="{{ route('lophoc.store') }} " method="post">
    @csrf

    <h2> Tao moi 1 lop </h2>
    <table border="1">
        <tr>
            <td>Lop:</td>
            <td><input type="text" name="tenlop"><br></td>
        </tr>
        <tr>
            <td>Chi tiet</td>
            <td><input type="text" name="chitiet"><br></td>
        </tr>
        <tr>
            <td><button type="submit"> Create</button></td>
        </tr>
    </table>


</form>


</body>
</html>
