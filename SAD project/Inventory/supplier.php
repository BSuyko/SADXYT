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
              <th scope="col">Supplier ID</th>
              <th scope="col">Supplier Company</th>
              <th scope="col">Supplier Details</th>
              <th scope="col">Supplier Address</th>
              <th scope="col">Supplier Fax</th>
              <th scope="col">Contact Person</th>
              <th scope="col">Email</th>
              <th scope="col">Contact Number</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $result = mysqli_query($db,"select * from supplier");
            while($row = mysqli_fetch_array($result)){ ?>
            <tr>
              <td><?php echo $row['Supplier_ID']?></td>
              <td><?php echo $row['supplier_company']?></td>
              <td><?php echo $row['supplier_detail']?></td>
              <td><?php echo $row['supplier_address']?></td>
              <td><?php echo $row['supplier_fax']?></td>
              <td><?php echo $row['contact_person']?></td>
              <td><?php echo $row['contact_email']?></td>
              <td><?php echo $row['contact_number']?></td>
              <!--Status means when the supplier is still supplying the company or not-->
              <td><?php echo $row['Status']?></td>
              <!--the id choosen from the data table is located at data-target-->
              <td><button type="button" class="btn btn-sm btn-outline-secondary btn_edit" data-toggle="modal" data-target="#EditingSupplierModal">Edit</button></td>
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
              <div class="col">
                <label for="">Supplier Company</label>
                <input class="form-control form-control-sm mb-2" type="text" name="supplier_company">
              </div>
              <div class="row">
              <div class="col">
                <label for="">Supplier Details</label>
                <input class="form-control form-control-sm mb-2" type="text" name="supplier_details">
              </div>
              </div>
            <div class="row">
            <div class="col">
                <label for="">Supplier Address</label>
                <input class="form-control form-control-sm mb-2" type="text" name="supplier_address">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="">Supplier Fax</label>
                <input class="form-control form-control-sm mb-2" type="text" name="supplier_fax">
              </div>
            </div>
            <div class="row">
              <div class="col">
              <label for="">Contact Person</label>
              <input class="form-control form-control-sm mb-2" type="text" name="contact_person">
               </div>
            </div>
            <div class="row">
               <div class="col">
                <label for="">Email</label>
                <input class="form-control form-control-sm mb-2" type="email" name="contact_email">
              </div>
            </div>
            <div class="row">
            <div class="col">
                <label for="">Contact Number</label>
                <input class="form-control form-control-sm mb-2" type="text" name="contact_number">
              </div>
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
<div class="modal" id="EditingSupplierModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLongTitle">Edit Supplier</h6>
      </div>
      <form class="form" method="post" action="supplier.php">
              <div class="modal-body">
              <div class="row">
              <div class="col-10">
              <input type="hidden" name="Supplier_ID" id ="Supplier_ID" value="">
                <label for="">Supplier Company </label>
               <input class="form-control form-control-sm mb-2" type="text" name="supplier_company" id="supplier_company">
              </div>
              <div class="row">
              <div class="col">
                <label for="">Supplier Details</label>
                <input class="form-control form-control-sm mb-2" type="text" name="supplier_details" id="supplier_details">
              </div>
              </div>
              <div class="row">
            <div class="col">
                <label for="">Supplier Address</label>
                <input class="form-control form-control-sm mb-2" type="text" name="supplier_address" id="supplier_address">
              </div>
              </div>
              <div class="row">
              <div class="col">
                <label for="">Supplier Fax</label>
                <input class="form-control form-control-sm mb-2" type="text" name="supplier_fax" id="supplier_fax">
              </div>
              </div>
              <div class="row">
              <div class="col">
              <label for="">Contact Person</label>
              <input class="form-control form-control-sm mb-2" type="text" name="contact_person" id="contact_person">
               </div>
              </div>
              <div class="row">
               <div class="col">
                <label for="">Email</label>
                <input class="form-control form-control-sm mb-2" type="email" name="contact_email" id="contact_email">
              </div>
              </div>
              <div class="row">
               <div class="col">
                <label for="">Contact Number</label>
                <input class="form-control form-control-sm mb-2" type="text" name="contact_number" id="contact_number">
                <input type="hidden" name="status" id ="status" value="">
              </div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success btn-sm" name="btn_editsupply" >Update Supplier</button>
        <button type="submit" class="btn btn-sm btn-outline-danger" name="btn_remove" >Remove Supplier</button>
      </div>
      </form>
    </div>
  </div>
</div>
 </div>
</div>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  
      <!--New added 29/11/2021 for fetch data from the table to edit modal--->
      <script>
        $(document).ready(function(){
            $('.btn_edit').on('click',function(){
              
              $tr = $(this).closest('tr');
              var data = $tr.children("td").map(function(){
                  return $(this).text();
              }).get();

              console.log(data);

              $('#Supplier_ID').val(data[0]);
              $('#supplier_company').val(data[1]);
              $('#supplier_details').val(data[2]);
              $('#supplier_address').val(data[3]);
              $('#supplier_fax').val(data[4]);
              $('#contact_person').val(data[5]);
              $('#contact_email').val(data[6]);
              $('#contact_number').val(data[7]);
              $('#status').val(data[8]);
            });
        });
      </script>
    </body>
</html>
