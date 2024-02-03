<?php
 
if (isset($_POST['add_form'])) {
 
  include "db.php";
 
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
      // Prepare the SQL statement
      $stmt = $conn->prepare("INSERT INTO myguestbook2(user, email, findme, frontpage, formpage, userpage, postdate, posttime,
        comment) VALUES (:user, :email, :findme, :frontpage, :formpage, :userpage, :pdate, :ptime, :comment)");
     
      // Bind the parameters
      $stmt->bindParam(':user', $name, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':findme', $findme, PDO::PARAM_STR);
      $stmt->bindParam(':frontpage', $frontpage, PDO::PARAM_STR);
      $stmt->bindParam(':formpage', $formpage, PDO::PARAM_STR);
      $stmt->bindParam(':userpage', $userpage, PDO::PARAM_STR);
      $stmt->bindParam(':pdate', $postdate, PDO::PARAM_STR);
      $stmt->bindParam(':ptime', $posttime, PDO::PARAM_STR);
      $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
       
      // Give value to the variables
      $name = $_POST['name'];
      $email = $_POST['email'];
      $findme = $_POST['findme'];
      $postdate = date("Y-m-d",time());
      $posttime = date("H:i:s",time());
      $comment = $_POST['comment'];

      if (isset($_POST['frontpage'])) {
        $_POST['frontpage'] = "yes";
      }
      else {
        $_POST['frontpage'] = "no";
      }
      if (isset($_POST['formpage'])) {
        $_POST['formpage'] = "yes";
      }
      else {
        $_POST['formpage'] = "no";
      }
      if (isset($_POST['userpage'])) {
        $_POST['userpage'] = "yes";
      }
      else {
        $_POST['userpage'] = "no";
      }
      $frontpage = $_POST['frontpage'];
      $formpage = $_POST['formpage'];
      $userpage = $_POST['userpage'];
     
    $stmt->execute();
 
      header("Location:list.php");
      }
 
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
 
    $conn = null;
  }
else {
  echo "Error: You have execute a wrong PHP. Please contact the web administrator.";
  die();
}
 
 ?>