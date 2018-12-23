<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Instructor_Home</title>
	<link href="index.css" rel="stylesheet" type="text/css">
	<link href="Logout.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="header">
	<center><h1>Welcome Instructor <?php echo $_SESSION['username']; ?> ! </h1><center/>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
    
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
  	 

<div class="button">
	<center><p><a href="MakeQuestion.php?logout='1'" style="color: white;">Make Question<a/><p/><center/>
</div>  	
<br/>
<div class="button">
	<center><p><a href="Moderation.php?logout='1'" style="color: white;">Moderation<a/> <p><center/>
</div> 
<br/>
<div class="button">
	<center><p><a href="CTQuestion.php?logout='1'" style="color: white;">Class Test<a/> <p><center/>
</div> 
<br/>
<div class="button">
	<center><p><a href="Tabulation.php?logout='1'" style="color: white;">Tabulation<a/> <p><center/>
</div> 
<br/> 
<div class="button">
	<center><p><a href="CopyCheck.php?logout='1'" style="color: white;">Copy Check<a/> <p><center/>
</div> 
<br/> 
<div class="button">
	<center><p><a href="CopyCheck.php?logout='1'" style="color: white;">Copy Recheck<a/> <p><center/>
</div> 
<br/> 
<div class="button">
	<center><p><a href="CopyCheck.php?logout='1'" style="color: white;">Lab Test<a/> <p><center/>
</div> 
<br/> 
<div class="button">
	<center><p><a href="CopyCheck.php?logout='1'" style="color: white;">Oral Test<a/> <p><center/>
</div>  	
<br/> 
<div class="button">
	<center><p><a href="CopyCheck.php?logout='1'" style="color: white;">Induustrial Training<a/> <p><center/>
</div> 	
 
 <div  class="Logout">
  <center>
   <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	 <a href="index.php?logout='1'" style="color: white;font-size:20px;margin:5px;">logout</a>
    <?php endif ?>
  <center/>
 </div>
 <br/>
  <div  class="ShowForm">
  <center>
    	 <a href="ShowForm.php" style="color: white;font-size:20px;margin:5px;">Show Form</a>
  <center/>
 </div>

		
</body>
</html>