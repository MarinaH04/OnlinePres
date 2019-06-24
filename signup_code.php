<?php
if(isset($_POST['Register'])){
	include_once 'dbh.php';
	//pentru a transfera orice scrie utilizatorul (chiar si cod) in string/text :)
	//folosit pentru siguranta site-ului
	$first = mysqli_real_escape_string($conn, $_POST['firstname']);
	$last = mysqli_real_escape_string($conn, $_POST['lastname']);
	$codm = mysqli_real_escape_string($conn, $_POST['codm']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['username']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);
	
	//error handlers
	//check for empty fields
	if(empty($first)|| empty($last)|| empty($email) || empty($uid) || empty ($pwd)){
		header("Location: continut.php?emptyfields");
		exit();
	}
	else{
		//check if input character are valid
		if(!preg_match("/^[a-zA-Z]*$/", $first)|| !preg_match("/^[a-zA-Z]*$/", $first)){
			header("Location: continut.php?signup=invalid");
			exit();
		}
		else{
			//check if email is valid
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location: continut.php?signup=email");
			exit();
			}
			else {
				$sql = "SELECT * FROM student WHERE s_username='$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				if($resultCheck > 0){
					header("Location: continut.php?signup=usertaken");
					exit();
				}
				else {
					//hashing the password
					$hashedPWD = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
		$sql = "INSERT INTO prof (firstname, lastname,cod_materie, email, p_username, p_password) VALUES ('$first', '$last', '$codm', '$email', '$uid', '$hashedPWD');";
		$result = mysqli_query($conn, $sql);
		//mysqli_query($conn, $sql);
		header("Location: continut.php?signup=success");
		exit();
				}
			}
		}
	}
}
else {
	header("Location: continut.php");
	exit();
}
//https://www.youtube.com/watch?v=xb8aad4MRx8
?>