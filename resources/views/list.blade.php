<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach lop</title>
</head>
<body>
<h2> Danh sach lop</h2>
<table border="1" cellpadding="5">
    <tr>
        <th> STT</th>
        <th>Lop</th>
        <th>chi tiet</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($student as $key=> $item )
        <tr>
            <td>{{++$key}}</td>
            <td>{{ $item->tenlop }}</td>
            <td>{{ $item->chitiet }}</td>
            <td><a href="{{route('lophoc.edit',$item->id)}}"> Update </a></td>
            <td><a href="{{route('lophoc.delete',[$item->id])}}"> Delete </a></td>
        </tr>
    @endforeach
    <tr>
        <td> <a href="{{route('lophoc.create')}}" > Create </a> </td>
    </tr>
</table>


</body>
</html>
