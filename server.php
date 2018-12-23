<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$id="";
$contnum="";
$role="";
$role1="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $id = mysqli_real_escape_string($db, $_POST['id']);
  $contnum = mysqli_real_escape_string($db, $_POST['contnum']);
  $role = mysqli_real_escape_string($db, $_POST['role']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO `users`(`ID`, `USERNAME`, `EMAIL`, `PASSWORD`, `phn_num`, `role`) VALUES 

('$id','$username','$email','$password','$contnum','$role')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
	
  	$_SESSION['success'] = "You are now logged in";
  	header('location: login.php');
  }
}

// ... 
// LOGIN USER

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
   $role = mysqli_real_escape_string($db, $_POST['role']);
  if (empty($username)) {
  	array_push($errors, "Username is required");
 }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  //$query1 = "SELECT role FROM users WHERE username='$username' AND password='$password'";
  //$results1 = mysqli_query($db, $query1);
  //$role1 = mysql_fetch_row("$results1");
  //echo $role1;
 // if ($role!=$role1[0]) {
  //	array_push($errors, "role doesn't match");
  //}

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
	//$query1 = "SELECT role FROM users WHERE username='$username' AND password='$password'";
	//$results1 = mysqli_query($db, $query1);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
	  if($role == "instructor")
	  {  header('location: index.php');exit();}
   elseif($role == "admin")
	  {  header('location: index_01.php');exit();}
   elseif($role == "varifier")
	  {  header('location: index_02.php');exit();}
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>