<html>
    <body>
        <a href="int">Insert</a>
        <table border="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Course</th>
		<th>Marks</th>
		<th colspan="2">Action</th>
	</tr>
@foreach ($data as $item)
	<tr>
		<td>{{$item->Id}}</td>
		<td>{{$item->Name}}</td>
		<td>{{$item->Course}}</td>
		<td>{{$item->Marks}}</td>
		<td><a href="update/{{$item->Id}}">Update</td></a>
		<td><a href="delete/{{$item->Id}}">Delete</td></a>
	</tr>
@endforeach
</table>
</body>
    </html>