<?php
//Php code for data capturing
/*include_once "dbh.inc.php";

  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "INSERT INTO subcriber (email, message) VALUES ('$email','$message');";
      $result =  mysqli_query($conn, $sql);
      if(!$result) {
        echo "not inserted";
      } else {
        echo "inserted";
      }

 /*/
 try {
 /* $db = new mysqli('localhost', 'root', '', 'bakers');
} catch (Exception $exc) {
  echo $exc->getTraceAsString();
}*/

  $db = new mysqli('sql3.freemysqlhosting.net', 'sql3355041', 'SfX9vHfXxY', 'sql3355041');
} catch (Exception $exc) {
  echo $exc->getTraceAsString();
}

/*
if(isset($_POST['email'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);

  $db->query("INSERT INTO `subcriber`(`email`) VALUES ('$email');");
  header("Location: ../calm.php");

    exit();
}*/

if(isset($_POST['email'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);

  $db->query("INSERT INTO `subcribers`(`email`) VALUES ('$email');");
  header("Location: ../calm.php");

    exit();
}
  
?>