<?php
//session_start();

//initiate variable for product
$product_name="";
$product_category="";
$product_quantity= 0;
$product_price="";
$supplier_company="";
$supplier_name="";
$supplier_contact_number="";
$product_description ="";
$code ="";
$product_no="";
$error = "";

//connecto database
$db = mysqli_connect('localhost','root','','xyt');

// adding new product
if (isset($_POST['btn_add'])) {
    $number = 1000;
    $product_no="";
    $product_name = $_POST['product_name'];
    $product_code = $_POST['product_category'];
    $product_quantity = $_POST['product_quantity'];
    $product_price = $_POST['product_price'];
    $supplier_company = $_POST['supplier_company'];
    $product_description = $_POST['product_description'];


      // query to database by INSERT
        $product_no = $product_code.$number;
        $result = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
      //product category
        $result_category = mysqli_query($db,"SELECT * from product_category WHERE category_code = '$product_code'");
        while($prod_category_row = mysqli_fetch_array($result_category)){
          $product_category = $prod_category_row['ProdCategory_ID'];
        }
      // supplier
      $result_supplier = mysqli_query($db,"SELECT * from supplier WHERE supplier_company = '$supplier_company'");
        while($supplier_row = mysqli_fetch_array($result_supplier)){
          $supplier_id = $supplier_row['Supplier_ID'];
        }
      if ($product_quantity<31) {
        $status_id = "critical";
      } elseif($product_quantity==0){
        $status_id = "unavailable";
      } else {
        $status_id = "available";
      }
      if (mysqli_num_rows($result)==1) {
        do{
          $number++;
          $product_no = $product_code.$number;
          $result = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
          $count = mysqli_num_rows($result);
        }while($count==1);
        $product_no = $product_code.$number;
      }else {
        $product_no = $product_code.$number;
      }

    $query = " insert into products(Product_Name, Product_Description, Product_no, Product_Price, Product_Quantity, Product_Status,Supplier,ProdCategory)
      values('$product_name','$product_description','$product_no','$product_price','$product_quantity',' $status_id' ,'$supplier_id','$product_category' )";
      $success_insert = mysqli_query($db, $query);

      // alert pero dili mo gawas
      if ($success_insert) {
        echo '<script> alert("Data Updated")</script>';
        header('location: index.php');
      } else {
        echo '<script> alert("Data Not Updated")</script>';
      }
      header('location:index.php');
}

  if (isset($_POST['btn_edit'])) {
    $product_no = $_POST['product_number'];

    $product_name = $_POST['product_name'];
    $product_quantity = $_POST['product_quantity'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];
    
    // get the quantity from the updated table so that the status will update
    $query = "UPDATE `products` SET `Product_Name`='$product_name',`Product_Description`='$product_description',
    `Product_Price`='$product_price',`Product_Quantity` = (Product_Quantity+$product_quantity) WHERE Product_no = '$product_no'";
    mysqli_query($db, $query);

    // search if the quantity is changed
    $result_product = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
        while($product_row = mysqli_fetch_array($result_product)){
          $product_quantity = $product_row['Product_Quantity'];
        }
    if ($product_quantity<31) {
      $status_id = "critical";
    } else {
      $status_id = "available";
    }
    $query = "UPDATE `products` SET `Product_Status`='$status_id' WHERE Product_no = '$product_no'";
    mysqli_query($db, $query);
    header('location:index.php');
  }

  if (isset($_POST['btn_remove'])) {
    $product_no = $_POST['product_number'];
    $query = "UPDATE products SET Product_Status = 'pull-out' WHERE Product_no = '$product_no'";
    mysqli_query($db, $query);
    header('location:index.php');
  }
?>
