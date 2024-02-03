<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['name'])) {
  header('Location: login.php');
  exit;
}
if($_SESSION['level'] == 'Normal Staff')
  header('location:index.php');
include_once 'database.php';
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
//Create
if (isset($_POST['create'])) {
 
  try {
 
    $stmt = $conn->prepare("INSERT INTO tbl_staffs_a179830_pt2(fld_staff_id, fld_staff_name, 
      fld_staff_gender, fld_staff_phone,fld_staff_position, fld_staff_email, fld_staff_password, fld_staff_level) VALUES(:sid, :name, :gender,
      :phone, :position, :email, :password, :level)");
   
    $stmt->bindParam(':sid', $sid, PDO::PARAM_STR);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':position', $position, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    $stmt->bindParam(':level', $level, PDO::PARAM_STR);
       
    $sid = $_POST['sid'];
    $name = $_POST['name'];
    $gender =  $_POST['gender'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $_POST['level'];
         
    $stmt->execute();
    header("Location: staffs.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Update
if (isset($_POST['update'])) {
   
  try {
 
    $stmt = $conn->prepare("UPDATE tbl_staffs_a179830_pt2 SET
      fld_staff_id = :sid, fld_staff_name = :name,
       fld_staff_gender = :gender,
      fld_staff_phone = :phone, fld_staff_position = :position, fld_staff_email = :email, fld_staff_password = :password, fld_staff_level = :level
      WHERE fld_staff_id = :oldsid");
   
    $stmt->bindParam(':sid', $sid, PDO::PARAM_STR);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':position', $position, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password, PDO::PARAM_STR);
    $stmt->bindParam(':level', $level, PDO::PARAM_STR);
    $stmt->bindParam(':oldsid', $oldsid, PDO::PARAM_STR);
       
    $sid = $_POST['sid'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $oldsid = $_POST['oldsid'];
         
    $stmt->execute();
 
    header("Location: staffs.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Delete
if (isset($_GET['delete'])) {
 
  try {
 
    $stmt = $conn->prepare("DELETE FROM tbl_staffs_a179830_pt2 where fld_staff_id = :sid");
   
    $stmt->bindParam(':sid', $sid, PDO::PARAM_STR);
       
    $sid = $_GET['delete'];
     
    $stmt->execute();
 
    header("Location: staffs.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Edit
if (isset($_GET['edit'])) {
   
  try {
 
    $stmt = $conn->prepare("SELECT * FROM tbl_staffs_a179830_pt2 where fld_staff_id = :sid");
   
    $stmt->bindParam(':sid', $sid, PDO::PARAM_STR);
       
    $sid = $_GET['edit'];
     
    $stmt->execute();
 
    $editrow = $stmt->fetch(PDO::FETCH_ASSOC);
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
  $conn = null;
 
?>