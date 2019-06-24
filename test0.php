<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<body>
<?php include_once 'header.php';?>
<br><br>
<div class="container">
<form action="test.php" method="post">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary" type="button">Next</label>
  </div>
  <select name="alege_ziua" class="custom-select" id="inputGroupSelect01">
   <option selected>Alegeti o zi...</option>

	<?php
	include 'dbh.php';
	$sql = "SELECT * FROM zile WHERE id_zi > 0";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)):;
	?>
	<option><?php echo $row['Denumire'];?></option>
	<?php endwhile ?>
  </select>
</div>

<button type="submit" name="go">Next</button>
</form>
</div>
<br>
<?php include_once 'footer.php';?>

</body>
</html>