<?php include('inventoryconnect.php');?>
<!doctype html>
<html lang="en">
  <head>

    <title>XYT Inc. Inventory </title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">XYT Incorporated</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="../sign-in/index.php">Sign out</a> <!--remember the href for the logout button (updated 29/11/2021)-->
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Order/index.html">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="shopping-cart"></span>
              Inventory
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Inventory/supplier.php">
              <span data-feather="users"></span>
              Supplier
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>



        <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"> -->
          <!-- <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6> -->
        <!-- <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul> -->
      </div>
    </nav>

    <!-- Adding and removing buttons -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-bold">Inventory</h1> <p><?php echo $error;?></p>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#exampleModalLong">
              <span data-feather="plus"></span>Add</button>
          </div>
        </div>
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <div class="row g-3 align-items-center pt-2 pb-4 border-bottom ">
        <h6>Search Product</h6>
        <div class="col-auto">
          <label for="inputPassword6" class="col-form-label ">Product #</label>
        </div>
        <div class="col-1">
          <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
        </div>
        <div class="col-auto">
          <label for="inputPassword6" class="col-form-label ">Name</label>
        </div>
        <div class="col-2">
          <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
        </div>
        <div class="col-auto">
          <label for="inputPassword6" class="col-form-label ">Category</label>
        </div>
        <div class="col-2">
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected></option>
              <option>Motorcycle Parts</option>
              <option>Auto Parts</option>
              <option>Furniture Supplies</option>
              <option>Lightings</option>
              <option>Plastic wares</option>
              <option>Electronic Supplies</option>
              <option>Hardware Supplies</option>

            </select>
        </div>
        <div class="col-auto">
          <label for="inputPassword6" class="col-form-label ">Supplier Company</label>
        </div>
        <div class="col-2">
          <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
        </div>
        <div class="col align-self-center ">
          <button type="button" class="btn btn-sm btn-outline-secondary"><span data-feather="search"></span> Search</button>
        </div>

      </div>

      <!-- Product List Section -->
      <h3 class="pt-3">Product List</h3>
      <div class="table-responsive">
        <table class="table table-striped table-sm text-center">
          <thead>
            <tr>
              <th scope="col">Product #</th>
              <th scope="col">Name</th>
              <th scope="col">Category</th>
              <th scope="col">Quantity</th>
              <th scope="col">Price</th>
              <th scope="col">Availability</th>
            </tr>
          </thead>
          <tbody>
          <?php $result = mysqli_query($db,"select * from products");
            while($row = mysqli_fetch_array($result)){ ?>
            <tr>
              <td><?php echo $row['Product_no']?></td>
              <td><?php echo $row['Product_Name']?></td>
              <td><?php echo $row['ProdCategory']?></td>
              <td><?php echo $row['Product_Quantity']?></td>
              <td><?php echo $row['Product_Price']?></td>
              <td><?php echo $row['Product_Status']?></td>
              <td><button type="submit" class="btn btn-sm btn-outline-secondary btn_edit" data-toggle="modal" data-target="#EditingProductModal" name="btn_edit">Edit</button></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </main>


<!-- Modal for adding product-->
<div class="modal" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLongTitle">Add Product</h6>
      </div>
      <form class="form" method="post" action="index.php">
              <div class="modal-body">
              <div class="row">
              <div class="col-4">
                <label for="">Product Name</label>
                <input class="form-control form-control-sm mb-2" type="text" name="product_name">
              </div>
              <div class="col-3">
              <label for="">Product Category</label>
              <select class="form-control form-control-sm mb-2" id="exampleFormControlSelect1" placeholder="None" name="product_category">
                <option selected></option>
                <option value="Motorcycle Parts">Motorcycle Parts</option>
                <option value="Auto Parts">Auto Parts</option>
                <option value="Furniture Supplies">Furniture Supplies</option>
                <option value="Lightings">Lightings</option>
                <option value="Plastic wares">Plastic wares</option>
                <option value="Electronic Supplies">Electronic Supplies</option>
                <option value="Hardware Supplies">Hardware Supplies</option>
              </select>
              </div>

              <div class="col-1">
                <label for="">Qty</label>
                <input class="form-control form-control-sm mb-2 col-4" type="text" name="product_quantity" >
              </div>

              <div class="col-2">
                <label for="">Price</label>
                <input class="form-control form-control-sm mb-2" type="text" name="product_price">
              </div>
            </div>

            <div class="row mt-3">
              <div class="col">
                <label for="">Description</label>
                <input class="form-control form-control-sm mb-2" type="text" name="product_description">
              </div>
              <div class="col">
                <label for="">Supplier Company</label>
                <input class="form-control form-control-sm mb-2" type="text" name="supplier_company">
              </div>
              </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success btn-sm" name="btn_add" >Add Product</button>
      </div>
      </form>
      </div>
  </div>
</div>

<!-- modal for Edit product -->
<div class="modal" id="EditingProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLongTitle">Edit Product</h6>
      </div>
      <div class="modal-body">
      <form class="form" method="post" action="index.php">
              <div class="modal-body">
              <div class="row">
              <div class="col-4">
                <label for="">Product Name</label>
                <input class="form-control form-control-sm mb-2" type="text" name="product_name">
              </div>
              <div class="col-3">
              <label for="">Product Category</label>
              <select class="form-control form-control-sm mb-2" id="exampleFormControlSelect1" placeholder="None" name="product_category">
                <option selected></option>
                <option value="Motorcycle Parts">Motorcycle Parts</option>
                <option value="Auto Parts">Auto Parts</option>
                <option value="Furniture Supplies">Furniture Supplies</option>
                <option value="Lightings">Lightings</option>
                <option value="Plastic wares">Plastic wares</option>
                <option value="Electronic Supplies">Electronic Supplies</option>
                <option value="Hardware Supplies">Hardware Supplies</option>
              </select>
              </div>

              <div class="col-1">
                <label for="">Qty</label>
                <input class="form-control form-control-sm mb-2 col-4" type="text" name="product_quantity" >
              </div>

              <div class="col-2">
                <label for="">Price</label>
                <input class="form-control form-control-sm mb-2" type="text" name="product_price">
              </div>
            </div>

            <div class="row mt-3">
              <div class="col">
                <label for="">Description</label>
                <input class="form-control form-control-sm mb-2" type="text" name="product_description">
              </div>
              <div class="col">
                <label for="">Supplier Company</label>
                <input class="form-control form-control-sm mb-2" type="text" name="supplier_company">
              </div>
              </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success btn-sm" name="btn_edit" >Update Product</button>
        <button type="submit" class="btn btn-sm btn-outline-danger" name="btn_remove" >Remove Product</button>
      </div>
      </form>
    </div>
  </div>
</div>

  </div>
</div>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="dashboard.js"></script>

      
  </body>
</html>
