<?php

session_start();
if(isset($_POST['login'])){
	include 'dbh.php';
	
	$uid = mysqli_real_escape_string($conn, $_POST['username']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);
	
	if(empty($uid) || empty($pwd)){

	header("Location: continut.php?login=empty");
	exit();
	}
	else{
		$sql = "SELECT * FROM prof WHERE p_username='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1){
			header("Location: continut.php?usernamenotexists");
			exit();
		}
		else {
			if($row = mysqli_fetch_assoc($result)){
				//de-hashing the password
				$hashedPwdCheck = password_verify($pwd, $row['p_password']);
				if($hashedPwdCheck == false){
					header("Location: continut.php?login=error");
					exit();
				} elseif($hashedPwdCheck == true){
					//log in the user here
					$_SESSION['p_id'] = $row['id_prof'];
					$_SESSION['p_first'] = $row['firstname'];
					$_SESSION['p_last'] = $row['lastname'];
					$_SESSION['cod_m'] = $row['cod_materie'];
					$_SESSION['p_email'] = $row['email'];
					$_SESSION['p_uid'] = $row['p_username'];
					header("Location: test0.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: continut.php?login=error");
	exit();
}
?>