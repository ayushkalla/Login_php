<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="login"; // Database name 
$tbl_name="user_details"; // Table name 

$con = mysqli_connect('127.0.0.1','root','');
// Connect to server and select databse.
//mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
//mysqli_select_db("$db_name")or die("cannot select DB");
if(!$con)
      {
        echo "Not connected to the server";
      }

      if (!mysqli_select_db($con,'login')) {

        echo "Database not selected";
      }

      $username = $_POST['username'];
      $pass = $_POST['pass'];
      
// To protect MySQL injection (more detail about MySQL injection)

$sql="SELECT * FROM $tbl_name WHERE username='$username' and pass='$pass'";
$result=mysqli_query($con, $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
echo("Login Successful");
}
else {
echo "Wrong Username or Password";
}
?>