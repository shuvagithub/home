<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{url('formValue')}}" method="post">@csrf
		Id: <input type="text" name="Id"><br><br>
		Name:<input type="text" name="Name"><br><br>
		Course:<input type="text" name="Course"><br><br>
		Marks:<input type="text" name="Marks"><br><br>
		<button type="submit">click</button>
	</form>
</body>
</html>