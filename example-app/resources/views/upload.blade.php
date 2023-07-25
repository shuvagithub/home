<h1>Upload File</h1>
<form action="user6" method="POST" enctype="multipart/form-data">
    @csrf
FILE:<input type="file" name="file" placeholder="enter file"><br><br>
<button type="submit">Upload file</button>
</form>