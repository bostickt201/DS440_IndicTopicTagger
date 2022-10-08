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
echo "php is working good";

$con = mysqli_init(); mysqli_real_connect($conn, "teambuilder.mysql.database.azure.com", "Team10admin", "hLGV3FisTb7P39z", "teambuilder", 3306, MYSQLI_CLIENT_SSL);
echo $con;
?>

</body>
</html> 
