<?php
  include_once 'products_crud.php';
?>
 
<!DOCTYPE html>
<html>
<head>
  <title>My Gym Equipment Ordering System : Products</title>
</head>
<body>
  <center>
    <a href="index.php">Home</a> |
    <a href="products.php">Products</a> |
    <a href="customers.php">Customers</a> |
    <a href="staffs.php">Staffs</a> |
    <a href="orders.php">Orders</a>
    <hr>
    <form action="products.php" method="post">
      Product ID
      <input name="pid" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_id']; ?>"> <br>
      Name
      <input name="name" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_name']; ?>"> <br>
      Price
      <input name="price" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_price']; ?>"> <br>

      Brand
      <select name="brand">
        <option value="Domyos" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Domyos") echo "selected"; ?>>Domyos</option>
        <option value="Corength" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Corength") echo "selected"; ?>>Corength</option>
        <option value="Nyamba" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Nyamba") echo "selected"; ?>>Nyamba</option>
      </select> <br>

      Type
      <select name="type">
        <option value="Weight Bench" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Weight Bench") echo "selected"; ?>>Weight Bench</option>
        <option value="Pull Up Bar" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Pull Up Bar") echo "selected"; ?>>Pull Up Bar</option>
        <option value="Abdominal Trainers" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Abdominal Trainers") echo "selected"; ?>>Abdominal Trainers</option>
        <option value="Exercise bike & Elliptical" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Exercise bike & Elliptical") echo "selected"; ?>>Exercise bike & Elliptical</option>
        <option value="Dumbbells" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Dumbbells") echo "selected"; ?>>Dumbbells</option>
      </select> <br>

      Specification
      <select name="spec">
        <option value="Gym Workout" <?php if(isset($_GET['edit'])) if($editrow['fld_product_specification']=="Gym Workout") echo "selected"; ?>>Gym Workout</option>
        <option value="Home Workout" <?php if(isset($_GET['edit'])) if($editrow['fld_product_specification']=="Home Workout") echo "selected"; ?>>Home Workout</option>
        </select> <br>

      <?php if (isset($_GET['edit'])) { ?>
      <input type="hidden" name="oldpid" value="<?php echo $editrow['fld_product_id']; ?>">
      <button type="submit" name="update">Update</button>
      <?php } else { ?>
      <button type="submit" name="create">Create</button>
      <?php } ?>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Product ID</td>
        <td>Name</td>
        <td>Price</td>
        <td>Brand</td>
        <td>Type</td>
        <td>Specification</td>

        <td></td>
      </tr>
      <?php
      // Read
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM tbl_products_a179830_pt2");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?>   
      <tr>
        <td><?php echo $readrow['fld_product_id']; ?></td>
        <td><?php echo $readrow['fld_product_name']; ?></td>
        <td><?php echo $readrow['fld_product_price']; ?></td>
        <td><?php echo $readrow['fld_product_brand']; ?></td>
        <td><?php echo $readrow['fld_product_type']; ?></td>
        <td><?php echo $readrow['fld_product_specification']; ?></td>
        <td>
          <a href="products_details.php?pid=<?php echo $readrow['fld_product_id']; ?>">Details</a>
          <a href="products.php?edit=<?php echo $readrow['fld_product_id']; ?>">Edit</a>
          <a href="products.php?delete=<?php echo $readrow['fld_product_id']; ?>" onclick="return confirm('Are you sure to delete?');">Delete</a>
        </td>
      </tr>
      <?php
      }
      $conn = null;
      ?>
 
    </table>
  </center>
</body>
</html>