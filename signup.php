<!doctype html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<link href="CSS/profi.css" rel="stylesheet">
</head>
<body background="Pictures/prof.jpg">
<br><br><br>
<div class="testbox">
<br>
  <h1>Inregistrare</h1>

  <form action="signup_code.php" method="post">
      <hr>
  
  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="firstname" id="firstname" placeholder="First name">
  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="lastname" id="lastname" placeholder="Last name">
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <select name="codm">
	<option>Selectati o materie</option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
	</select>
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="email" id="email" placeholder="Email">
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="username" id="username" placeholder="Username">
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="password" id="password" placeholder="Password">
<hr>
 
   <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
   <button type="submit" name="Register" value="Register">Register
  </form>
</div>
</body>
</html>