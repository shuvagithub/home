<h1>Student List</h1>
<table BORDER="1">
    <tr>
        <th>ROLL_NO</th>
        <th>NAME</th>
        <th>COURSE</th>
        <th>MARKS</th>
</tr>
@foreach($students as $student)
<tr>
    <td>{{$student['roll_no']}}</td>
    <td>{{$student['name']}}</td>
    <td>{{$student['course']}}</td>
    <td>{{$student['marks']}}</td>
</tr>
@endforeach
</table>
<div>
{{$students->links()}}
</div>
<style>
    .w-5{
        display: none
    }
    </style>