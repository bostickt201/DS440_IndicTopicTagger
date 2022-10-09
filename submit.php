<?
      $fname = $lname = $email = "";
      if($_SERVER["REQUEST_METHOD"] == "GET"){
          $fname = test_input($_GET["fname"]);
          $lname = test_input($_GET["lname"]);
          $email = test_input($_GET["email"]);
      }

      if($user != ""){
          $conn = mysqli_init();
          mysqli_ssl_set($conn,NULL,NULL, "/home/site/certs/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
          mysqli_real_connect($conn, 'teambuilder.mysql.database.azure.com', 'Team10admin', 'hLGV3FisTb7P39z', 'teambuilder', 3306, MYSQLI_CLIENT_SSL);
          $tsql= "INSERT INTO teambuilder (Fname,Lname,Email)
            VALUES ('$fname','$lname','$email')";
            $conn->exec($tsql);
            echo "Success";
          }else{
             echo "Passwords Didn't Match!";
          }
    }
      //verifies that the information inputed is safe
      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>
