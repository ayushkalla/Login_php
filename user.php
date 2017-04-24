<html>
<head>
</head>
<body>
<p>
<?php



      $con = mysqli_connect('127.0.0.1','root','');

      if(!$con)
      {
        echo "Not connected to the server";
      }

      if (!mysqli_select_db($con,'login')) {

        echo "Database not selected";
      }

      $name = $_POST['name'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      

      $sql = "INSERT INTO user_details (name,username,email,pass) VALUES ('$name','$username','$email','$pass')";


      if (!mysqli_query($con,$sql)) {
         echo "Not Inserted";
      }
      else {
        echo "Inserted";
      }


      // header{"refresh:2; url=clothdetails.html"};

       ?>
<p>
</body>
</html>