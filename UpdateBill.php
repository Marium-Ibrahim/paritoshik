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
  <center>Bill Amount Update<center/>
  </div>
	
  <form method="post" action="MakeQuestion.php">
 	<?php include('errors.php'); ?>
	
	
  	<div class="input-group">
  	  <label>Term Question</label>
  	  <input type="number" name="TermQ" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Copy Check</label>
  	  <input type="number" name="course_no" value="<?php echo $email; ?>">
  	</div>
	<div class="input-group">
  	  <label>Copy Recheck</label>
  	  <input type="number" name="num_of_section" value="<?php echo $id; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Class Test</label>
  	  <input type="number" name="num_of_section" value="<?php echo $id; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Tabulation</label>
  	  <input type="number" name="num_of_section" value="<?php echo $id; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Moderation</label>
  	  <input type="number" name="num_of_section" value="<?php echo $id; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Thesis</label>
  	  <input type="number" name="num_of_section" value="<?php echo $id; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Term Paper</label>
  	  <input type="number" name="num_of_section" value="<?php echo $id; ?>">
  	</div>
		<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Update</button>
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