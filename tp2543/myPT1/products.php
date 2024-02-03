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
      <input name="pid" type="text"> <br>
      Name
      <input name="name" type="text"> <br>
      Price
      <input name="price" type="text"> <br>
      Brand
      <select name="brand">
        <option value="Domyos">Domyos</option>
        <option value="Corength">Corength</option>
        <option value="Nyamba">Nyamba</option>
      </select> <br>
      Type
      <select name="Type">

        <option value="Weight Bench">Weight Bench</option>
        <option value="Pull Up Bar">Pull Up Bar</option>
        <option value="Abdominal Trainers">Abdominal Trainers</option>
        <option value="Exercise bike & Elliptical">Exercise bike & Elliptical</option>
        <option value="Dumbbells">Dumbbells</option>

      </select> <br>

      Specification
      <select name="Specification">

        <option value="Gym Workout">Gym Workout</option>
        <option value="Home Workout">Home Workout</option>
      </select> <br>


      <button type="submit" name="create">Create</button>
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
      </tr>

      <tr>
        <td>A101</td>
        <td>Reinforced inclined bench 90</td>
        <td>459</td>
        <td>Domyos</td>
        <td>Weight Bench</td>
        <td>Gym Workout</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>A102</td>
        <td>Weight training rack</td>
        <td>599</td>
        <td>Domyos</td>
        <td>Weight Bench</td>
        <td>Gym Workout</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>A103</td>
        <td>Adjustable dip bar training station 100</td>
        <td>299</td>
        <td>Corength</td>
        <td>Weight Bench</td>
        <td>Home Workout</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>A104</td>
        <td>Strength training pull-up bar 900</td>
        <td>109</td>
        <td>Domyos</td>
        <td>Pull Up Bar</td>
        <td>Gym Workout</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>A105</td>
        <td>Lockable pull-up bar 100cm</td>
        <td>99</td>
        <td>Corength</td>
        <td>Pull Up Bar</td>
        <td>Home Workout</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>A106</td>
        <td>Reversible balance station</td>
        <td>299</td>
        <td>Nyamba</td>
        <td>Abdominal Trainers</td>
        <td>Gym Workout</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>A107</td>
        <td>Ab wheel roller cross training</td>
        <td>29</td>
        <td>Domyos</td>
        <td>Abdominal Trainers</td>
        <td>Home Workout</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>A108</td>
        <td>Evolving ab wheel with mat</td>
        <td>459</td>
        <td>Corength</td>
        <td>Abdominal Trainers</td>
        <td>Gym Workout</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>A109</td>
        <td>Exercise bike eb 120 gym</td>
        <td>590</td>
        <td>Domyos</td>
        <td>Exercise bike & Elliptical</td>
        <td>Gym Workout</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>A110</td>
        <td>Elliptical  trainer el 100</td>
        <td>579</td>
        <td>Domyos</td>
        <td>Exercise bike & Elliptical</td>
        <td>Gym Workout</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>A111</td>
        <td>Dumbbells twin pack 5kg x2 pilate</td>
        <td>79</td>
        <td>Nyamba</td>
        <td>Dumbbells</td>
        <td>Gym Workout</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>A112</td>
        <td>Dumbbells twin pack 2kg x2 pilates</td>
        <td>39</td>
        <td>Nyamba</td>
        <td>Dumbbells</td>
        <td>Gym Workout</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>

    </table>
  </center>
</body>
</html>