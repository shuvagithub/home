<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{url('upd_f')}}" method="POST">@csrf
		Id: <input type="text" name="Id" value="{{$data->Id}}" readonly="readonly"><br><br>
		Name:<input type="text" name="Name"value="{{$data->Name}}"><br><br>
		Course:<input type="text" name="Course"value="{{$data->Course}}"><br><br>
		Marks:<input type="text" name="Marks"value="{{$data->Marks}}"><br><br>
		<button type="submit">click</button>
	</form>
</body>
</html>