<?php
session_start();
?>
<?php
$profi = $_SESSION['p_id'];
$zi = $_POST['ziua'];
if(isset($_POST['submit'])){
	include 'dbh.php';
$i = $_POST['Totalstudenti']-1;
$j = $_POST['Prez']-1;
	while($i >= 0){
	$b = $_POST[$i];
	$c = $_POST[$j];
$id = "SELECT id_ps FROM prof_stud WHERE id_stud = $b and id_prof = $profi";
$rez_id = mysqli_query($conn, $id);
$ar = mysqli_fetch_assoc($rez_id);
$ar1 = $ar['id_ps'];
$sql = "INSERT INTO prezenta (id_ps, id_zi, prezent_a) VALUES ('$ar1', '$zi', '$c');";
$result = mysqli_query($conn, $sql);
	$i--;
	$j--;
	}
}


//echo $_POST['Totalstudenti'];}
?>
