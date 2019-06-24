<?php

session_start();
if(isset($_POST['login'])){
	include 'dbh.php';
	
	$uid = mysqli_real_escape_string($conn, $_POST['s_usn']);
	$pwd = mysqli_real_escape_string($conn, $_POST['s_pwd']);
	
	if(empty($uid) || empty($pwd)){

	header("Location: continut_s.php?login=empty");
	exit();
	}
	else{
		$sql = "SELECT * FROM student WHERE s_username='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1){
			header("Location: continut_s.php?usernamenotexists");
			exit();
		}
		else {
			if($row = mysqli_fetch_assoc($result)){
				//de-hashing the password
				$hashedPwdCheck = password_verify($pwd, $row['s_password']);
				if($hashedPwdCheck == false){
					header("Location: continut_s.php?login=error");
					exit();
				} elseif($hashedPwdCheck == true){
					//log in the user here
					$_SESSION['s_id'] = $row['stud_id'];
					$_SESSION['s_first'] = $row['firstname'];
					$_SESSION['s_last'] = $row['lastname'];
					$_SESSION['s_email'] = $row['email'];
					$_SESSION['s_uid'] = $row['s_username'];
					header("Location: continut_s.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: continut_s.php?login=error");
	exit();
}
?>