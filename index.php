 <!DOCTYPE html>
<html>
<body>
<h1>HOME PAGE</h1>
 <a href="survey.php">survey</a> 
 </br>
  <a href="team.php">team</a> 
   </br>
   
   
<?php
echo "php is working";
echo "<br>";
echo "php is working good";
echo "<br>";

$servername = "teambuilder.mysql.database.azure.com";
$username = "Team10admin";
$password = "hLGV3FisTb7P39z";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>

</body>
</html> 
