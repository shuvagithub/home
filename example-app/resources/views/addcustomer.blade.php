<h1>add customer</h1>
<form action="add2" method="POST" enctype="multipart/form-data">
    @csrf
<input type="text" name="id" placeholder="enter user id"><br><br>
    <input type="text" name="name" placeholder="enter user name"><br><br>
<input type="text" name="price" placeholder="enter user price"><br><br>
<input type="file" name="file" placeholder="enter user file"><br><br>
<button type="submit">Add</button>
</form>


