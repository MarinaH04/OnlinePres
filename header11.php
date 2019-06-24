<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
.bg { 
    /* The image used */
    background-image: url("Pictures/index.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
} 
</style>
</head>
<body>
<div class="container-fluid">
<div class="bg">
<img src="Pictures/logo.png">
<h1 class="text-center text-white" style="background-color: #000033">UNIVERSITATEA "LUCIAN BLAGA" SIBIU</h1>


<h2 class="text-white text-center" style="background-color: #000066">Facultatea de &#536tiin&#539e Economice</h2>
<br><br>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000033">
  <a class="navbar-brand" href="index.php">Acasa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="despre.php">Despre <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="continut_s.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Studenti
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="logins.php">Autentificare</a>
          <a class="dropdown-item" href="#">Despre</a>
        </div>
		<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="continut.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profesori
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="login.php">Autentificare</a>
          <a class="dropdown-item" href="despre_profesori.php">Despre</a>
         
        </div>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a>
      </li>
    </ul>
   
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
	<?php if(isset($_SESSION['p_uid'])){
	echo '<a class="nav-link" href="#">Bine ati venit, '.$_SESSION['p_first'].'!</a>';}
	    elseif(isset($_SESSION['s_uid'])){
	echo '<a class="nav-link" href="#">Bine ai venit, '.$_SESSION['s_first'].'!</a>';		
		}
		else { echo '<a class="nav-link" href="#">Login</a>';}
		?>
	</li>
	<li class="nav-item">
      <a class="nav-link" href="#">Sign Out</a>
    </li>
	</ul>
   
  </div>
</nav>
</div>
</div>



</body>
</html>