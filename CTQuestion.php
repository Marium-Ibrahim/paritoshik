<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Make Question</title>
  <link rel="stylesheet" type="text/css" href="register.css">
  <link rel="stylesheet" type="text/css" href="Logout.css">
</head>

<body>

<br/><br/><br/>
  <div style="height: 40px; width: 40%;font-weight: bold;" class="header">
  <center>Class Test<center/>
  </div>
	
  <form method="post" action="CTQuestion.php">
 	<?php include('errors.php'); ?>
	
	
  	<div class="input-group">
  	  <label>Instructor ID</label>
  	  <input type="text" name="InsId" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Course No</label>
  	  <input type="text" name="course_no" value="<?php echo $email; ?>">
  	</div>
	<div class="input-group">
  	  <label>Number of Students </label>
  	  <input type="number" name="num_of_student" value="<?php echo $id; ?>">
  	</div>
		<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Save</button>
  	  <button type="submit" class="btn" name="edit">Edit</button>
  	</div>
  </form>
  
  <div  class="Logout">
  <center>
   <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	 <a href="index.php?logout='1'" style="color: white;font-size:20px;margin:5px;">logout</a>
    <?php endif ?>
  <center/>
  </div>
  
 
  
</body>
</html>