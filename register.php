<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<br/>
  <div style="height: 40px; width: 40%;font-weight: bold;" class="header">
  <center>Register<center/>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
	
	
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	
	<div class="input-group">
  	  <label>ID </label>
  	  <input type="text" name="id" value="<?php echo $id; ?>">
  	</div>
	<div class="input-group">
  	  <label>Contact num</label>
  	  <input type="text" name="contnum" value="<?php echo $contnum; ?>">
  	</div>
	<div class="input-group">
  	  <label>Role</label>
  	  <select name="role" >
  		     
             <option value="admin">Admin</option>
             <option value="instructor">Instructor</option>
            <option value="varifier">Varifier</option>
        </select>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>