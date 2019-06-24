<?php
if(isset($_POST['Inregistrare'])){
	include_once 'dbh.php';
	//pentru a transfera orice scrie utilizatorul (chiar si cod) in string/text :)
	//folosit pentru siguranta site-ului
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	//error handlers
	//check for empty fields
	if(empty($first)|| empty($last)|| empty($email) || empty($uid) || empty ($pwd)){
		header("Location: continut_s.php?emptyfields");
		exit();
	}
	else{
		//check if input character are valid
		if(!preg_match("/^[a-zA-Z]*$/", $first)|| !preg_match("/^[a-zA-Z]*$/", $first)){
			header("Location: continut_s.php?signup=invalid");
			exit();
		}
		else{
			//check if email is valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location: continut_s.php?signup=email");
			exit();
			}
			else {
				$sql = "SELECT * FROM student WHERE s_username='$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				if($resultCheck > 0){
					header("Location: continut_s.php?signup=usertaken");
					exit();
				}
				else {
					//hashing the password
					$hashedPWD = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
		$sql = "INSERT INTO student (firstname, lastname, email, s_username, s_password) VALUES ('$first', '$last', '$email', '$uid', '$hashedPWD');";
		$result = mysqli_query($conn, $sql);
		//mysqli_query($conn, $sql);
		header("Location: continut_s.php?signup=success");
		exit();
				}
			}
		}
	}
}
else {
	header("Location: continut_s.php");
	exit();
}
//https://www.youtube.com/watch?v=xb8aad4MRx8
?>