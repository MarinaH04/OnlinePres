
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>
<?php include_once 'header.php';?>
<br><br>

<form action="test_code.php" method="post">

<?php
$prof = $_SESSION['p_id'];
include 'dbh.php';
/*$sql = "SELECT student.stud_id, student.firstname, student.lastname FROM student
	INNER JOIN prof_stud ON stud_id = id_stud 
	WHERE id_prof = 1";
$query = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){?>
<option>
<?php echo $row['stud_id'].': '.$row['firstname'].' '.$row['lastname'].'<br>';}
?></option>
*/
$ziua = $_POST['alege_ziua'];
?>
<div class="container">
<?php echo $ziua;
$alege = "SELECT id_zi FROM zile WHERE Denumire = '$ziua'";
$alegerez = mysqli_query($conn, $alege);
$rand = mysqli_fetch_assoc($alegerez);
$rand1 = $rand['id_zi'];
?>

<input type="text" name="ziua" value=<?php echo $rand1;?>></input>
<div class="table-responsive">
<table class="table table-bordered">
<tr><td>ID_student</td><td>Studenti</td><td>Prezenta</td></tr>
<?php
$i = 0; $j = 10;  
$sql1 = "SELECT student.stud_id, student.firstname, student.lastname FROM student
	INNER JOIN prof_stud ON stud_id = id_stud 
	WHERE id_prof = $prof";
$query1 = mysqli_query($conn, $sql1);
while($row1 = mysqli_fetch_array($query1, MYSQLI_ASSOC)):;?>
<tr><td><input type="text" name=<?php echo $i; ?> value=<?php echo $row1['stud_id'];?> readonly></input></td>
<td><input type="text" value=<?php echo $row1['firstname'].'.'.$row1['lastname'];?> readonly></input>
</td><td><select name=<?php echo $j; ?>><option>-</option><option>P</option><option>A</option></select></td></tr>
<?php
$i = $i+1;
$j = $j+1;
?>
<?php endwhile ?>
</table>
</div>
<?php 
$m = $i;
$n = $j;
?>

<input type="text" name="Totalstudenti" value=<?php echo $m;?> readonly></input>
<input type="text" name="Prez" value=<?php echo $n;?> readonly></input>
<button type="submit" name="submit">Salvare</button>
</form>
<form action="logout.php" method="post"><button type="submit" name="submit">Logout</button></form>
</div>
<br><br>
<?php include_once 'footer.php';?>
</body>
</html>