<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link href="login.css" rel="stylesheet" type="text/css">
</head>
<body>
<br/><br/>
<center><img src="MIST_Logo.png" style="height:130px;width:100px:"><center/>
  <div class="header">
  <center><h1>MIST PARITOSHIK SYSTEM</h1><center/>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
	<div class="input-group">
  	  <label>Role</label>
  	  <select name="role" style="height:40px;width:100%;padding: 5px 10px; margin: 2%; font-size: 16px; border-radius: 5px; border: 1px solid gray;">
  		     
             <option value="admin">Admin</option>
             <option value="instructor">Instructor</option>
            <option value="varifier">Varifier</option>
        </select>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>