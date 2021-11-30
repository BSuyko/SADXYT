<?php
//session_start();

//initiate variable for product
$product_name="";
$product_category="";
$product_quantity="";
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
    $product_category = $_POST['product_category'];
    $product_quantity = $_POST['product_quantity'];
    $product_price = $_POST['product_price'];
    $supplier_company = $_POST['supplier_company'];
    $product_description = $_POST['product_description'];

      // query to database by INSERT
      if ($product_category == 'Motorcycle Parts') {
        $product_no = "MP".$number;
        $result = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
      if (mysqli_num_rows($result)==1) {
        do{
          $number++;
          $product_no = "MP".$number;
          $result = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
          $count = mysqli_num_rows($result);


        }while($count==1);
        $product_no = "MP".$number;
      }else {
        $product_no = "MP".$number;
      }


    $query = " insert into products(Product_Name, Product_Description, Product_no, Product_Price, Product_Quantity, Product_Status,Supplier,ProdCategory)
      values('$product_name','$product_description','$product_no','$product_price','$product_quantity','Available' ,'$supplier_company','$product_category' )";
      mysqli_query($db, $query);
    }

    //query to database to Insert a category of Auto Parts
    if ($product_category == 'Auto Parts') {
      $product_no = "AP".$number;
      $result = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
    if (mysqli_num_rows($result)==1) {
      do{
        $number++;
        $product_no = "AP".$number;
        $result = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
        $count = mysqli_num_rows($result);


      }while($count==1);
      $product_no = "AP".$number;
    }else {
      $product_no = "AP".$number;
    }


    $query = " insert into products(Product_Name, Product_Description, Product_no, Product_Price, Product_Quantity, Product_Status,Supplier,ProdCategory)
    values('$product_name','$product_description','$product_no','$product_price','$product_quantity','Available' ,'$supplier_company','$product_category' )";
    mysqli_query($db, $query);
    }

    //query to database to Insert a category of Furniture Supplies
    if ($product_category == 'Furniture Supplies') {
      $product_no = "FS".$number;
      $result = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
    if (mysqli_num_rows($result)==1) {
      do{
        $number++;
        $product_no = "FS".$number;
        $result = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
        $count = mysqli_num_rows($result);


      }while($count==1);
      $product_no = "FS".$number;
    }else {
      $product_no = "FS".$number;
    }


    $query = " insert into products(Product_Name, Product_Description, Product_no, Product_Price, Product_Quantity, Product_Status,Supplier,ProdCategory)
    values('$product_name','$product_description','$product_no','$product_price','$product_quantity','Available' ,'$supplier_company','$product_category' )";
    mysqli_query($db, $query);
    }

    //query to database to Insert a category of Lightings
    if ($product_category == 'Lightings') {
      $product_no = "LS".$number;
      $result = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
    if (mysqli_num_rows($result)==1) {
      do{
        $number++;
        $product_no = "LS".$number;
        $result = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
        $count = mysqli_num_rows($result);


      }while($count==1);
      $product_no = "LS".$number;
    }else {
      $product_no = "LS".$number;
    }


    $query = " insert into products(Product_Name, Product_Description, Product_no, Product_Price, Product_Quantity, Product_Status,Supplier,ProdCategory)
    values('$product_name','$product_description','$product_no','$product_price','$product_quantity','Available' ,'$supplier_company','$product_category' )";
    mysqli_query($db, $query);
    }

    //query to database to Insert a category of Plastic wares
    if ($product_category == 'Plastic wares') {
      $product_no = "PW".$number;
      $result = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
    if (mysqli_num_rows($result)==1) {
      do{
        $number++;
        $product_no = "PW".$number;
        $result = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
        $count = mysqli_num_rows($result);


      }while($count==1);
      $product_no = "PW".$number;
    }else {
      $product_no = "PW".$number;
    }


    $query = " insert into products(Product_Name, Product_Description, Product_no, Product_Price, Product_Quantity, Product_Status,Supplier,ProdCategory)
    values('$product_name','$product_description','$product_no','$product_price','$product_quantity','Available' ,'$supplier_company','$product_category' )";
    mysqli_query($db, $query);
    }

    //query to database to Insert a category of Electronic Supplies
    if ($product_category == 'Electronic Supplies') {
      $product_no = "ES".$number;
      $result = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
    if (mysqli_num_rows($result)==1) {
      do{
        $number++;
        $product_no = "ES".$number;
        $result = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
        $count = mysqli_num_rows($result);


      }while($count==1);
      $product_no = "ES".$number;
    }else {
      $product_no = "ES".$number;
    }


    $query = " insert into products(Product_Name, Product_Description, Product_no, Product_Price, Product_Quantity, Product_Status,Supplier,ProdCategory)
    values('$product_name','$product_description','$product_no','$product_price','$product_quantity','Available' ,'$supplier_company','$product_category' )";
    mysqli_query($db, $query);
    }

    //query to database to Insert a category of Hardware Supplies
    if ($product_category == 'Hardware Supplies') {
      $product_no = "HS".$number;
      $result = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
    if (mysqli_num_rows($result)==1) {
      do{
        $number++;
        $product_no = "HS".$number;
        $result = mysqli_query($db,"SELECT * from products WHERE Product_no = '$product_no'");
        $count = mysqli_num_rows($result);


      }while($count==1);
      $product_no = "HS".$number;
    }else {
      $product_no = "HS".$number;
    }


    $query = " insert into products(Product_Name, Product_Description, Product_no, Product_Price, Product_Quantity, Product_Status,Supplier,ProdCategory)
    values('$product_name','$product_description','$product_no','$product_price','$product_quantity','Available' ,'$supplier_company','$product_category' )";
    mysqli_query($db, $query);
    }

    header('location: index.php');
}

?>
