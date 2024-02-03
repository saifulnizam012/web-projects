<?php
 
if (isset($_GET['id'])) {
 
  include "db.php";
 
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
      $stmt = $conn->prepare("SELECT * FROM myguestbook2 WHERE id = :record_id");
      $stmt->bindParam(':record_id', $id, PDO::PARAM_INT);
      $id = $_GET['id'];
 
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
 
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

<!DOCTYPE html>
<html>
<head>
  <title>My Guestbook</title>
</head>
 
<body>
 
<form method="post" action="update.php">
  Nama :
  <input type="text" name="name" size="40" required value="<?php echo $result["user"]; ?>">
  <br>
  Email :
  <input type="text" name="email" size="25" required value="<?php echo $result["email"]; ?>">
  <br>
  How did you find me :
   <select name="findme" required>
    <option value="From a friend"<?php if ($result["findme"]=="From a friend") {echo "selected";} ?>>From a friend </option>
    <option value="I googled you"<?php if ($result["findme"]=="I googled you") {echo "selected";} ?>>I googled you </option>
    <option value="Just surf on in"<?php if ($result["findme"]=="Just surf on in") {echo "selected";} ?>>Just surf on in </option>
    <option value="From your Facebook"<?php if ($result["findme"]=="From your Facebook") {echo "selected";} ?>>From your Facebook </option>
    <option value="I clicked on ads"<?php if ($result["findme"]=="I clicked on ads") {echo "selected";} ?>>I clicked on ads </option>
  </select>
  <br>
  I like your :
  <br>
  <input type="checkbox" name="frontpage" value="Front Page" <?php if ($result["frontpage"]=="yes") {echo "checked";} ?>>
  <label for="frontpage"> Front Page </label><br>

  <input type="checkbox" name="formpage" value="Form Page"<?php if ($result["formpage"]=="yes") {echo "checked";} ?>>
  <label for="form"> Form </label><br>

  <input type="checkbox" name="userpage" value="User Interface"<?php if ($result["userpage"]=="yes") {echo "checked";} ?>>
  <label for="userpage"> User Interface </label><br>

  <br>
  Comments :<br>
  <textarea name="comment" cols="30" rows="8" required><?php echo $result["comment"]; ?></textarea>
  <br>
  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
  <input type="submit" name="edit_form" value="Modify Comment">
  <input type="reset">
  <br>
</form>
 
</body>
</html>