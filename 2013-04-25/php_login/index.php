<?php

session_start();

if(!is_session()) {
	include 'login_form.php';
}

// Access database and create connection resource
$dbcreds = array(
	'name' => 'uastutorial',
	'host' => 'localhost',
	'user' => 'UASTutorial',
	'pass' => 'uas_tutorial'
);

// Create database connection resource
$conn = mysqli_connect($dbcreds['host'], $dbcreds['user'], $dbcreds['pass'], $dbcreds['name']);

if(!$conn) {
	die("DATABASE IS BROKEN!!");
}

// mysqli_query($conn, "INSERT INTO users VALUES ('', 'sameer', 'is_a_cakeeater')");

print '<pre>'.print_r($_POST, TRUE).'</pre>';

if($_POST && !is_session()) {
	
	if(isset($_POST['username']) && isset($_POST['password'])) {
		$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '".$_POST['username']."'");
		
		if(!$result) {
			die('User not found!');
		}
		$user = mysqli_fetch_assoc($result);

		if($user['password'] == md5($_POST['password'])) {
			$_SESSION['mylogin'] = '12345';
		} else {
			die('INVALID PASSWORD!!');
		}
	}
}

function is_session(){
	if($_SESSION['mylogin'] == '12345') {
		return TRUE;
	} else {
		return FALSE;
	}
}
?>

<?php if(is_session()): ?>
	<h2>You are now logged in!</h2>
<?php endif; ?>


This is my index file.