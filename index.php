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
</br>
echo "php is working good";
</br>
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "/home/site/certs/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'teambuilder.mysql.database.azure.com', 'Team10admin', 'hLGV3FisTb7P39z', 'teambuilder', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>

</body>
</html> 