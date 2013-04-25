<?php 
	session_start();

	if(!is_session()) {
		include 'login_form.php';
	}

	print '<pre>'.print_r($_POST, TRUE).'</pre>';
	
	$correct_username = 'admin';
	$correct_password = 'password';
	
if($_POST && !is_session()) {
	
	if((isset($_POST['username'])
		&& $_POST['username'] ==$correct_username)
		&& isset($_POST['password'])
		&& ($_POST['password'] == $correct_password)) {
			$_SESSION['mylogin'] = '12345';
		} else {
			print '<h1>ABYSMAL FAILURE!!!</h1>';
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