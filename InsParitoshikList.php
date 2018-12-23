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
	<center><h1>Welcome Admin <?php echo $_SESSION['username']; ?> ! </h1><center/>
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
	<center><p><a href="ShowForm.php?logout='1'" style="color: white;">Lec. Rubaet<a/><p/><center/>
</div>  	
<br/>
<div class="button">
	<center><p><a href="ShowForm.php?logout='1'" style="color: white;">Lec. Jannat<a/> <p><center/>
</div> 
<br/>
<div class="button">
	<center><p><a href="ShowForm.php?logout='1'" style="color: white;">Lec. Zinia<a/> <p><center/>
</div> 
<br/>
<div class="button">
	<center><p><a href="ShowForm.php?logout='1'" style="color: white;">Lec. Nabila<a/> <p><center/>
</div> 
<br/>  	
 
 <div  class="Logout">
  <center>
   <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	 <a href="index.php?logout='1'" style="color: white;font-size:20px;margin:5px;">logout</a>
    <?php endif ?>
  <center/>
 </div>
 <br/>
  

		
</body>
</html>