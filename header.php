<?php session_start();?>
<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style_header.css">
</head>
<body>
<div class="bg">
<img src="Pictures/logo.png" width="150">
<h1><span>UNIVERSITATEA "LUCIAN BLAGA" SIBIU</span></h1>

<h2><span>Facultatea de &#536tiin&#539e Economice</span></h2>
<br><br>
<header>
<div class="logo">Bine ati venit!</div>
<nav>
	<ul>
		<li><a href="acasa.php" class="active">Acasa</a></li>
		<li><a href="despre.php">Despre</a></li>
		<li><a href="#">Studenti</a></li>
		<li><a href="despre_profesori.php">Profesori</a></li>
		<li><a href="contact.php">Contact</a></li>
	</ul>
</nav>
<div class="menu-toggle"><i class="fa fa-bars aria-hidden="true"></i></div>


</header>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.menu-toggle').click(function(){
			$('nav').toggleClass('active')
		})
	})
	
</script>

</body>
</html>