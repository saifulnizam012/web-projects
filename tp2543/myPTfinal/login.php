 <?php
 session_start();
 include_once 'database.php';

 $mysqli = new mysqli("$servername","$username","$password","$dbname");
 if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];
  $select = "SELECT * FROM tbl_staffs_a179830_pt2 WHERE fld_staff_id = '$username' AND fld_staff_password = '$password'";

  $result = $mysqli -> query($select);

  if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_array($result);
    $_SESSION['name'] = $row['fld_staff_name'];

    if($row['fld_staff_level']=='Admin')
      $_SESSION['level'] = 'Admin';

    elseif($row['fld_staff_level']=='Supervisor')
      $_SESSION['level'] = 'Supervisor';

    elseif($row['fld_staff_level']=='Normal Staff')
      $_SESSION['level'] = 'Normal Staff';

    header('location:index.php');
  }
  elseif(empty($username)AND empty($password)){
    $error[] = 'Please enter your Staff ID and password';
  }
  else
    $error[] = 'Incorrect Staff ID and password!';

}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GymGuys</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="loginstyle.css" rel="stylesheet">

</head>
<body>
  <!-- partial:index.partial.html -->
  <div class="login-form">

    <form method="post" name="signin-form">
      <center>
        <img src="logo.png" width="500" height="140">
      </center>
      <h1>Welcome to GymGuys</h1>
      <h2></h2>
      <center>
        <?php
        if(isset($error))
        {
          foreach($error as $error)
            echo $error;
        }?>
      </center>
      <div class="content">
        <div class="input-field"> 
        </select>
      </div>
      <div class="input-field">
        <input type="text" name="username" placeholder="Staff ID">
      </div>
      <div class="input-field">
        <input type="password" name="password" placeholder="Password">
      </div>
      <div class="action">
        <button type="submit" value="Login" name="submit">Login</button>
      </div>
    </form>
  </div>
</body>
</html>
