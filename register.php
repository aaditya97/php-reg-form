<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "USER";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO regis (UserName, Email, Password)
VALUES ('$_POST[username]','$_POST[email]','$_POST[password]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}






$conn->close();
?>  



<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password">
  	</div>
  	<div class="input-group">
		
		<?php
if (isset($_POST['submit'])){
  header("Location: table.php");
}
?>
<form id="" action=" . <?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	 <input type="submit" class="submit" name="submit" value="Register" target="_blank" />	 
</form>
		 <p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  	</div>
  	
  </form>
</body>
</html>
