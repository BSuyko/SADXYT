<?php include('supplierconnection.php');

//when the edit button triggered
/*if (isset($_GET['btn_edit'])) {
  $userid = $_GET['Supplier_ID '];
  $sql = mysqli_query($db,"select * from employees where User_ID = $userid");
	$rec = mysqli_fetch_array($sql);
  
 $company_name    =    $rec['Company_Name'];
 $first_name      =    $rec['Firstname'];
 $last_name       =    $rec['Lastname'];
 $address         =    $rec['Address'];
 $contact_number  =    $rec['Phone'];
 $supplier_fax    =    $rec['Fax'];
 $email           =    $rec['Email'];
 $other_details   =    $rec['Other_Details'];
 $status          =    $rec['Status'];
 
}*/

$search = "";
?>
<!doctype html>
<html lang="en">
  <head>

    <title>XYT Inc. Company </title>

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
      <a class="nav-link px-3" href="#">Sign out</a>
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
            <a class="nav-link active" href="../Inventory/index.php">
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
        <h1 class="h2 text-bold">Supplier</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#exampleModalLong">
              <span data-feather="plus"></span>Add</button>
            <!--<button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#EditingSupplierModal">
              <span data-feather="minus"></span> Remove</button>-->
          </div>
        </div>
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <div class="row g-3 align-items-center pt-2 pb-4 border-bottom ">
        <h6>Search Supplier</h6>
        <form method="POST">
        <div class="col-auto">
          <label for="inputPassword6" class="col-form-label ">Supplier Company</label>
        </div>
        <div class="col-2">
          <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="supplier">
        </div>
        <div class="col align-self-center ">
          <button type="submit" class="btn btn-sm btn-outline-secondary" name="btn_search"><span data-feather="search"></span> Search</button>
        </div>
        </form>
        

      </div>

      <!-- Supplier List Section -->
      <h3 class="pt-3">Suppliers List</h3>
      <div class="table-responsive">
        <table class="table table-striped table-sm text-center">
          <thead>
            <tr>
              <th scope="col">Company Name</th>
              <th scope="col">First Name</th>
              <th scope="col">Middle Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Address</th>
              <th scope="col">Phone</th>
              <th scope="col">Fax</th>
              <th scope="col">Email</th>
              <th scope="col">Other Details</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $result = mysqli_query($db,"select * from supplier");
            while($row = mysqli_fetch_array($result)){ ?>
            <tr>
              <td><?php echo $row['Company_Name']?></td>
              <td><?php echo $row['Firstname']?></td>
              <td><?php echo $row['Lastname']?></td>
              <td><?php echo $row['Middle_name']?></td>
              <td><?php echo $row['Address']?></td>
              <td><?php echo $row['Phone']?></td>
              <td><?php echo $row['Fax']?></td>
              <td><?php echo $row['Email']?></td>
              <td><?php echo $row['Other_Details']?></td>
              <!--Status means when the supplier is still supplying the company or not-->
              <td><?php echo $row['Status']?></td>
              <!--the id choosen from the data table is located at data-target-->
              <td><button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#EditingSupplierModal<?php echo $row['Supplier_ID']?>">Edit</button></td>
            </tr>
            <?php }
             ?>
          </tbody>
        </table>
      </div>
    </main>

<!-- Modal for adding Supplier-->
<div class="modal" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLongTitle">Add Supplier</h6>
      </div>
      <form class="form" method="post" action="supplier.php">
              <div class="modal-body">
              <div class="row">
              <div class="col-3">
                <label for="">Company Name</label>
               <input class="form-control form-control-sm mb-2" type="text" name="company_name">
              </div>
              <div class="col-3">
              <label for="">First name</label>
              <input class="form-control form-control-sm mb-2" type="text" name="first_name">
               </div>
               <div class="col-3">
                <label for="">Middle Name</label>
                <input class="form-control form-control-sm mb-2 col-4" type="text" name="middle_name" >
              </div>
              <div class="col-3">
                <label for="">Last Name</label>
                <input class="form-control form-control-sm mb-2 col-4" type="text" name="last_name" >
              </div>
              </div>
            <div class="row mt-3">
            <div class="col-3">
                <label for="">Contact Number</label>
                <input class="form-control form-control-sm mb-2" type="text" name="contact_number">
              </div>
              <div class="col">
                <label for="">Address</label>
                <input class="form-control form-control-sm mb-2" type="text" name="address">
              </div>
              <div class="col">
                <label for="">Email</label>
                <input class="form-control form-control-sm mb-2" type="email" name="email">
              </div>
              <div class="col">
                <label for="">Supplier Fax</label>
                <input class="form-control form-control-sm mb-2" type="text" name="supplier_fax">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col">
                <label for="">Other Details</label>
                <input class="form-control form-control-sm mb-2" type="text" name="other_details">
              </div>
            </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success btn-sm" name="btn_addsupply" >Add Supplier</button>
      </div>
      </form>
      </div>
  </div>
</div>

<!-- modal for Edit Supplier -->
<!--the id of the choosen data form the table located at id--->
<div class="modal" id="EditingSupplierModal<?php echo $row['Supplier_ID'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLongTitle">Edit Supplier</h6>
      </div>
      <form class="form" method="post" action="supplier.php">
        <div class="modal-body">
              <div class="modal-body">
              <div class="row">
              <div class="col-3">
              <input type="hidden" name="id" value="<?php echo $row['Supplier_ID'] ?>">
              <label for="">Company Name</label>
               <input class="form-control form-control-sm mb-2" type="text" name="company_name" value="<?php echo $row['Company_Name'] ?>">
              </div>
              <div class="col-3">
              <label for="">First name</label>
              <input class="form-control form-control-sm mb-2" type="text" name="first_name" value="<?php echo $row['Firstname'] ?>">
               </div>
               <div class="col-3">
                <label for="">Middle Name</label>
                <input class="form-control form-control-sm mb-2 col-4" type="text" name="middle_name" value="<?php echo $row['Middle_name'] ?>">
              </div>
              <div class="col-3">
                <label for="">Last Name</label>
                <input class="form-control form-control-sm mb-2 col-4" type="text" name="last_name" value="<?php echo $row['Lastname'] ?>">
              </div>
              </div>
            <div class="row mt-3">
            <div class="col-3">
                <label for="">Contact Number</label>
                <input class="form-control form-control-sm mb-2" type="text" name="contact_number" value="<?php echo $row['Phone'] ?>">
              </div>
              <div class="col">
                <label for="">Address</label>
                <input class="form-control form-control-sm mb-2" type="text" name="address" value="<?php echo $row['Address'] ?>">
              </div>
              <div class="col">
                <label for="">Email</label>
                <input class="form-control form-control-sm mb-2" type="email" name="email" value="<?php echo $row['Email'] ?>">
              </div>
              <div class="col">
                <label for="">Supplier Fax</label>
                <input class="form-control form-control-sm mb-2" type="text" name="supplier_fax" value="<?php echo $row['Fax'] ?>">
              </div>
            </div>
            <div class="row mt-3">
              <div class="col">
                <label for="">Other Details</label>
                <input class="form-control form-control-sm mb-2" type="text" name="other_details" value="<?php echo $row['Other_Details'] ?>">
              </div>
            </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success btn-sm" name="btn_update" >Update Supplier</button>
        <button type="submit" class="btn btn-sm btn-outline-danger" name="btn_remove" >Remove Supplier</button>
      </div>
      </form>
    </div>
  </div>
</div>



  </div>
</div>




      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
