<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" id="brand" href="index.php">Welcome to GymGuys</a>
      <?php 
      echo '<a class="navbar-brand" id="Everyday"><i>'.$_SESSION['level'].' | '.$_SESSION['name'].'</i></a>';
      ?>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" id="menu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="customers.php">Customers</a></li>
            <li>
              <?php if($_SESSION['level'] != "Normal Staff") { ?>
                <a href="staffs.php">Staffs</a>
              <?php } ?>
            </li>
            <li><a href="orders.php">Orders</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<style type="text/css">
  #Everyday{
    background: #7286D3;
    color: white;
    border: solid #674188;
    border-radius: 10px;
    margin: 0px 10px 0px 10px;
  }
  #brand{
    margin: 0px 10px 0px 10px;
    font-style: bold;
    background: #9DF1DF;
    border: solid;
    border-radius: 10px;
    color: black;
  }
  #menu{
    font-style: bold;
    background: #674188;
    color: white;
    border: solid;
    border-radius: 10px;
  }
</style>