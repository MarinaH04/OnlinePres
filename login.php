
<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<link href="CSS/login.css" rel="stylesheet">
</head>

<body background="Pictures/prof.jpg">
<br><br><br><br>
<div class="testbox">
<br><br>
    <h1>Login</h1>
<?php 
if(isset($_SESSION['s_uid'])){
	echo 'Nu se poate! Nu aveti acces!';
}
else {
	echo '   
<form method="post" action="login_code.php" name="loginform">
 <hr>
 <label id="icon" for="name"><i class="icon-user"></i></label>
    <input type="text" placeholder="Username" id="username" name="username" />
 <label id="icon" for="name"><i class="icon-shield"></i></label>
    <input type="password" placeholder="Password" id="password" name="password" />
<hr>
<br>
 <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
    <button type="submit" name="login">Submit</button>
    </form>';
}
?>

</div>
</body>

</html>