<?php

  $db_name="geoeats";
  $sql_name="root";
  $sql_pass="root";
  $server_name="http://localhost/phpmyadmin/db_structure.php?db=geoeats"
  $con=mysqli_connect($server_name, $sql_name, $sql_pass, $db_pass, $db_name);
  //Add second connection for Mac local address




if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$first_name = mysqli_real_escape_string($link, $_REQUEST['F_Name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['L_Name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);

$sql = "INSERT INTO ACCOUNT (F_Name, L_Name, Email, Password) VALUES ('F_Name, 'L_Name', 'email', 'password')";
if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

?>
