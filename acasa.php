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
.ascuns {
	visibility: hidden;
}
#show {
	visibility: visible;
}
.antet {
	background-color: #FFF8DC;
}
@media (max-width: 991px){
	.antet {
		margin-top: 300px;
	}
}
</style>
</head>

<body>
<?php include_once 'header.php';?>
<div class="container-fluid antet">
<br><br><br>

<h3>Noutati</h3>
<div class="row">
<div class="col">
	<b>European Young Chef Award</b>
	<img src="Pictures/gastro.jpg">
	<p>Concursul Young European Chef Award Sibiu își propune să
	atragă tineri bucătari care doresc să promoveze bucătăria
	tradițională sibiană și care se simt inspirați de 
	aceasta găsind și propunând reinterpretări ale 
	rețetelor.</p>
</div>
<div class="col"><b>Admitere 2018</b>
<img src="Pictures/admitere.jpg">
<p> Universitatea „Lucian Blaga“ din Sibiu va scoate la 
concurs un număr de 5477 locuri pentru studiile de licență 
și masterat, în sesiunea vară 2018. Dintre acestea, 3.567  
sunt locuri pentru studii de licență, 1654 reprezentând 
locuri subvenționate (fără taxă).<p id = "show">Pentru mai multe
informatii verificati site-ul oficial
</div>
<div class="col"><b>Plata online prin UMS</b>
<img src="Pictures/ums.jpg">
<p>Toți studenții, masteranzii și doctoranzii ULBS vor 
putea să-și achite online taxa de școlarizare și taxele 
administrative, după autentificarea în contul personal din 
platforma UMS, accesând secțiunea Financiar si apoi meniul  
Plăți. </p>
</div>
<div class="col"><b>”Sibiul cercetătorilor”</b>
<img src="Pictures/noapte.jpg">
<p>Universitatea ”Lucian Blaga” din Sibiu a început 
pregătirile pentru cea de-a cincea ediție a evenimentului 
Noaptea Cercetătorilor, proiect căruia anul trecut i-a fost 
decernat Premiul pentru cel mai bun proiect de tineret 
în cadrul Galei Tineretului Sibian și care în 2018 va 
avea loc pe data de 28 septembrie.</p>
</div>
</div>
</div>
<script>
var show1 = document.getElementById("show");
var Clicker1 = document.getElementById("clicker");
show1.className = "ascuns";
var ShowMe = function(){
	var show = document.getElementById("ascuns");
	show1.className = "show";
};
var Clicker = document.getElementById("clicker");
Clicker.addEventListener("click", ShowMe);
</script>
<?php include_once 'footer.php';?>
</body>
</html>