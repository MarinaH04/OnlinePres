
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include_once 'header.php';
?>
<div class="container-fluid">
<?php
if(isset($_SESSION['p_uid'])){
	$cod = $_SESSION['cod_m'];
	echo 'Bine ati venit, '.$_SESSION['p_first'].'!<br>';
	echo '<b>Studenti</b><br>';
	include 'dbh.php';
$sql = "SELECT student.firstname, student.lastname FROM student
	INNER JOIN prof_stud ON stud_id = id_stud 
	WHERE id_prof = $cod";
$query = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
	echo $row['firstname'].' '.$row['lastname'].'<br>';
}
	echo '<form action="logout.php" method="post"><button type="submit" name="submit">Logout</button></form>';
}
else {
echo '<p>Bine ati venit!</p>
<p>Va rugam sa intrati in contul dvs -> <a href="login.php">Login</a></p>
<p>Nu aveti inca un cont? Va rugam sa va inregistrati. -> 
<a href="signup.php">Autentificare</a></p>';
}
?>
</div>
<?php
include_once 'footer.php';
?>
</body>
</html>