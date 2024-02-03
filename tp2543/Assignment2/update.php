<?php
 
if (isset($_POST['edit_form'])) {
 
  include "db.php";
 
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
    $stmt = $conn->prepare("UPDATE myguestbook2 SET user = :name, email = :email, comment = :comment, findme = :findme, frontpage = :frontpage, formpage = :formpage, userpage = :userpage WHERE id = :record_id");
 
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':findme', $findme, PDO::PARAM_STR);
    $stmt->bindParam(':frontpage', $frontpage, PDO::PARAM_STR);
    $stmt->bindParam(':formpage', $formpage, PDO::PARAM_STR);
    $stmt->bindParam(':userpage', $userpage, PDO::PARAM_STR);
    $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
    $stmt->bindParam(':record_id', $id, PDO::PARAM_INT);
       
    $name = $_POST['name'];
    $email = $_POST['email'];
    $findme = $_POST['findme'];
    $comment = $_POST['comment'];
    $id = $_POST['id'];

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