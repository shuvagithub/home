<h1>user login</h1>
<form action="user5" method="POST">
    @csrf
    <input type="text" name="user" placeholder="enter user name"><br><br>
    <input type="password" name="pass" placeholder="enter user password"><br><br>
    <button type="submit">login</button>
</form>