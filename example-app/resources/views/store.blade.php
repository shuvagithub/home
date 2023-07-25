<h1>add new member</h1>
@if(session('user'))
<h2>data saved for {{session('user')}}</h2>
@endif
<form action="user2" method="POST">
    @csrf
Name:<input type="text" name="user" placeholder="enter user name"><br><br>
Password:<input type="password" name="Pass" placeholder="enter user Password"><br><br>
Email:<input type="text" name="mail" placeholder="enter user Email"><br><br>
<button type="submit">add user</button>
</form>