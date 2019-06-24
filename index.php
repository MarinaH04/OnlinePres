<!DOCTYPE html>
<html lang="en">
<head>
<title>Pagina principala</title>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
    margin: 0;
	padding: 0;
	
}

.bg {
	background-image: url("Pictures/index.jpg");
	height: 100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	text-align: center;
}
.titlu {
	display: inline-block;
	border: 5px solid #8B4513;
	background-color: gray;
	opacity: 0.7;
	font-size: 20px;
	padding: 6px;
	text-align: center;
	margin-top: 10%;
}
.titlu:hover {
	opacity: 0.9;
}
.titlu:hover .ascuns {
	display: block;
}
.prof {
float: left;
margin-left: 5%;
width: 40%;
}
.prof:hover {
	color: white;
	cursor: pointer;
}
.student {
	float: right;
	margin-right: 5%;
	width: 40%;
}
.student:hover {
	color: white;
	cursor: pointer;
}
.ascuns {
	display: none;
}
.formular {
	display: none;
}
.formular1 {
	display: none;
}
.formular_afis {
	display: block;
	width: 100%;
	margin: 0px auto;
}
.formular_afis input {
	width: 100%;
	box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
	height: 30px;
	margin-bottom: 10px;
	padding: 0 20px 0 30px;
	
}

.formular_afis input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 5px -5px no-repeat;
    background-size: 18px 80px;
}

.formular_afis input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 5px -5px no-repeat;
    background-size: 18px 80px;
}

.formular_afis input:active, .formular_afis input:focus {
    border: 1px solid #1a0447;
}
.formular_afis button {
	width: 100%;
	cursor: pointer;
	border-radius: 5px;
    border: 2px solid #5B3C11;
	height: 30px;
	background: #99512B;
}
.formular_afis button:hover {
	background: #582900;
	color: white;
}

</style>
</head>
<body>
<div class="bg">
<div class = "titlu"><b>
<h1>Universitatea Lucian Blaga Sibiu</h1>
<h2>Facultatea de &#350;tiin&#355;e Economice</b><br></h2>
<div class = "ascuns">
<hr>
V&#259; rug&#259;m s&#259; v&#259; autentifica&#355;i:<br>
<div class="prof">
	<p onclick = "arata()">Profesor</p>
	<div class="formular">
	<form method="post" action="login_code.php" name="loginform">
		<input type="text" id="username" placeholder="Username" name="username"></input><br>
		<input type="password" id = "password" placeholder="Parola" name="password"></input><br>
		<button type="submit" name="login">Intra in cont!</button>
	</form>
	</div>
</div>

<div class="student">
	<p onclick = "arata1()">Student</p>
	<div class = "formular1">
	<form method="post" action="login_codes.php" name="loginform">
		<input type="text" id="username" placeholder="Username" name="s_usn"></input><br>
		<input type="password" id="password" placeholder="Parola" name="s_pwd"></input><br>
		<button type="submit" name="login">Intra in cont</button><br>
	</form>
	</div>
</div><br><br>

</div>
</div>

</div>
<script>
var formular_prof = document.getElementsByClassName("formular")[0];
var formular_stud = document.getElementsByClassName("formular1")[0];

var arata = function(){	
	formular_prof.className = "formular_afis";
	formular_stud.className = "formular1";
}
var arata1 = function(){
	formular_stud.className = "formular_afis";
	formular_prof.className = "formular";
}
</script>
</body>

</html>