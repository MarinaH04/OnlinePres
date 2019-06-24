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
?><br><br>
<div class="container-fluid">
<br><br>
<?php
if(isset($_SESSION['s_uid'])){
$student = $_SESSION['s_id'];
include 'dbh.php';
$day = 1;
$sql = "SELECT prof.id_prof, prof.lastname, prof.firstname FROM prof
 INNER JOIN prof_stud ON prof.id_prof = prof_stud.id_prof 
 WHERE id_stud= $student";
 $query = mysqli_query($conn, $sql);?>
 <div class="container">
<table class="table table-bordered">
<tr class="bg-primary"><th rowspan=2><b>Profesori</b></th><th colspan=5>Prezenta</th></tr>
<tr class="bg-primary"><th>Luni</th><th>Marti</th><th>Miercuri</th><th>Joi</th><th>Vineri</th></tr>
<?php while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)):;?> 
	<tr>
	<td class="table-primary"> <?php echo $row['lastname'].' '.$row['firstname'];?></td>
	 <?php $id_prof = $row['id_prof'];
	while($day <= 5):;?>
	<td>
	<?php
	
	$sql1 = "SELECT prezenta.prezent_a FROM prezenta
	INNER JOIN prof_stud ON prezenta.id_ps = prof_stud.id_ps
	INNER JOIN zile ON prezenta.id_zi = zile.id_zi
	WHERE prof_stud.id_prof=$id_prof and prof_stud.id_stud = $student
	and zile.id_zi = $day";
	$query1 = mysqli_query($conn, $sql1);
	$query12 = mysqli_fetch_array($query1);
	echo $query12['prezent_a'];
	$day++; ?></td>
	<?php endwhile ?>
	<?php $day = 1;?>
	</tr>
	<?php endwhile?>
</table>

<?php echo '<form action="logouts.php" method="post"><button type="submit" class="btn btn-outline-primary" name="submit">Logout</button></form>';?>
</div>
<?php }
else {
echo '<p>Bine ai venit!</p>
<p>Te rugam sa intri in contul tau -> <a href="logins.php">Login</a></p>
<p>Nu ai inca un cont? Te rugam sa te autentifici. -> 
<a href="signup_s.php">Autentificare</a></p>';
}
?>
</div>
<br><br>
<?php
include_once 'footer.php';
?>
</body>
</html>