<!DOCTYPE html>
<html>
<head>
  <title>My Gym Equipment Ordering System : Order Details</title>
</head>
<body>
  <center>
    <a href="index.php">Home</a> |
    <a href="products.php">Products</a> |
    <a href="customers.php">Customers</a> |
    <a href="staffs.php">Staffs</a> |
    <a href="orders.php">Orders</a>
    <hr>
    Order ID: O5603f03a9349f0.39900158<br>
    Order Date: 09-09-2015 <br>
    Staff: Alif Iskandar <br>
    Customer: Ali Mansur <br>
    <hr>
    <form action="orders_details.php" method="post">

      Product
      <select name="pid">
        <option value="A101">Reinforced inclined bench 90</option>
        <option value="A102">Weight training rack</option>
        <option value="A103">Adjustable dip bar training station 100</option>
        <option value="A104">Strength training pull-up bar 900</option>
        <option value="A105">Lockable pull-up bar 100cm</option>
        <option value="A106">Reversible balance station</option>
        <option value="A107">Ab wheel roller cross training</option>
        <option value="A108">Evolving ab wheel with mat</option>
        <option value="A109">Exercise bike eb 120 gym</option>
        <option value="A110">Elliptical  trainer el 100</option>
        <option value="A111">Dumbbells twin pack 5kg x2 pilate</option>
        <option value="A112">Dumbbells twin pack 2kg x2 pilates</option>
      </select>

      Quantity
      <input name="quantity" type="text">
      <button type="submit" name="addproduct">Add Product</button>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Order Detail ID</td>
        <td>Product</td>
        <td>Quantity</td>
        <td></td>
      </tr>
      <tr>
        <td>D5603f136f41334.84833440</td>
        <td>Reinforced inclined bench 90</td>
        <td>1</td>
        <td>
          <a href="orders_details.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>O5603f03a9349f0.39900158</td>
        <td>Weight training rack</td>
        <td>2</td>
        <td>
          <a href="orders_details.php">Delete</a>
        </td>
      </tr>
    </table>
    <hr>
    <a href="invoice.php" target="_blank">Generate Invoice</a>
  </center>
</body>
</html>