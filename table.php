<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "USER";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$result = mysqli_query($conn,"SELECT * FROM regis");


echo "<table border='1'>
<tr>
<th>UserName</th>
<th>Email</th>
<th>Password</th>
</tr>";



while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row[UserName] . "</td>";
echo "<td>" . $row[Email] . "</td>";
echo "<td>" . $row[Password].md5($password). "</td>";
echo "</tr>";
}
echo "</table>";

?>