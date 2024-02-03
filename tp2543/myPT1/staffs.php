<!DOCTYPE html>
<html>
<head>
  <title>My Gym Equipment Ordering System : Staffs</title>
</head>
<body>
  <center>
    <a href="index.php">Home</a> |
    <a href="products.php">Products</a> |
    <a href="customers.php">Customers</a> |
    <a href="staffs.php">Staffs</a> |
    <a href="orders.php">Orders</a>
    <hr>
    <form action="staffs.php" method="post">
      Staff ID
      <input name="sid" type="text"> <br>
      Name
      <input name="name" type="text"> <br>
      Gender
      <input name="gender" type="radio" value="Male"> Male
      <input name="gender" type="radio" value="Female"> Female <br>
      Phone Number
      <input name="phone" type="text"> <br>
      Position
      <input name="position" type="text"> <br>
      Email Address
      <input name="email" type="text"> <br>
      <button type="submit" name="create">Create</button>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Staff ID</td>
        <td>Name</td>
        <td>Gender</td>
        <td>Phone Number</td>
        <td>Position</td>
        <td>Email Address</td>
        <td></td>
      </tr>

      <tr>
        <td>S101</td>
        <td>Usman</td>
        <td>Male</td>
        <td>019-7581293</td>
        <td>Manager</td>
        <td>Usman00@gmail.com</td>
        <td>
          <a href="staffs.php">Edit</a>
          <a href="staffs.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>S102</td>
        <td>Alif Iskandar</td>
        <td>Male</td>
        <td>017-5673854</td>
        <td>Store Associate</td>
        <td>AlifIskandar@gmail.com</td>
        <td>
          <a href="staffs.php">Edit</a>
          <a href="staffs.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>S103</td>
        <td>Umaira</td>
        <td>Female</td>
        <td>019-9903781</td>
        <td>Store Associate</td>
        <td>Umaira123@gmail.com</td>
        <td>
          <a href="staffs.php">Edit</a>
          <a href="staffs.php">Delete</a>
        </td>
      </tr>

      </tr>
    </table>
  </center>
</body>
</html>