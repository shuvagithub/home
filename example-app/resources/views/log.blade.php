<h1>user log in </h1>

<form action="users2" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter user id"><br><span style="color:red">
    @error('username'){{$message}}@enderror
    </span>
    <br>
    <input type="password" name="userpassword" placeholder="enter user password"> <br><span style="color:red">
    @error('userpassword'){{$message}}@enderror
    </span><br>
    <button type="submit">login </button>
</form>

