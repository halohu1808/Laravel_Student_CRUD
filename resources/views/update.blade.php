<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
</head>
<body>


<form action="{{route('lophoc.update')}}" method="post">
    @csrf

    <h2> Update </h2>
    <table border="1">
        <tr>
            <input type="hidden" name="id" value="{{$student->id}}">
        </tr>
        <tr>
            <td>Lop:</td>
            <td><input type="text" name="tenlop" value="{{$student->tenlop}}"><br></td>
        </tr>
        <tr>
            <td>Chi tiet</td>
            <td><input type="text" name="chitiet" value="{{$student->chitiet}}"> <br></td>
        </tr>
        <tr>
            <td><button type="submit"> Create</button></td>
        </tr>
    </table>


</form>



</body>
</html>
