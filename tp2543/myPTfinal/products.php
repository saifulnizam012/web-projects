<?php
include_once 'products_crud.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Gym Equipment Ordering System : Products</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>

      <?php include_once 'nav_bar.php'; ?>
      <div class="container-fluid">
        <?php if($_SESSION['level'] != "Normal Staff") { ?>
          <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
              <div class="page-header">
                <h2>Create New Product</h2>
              </div>
              <form action="products.php" method="post" class="form-horizontal">
                <!-- This is for product id -->
                <div class="form-group">
                  <label for="productid" class="col-sm-3 control-label">ID</label>
                  <div class="col-sm-9">
                    <input name="pid" type="text" class="form-control" id="productid" placeholder="Product ID" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_id']; ?>" required>
                  </div>
                </div>
                <!-- This is for product name -->
                <div class="form-group">
                  <label for="productname" class="col-sm-3 control-label">Name</label>
                  <div class="col-sm-9">
                    <input name="name" type="text" class="form-control" id="productname" placeholder="Product Name" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_name']; ?>" required>
                  </div>
                </div>
                <!-- This is for price -->
                <div class="form-group">
                  <label for="productprice" class="col-sm-3 control-label">Price</label>
                  <div class="col-sm-9">
                    <input name="price" type="number" class="form-control" id="productprice" placeholder="Product Price" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_product_price']; ?>" min="0.0" step="0.01" required>
                  </div>
                </div>

                <!-- This is for brand -->
                <div class="form-group">
                  <label for="productbrand" class="col-sm-3 control-label">Brand</label>
                  <div class="col-sm-9">
                    <select name="brand" class="form-control" id="productbrand" required>
                      <option value="">Please select</option>
                      <option value="Domyos" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Domyos") echo "selected"; ?>>Domyos</option>
                      <option value="Corength" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Corength") echo "selected"; ?>>Corength</option>
                      <option value="Nyamba" <?php if(isset($_GET['edit'])) if($editrow['fld_product_brand']=="Nyamba") echo "selected"; ?>>Nyamba</option>
                    </select>
                  </div>
                </div>

                <!-- This is for type -->
                <div class="form-group">
                  <label for="producttype" class="col-sm-3 control-label">Type</label>
                  <div class="col-sm-9">
                    <select name="type" class="form-control" id="producttype" required>
                      <option value="">Please select</option>
                      <option value="Weight Bench" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Weight Bench") echo "selected"; ?>>Weight Bench</option>
                      <option value="Pull Up Bar" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Pull Up Bar") echo "selected"; ?>>Pull Up Bar</option>
                      <option value="Abdominal Trainers" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Abdominal Trainers") echo "selected"; ?>>Abdominal Trainers</option>
                      <option value="Exercise bike & Elliptical" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Exercise bike & Elliptical") echo "selected"; ?>>Exercise bike & Elliptical</option>
                      <option value="Dumbbells" <?php if(isset($_GET['edit'])) if($editrow['fld_product_type']=="Dumbbells") echo "selected"; ?>>Dumbbells</option>
                    </select>
                  </div>
                </div>

                <!-- This is for spesification -->
                <div class="form-group">
                  <label for="productspecification" class="col-sm-3 control-label">Specification</label>
                  <div class="col-sm-9">
                    <select name="spec" class="form-control" id="productspec" required>
                      <option value="">Please select</option>
                      <option value="Gym Workout" <?php if(isset($_GET['edit'])) if($editrow['fld_product_specification']=="Gym Workout") echo "selected"; ?>>Gym Workout</option>
                      <option value="Home Workout" <?php if(isset($_GET['edit'])) if($editrow['fld_product_specification']=="Home Workout") echo "selected"; ?>>Home Workout</option>
                    </select>
                  </div>
                </div>

                <!-- This is for button -->
                <div class="form-group">
                  <div class="col-sm-offset-3 col-sm-9">
                    <?php if (isset($_GET['edit'])) { ?>
                      <input type="hidden" name="oldpid" value="<?php echo $editrow['fld_product_id']; ?>">
                      <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Update</button>
                    <?php } else { ?>
                      <button class="btn btn-default" type="submit" name="create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Create</button>
                    <?php } ?>
                    <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span>Clear</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        <?php } ?>

        <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            <div class="page-header">
              <h2>Products List</h2>
            </div>
            <table id=myTable class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Product ID</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Brand</th>
                  <th></th>
                </tr>
              </thead>
              
              <?php
              // Read

              $per_page = 1;
              if (isset($_GET["page"]))
                $page = $_GET["page"];
              else
                $page = 1;
              $start_from = ($page-1) * $per_page;

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
                  <td>


                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal<?php echo $readrow['fld_product_id']; ?>" onclick="showDetails(this);">
                      Details
                    </button>


                    <!--View Product Details-->
                    <!-- Modal -->
                    <div class="modal fade" id="myModal<?php echo $readrow['fld_product_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Product Details</h4>
                          </div>
                          <div class="modal-body">         
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-2 well well-sm text-center">
                                  <?php if ($readrow['fld_product_image'] == "" ) {
                                    echo "No image";
                                  }
                                  else { ?>
                                    <img src="products/<?php echo $readrow['fld_product_image'] ?>" class="img-responsive">
                                  <?php } ?>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-4">
                                  <div class="panel panel-default">
                                    <div class="panel-heading"><strong>Product Details</strong></div>
                                    <div class="panel-body">
                                      Below are specifications of the product.
                                    </div>
                                    <table class="table">
                                      <tr>
                                        <td class="col-xs-4 col-sm-4 col-md-4"><strong>Product ID</strong></td>
                                        <td><?php echo $readrow['fld_product_id'] ?></td>
                                      </tr>
                                      <tr>
                                        <td><strong>Name</strong></td>
                                        <td><?php echo $readrow['fld_product_name'] ?></td>
                                      </tr>
                                      <tr>
                                        <td><strong>Price</strong></td>
                                        <td>RM <?php echo $readrow['fld_product_price'] ?></td>
                                      </tr>
                                      <tr>
                                        <td><strong>Brand</strong></td>
                                        <td><?php echo $readrow['fld_product_brand'] ?></td>
                                      </tr>
                                      <tr>
                                        <td><strong>Type</strong></td>
                                        <td><?php echo $readrow['fld_product_type'] ?></td>
                                      </tr>
                                      <tr>
                                        <td><strong>Specification</strong></td>
                                        <td><?php echo $readrow['fld_product_specification'] ?></td>
                                      </tr>

                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>



                    <?php if($_SESSION['level'] != "Normal Staff") { ?>
                      <a href="products.php?edit=<?php echo $readrow['fld_product_id']; ?>" class="btn btn-success btn-xs" role="button">Edit</a>
                      <a href="products.php?delete=<?php echo $readrow['fld_product_id']; ?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-xs" role="button">Delete</a>
                    <?php } ?>
                  </td>
                </tr>
                <?php
              }
              $conn = null;?>

            </table>
          </div>
        </div>
      </div>


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

      <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>


      <script type="text/javascript">$(document).ready( function () {
        $('#myTable').DataTable({
          "pagingType": "full_numbers",
          "lengthMenu": [
            [5, 10, 20, 30, -1],
            [5, 10, 20, 30, "All"]
            ],
          "searching": true,
          "ordering": true,
          dom: 'lfrtipB',
          buttons: ['excel']
        });
      } );

    </script>
  </body>
  </html>