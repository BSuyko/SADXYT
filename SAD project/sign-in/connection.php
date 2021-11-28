<?php 
// user connects between php files
session_start();

//connect to database
$db = mysqli_connect('localhost','root','','xyt');

// Error
$errors = array();

//escape string
function e($val){
  global$db;
  return mysqli_real_escape_string($db,$val);
}

// function if the user is log-in or not
// function isLoggedIn()
// {
// 	if (isset($_SESSION['user'])) {
// 		return true;
// 	}else{
// 		return false;
// 	}
// }

// display error
function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

//Log-in function
function login(){
global $db, $username, $errors,$password;
// grap form values
$username = ($_POST['Email']);
$password = ($_POST['password']);

// attempt login if no errors on form
if (count($errors) == 0) {
	//$password = md5($password);

	$query = "SELECT * FROM employee WHERE BINARY Email='$username' AND Password='$password' LIMIT 1";
	$results = mysqli_query($db, $query);

	if (mysqli_num_rows($results) == 1) { // user found
		// check if user is admin or user
		$logged_in_user = mysqli_fetch_assoc($results);
		if ($logged_in_user['Position'] == '1') {

		//	$_SESSION['user'] = $logged_in_user;
		//	$_SESSION['success']  = "You are now logged in";
			header('location: ../inventory/index.php');		  
		}else {
		//	$_SESSION['user'] = $logged_in_user;
		//	$_SESSION['success']  = "You are now logged in";

			header('location: register.html');
		}
	}else {
		array_push($errors, "Wrong username/password combination");
	}
}

}
if (isset($_POST['sign_in'])) {
	login();
}

//---------------------------------------------------------------Registration
?>