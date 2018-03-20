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


$sql = "INSERT INTO Users (UserName, Password)
VALUES ('$_POST[username]', '$_POST[password]')";

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
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
	  <?php
if (isset($_POST['submit'])){
  header("Location: table.php");
}
?>
<form id="" action=" . <?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	 <input type="submit" class="submit" name="submit" value="Login" />	 
</form>

	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  	</div>

  </form>
</body>
</html>