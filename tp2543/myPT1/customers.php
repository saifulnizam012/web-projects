<!DOCTYPE html>
<html>
<head>
  <title>My Gym Equipment Ordering System : Customers</title>
</head>
<body>
  <center>
    <a href="index.php">Home</a> |
    <a href="products.php">Products</a> |
    <a href="customers.php">Customers</a> |
    <a href="staffs.php">Staffs</a> |
    <a href="orders.php">Orders</a>
    <hr>
    <form action="customers.php" method="post">
      Customer ID
      <input name="cid" type="text"> <br>
      Name
      <input name="name" type="text"> <br>
      Gender
      <input name="gender" type="radio" value="Male"> Male
      <input name="gender" type="radio" value="Female"> Female <br>
      Phone Number
      <input name="phone" type="text"> <br>
      Address
      <input name="address" type="text"> <br>
      <button type="submit" name="create">Create</button>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Customer ID</td>
        <td>Name</td>
        <td>Gender</td>
        <td>Phone Number</td>
        <td>Address</td>
        <td></td>
      </tr>

      <tr>
        <td>C201</td>
        <td>Ali Mansur</td>
        <td>Male</td>
        <td>017-1283746</td>
        <td>39/B7 Jalan Ampang, Kuala Lumpur</td>
        <td>
          <a href="customers.php">Edit</a>
          <a href="customers.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>C202</td>
        <td>Siti Amida</td>
        <td>Female</td>
        <td>019-9283902</td>
        <td>15, Seksyen 4 Shah Alam</td>
        <td>
          <a href="customers.php">Edit</a>
          <a href="customers.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>C203</td>
        <td>Bulya</td>
        <td>Male</td>
        <td>017-8273681</td>
        <td>9, Jln Bukit Raja, Selangor</td>
        <td>
          <a href="customers.php">Edit</a>
          <a href="customers.php">Delete</a>
        </td>
      </tr>

    </table>
  </center>
</body>
</html>