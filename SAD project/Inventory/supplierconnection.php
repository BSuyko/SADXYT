<?php
//session_start();

//connecto database
$db = mysqli_connect('localhost','root','','xyt');

//initiate variable for product
$supplier_id = "";
$supplier_company ="";
$supplier_details ="";
$supplier_address ="";
$supplier_fax ="";
$contact_person ="";
$contact_email ="";
$contact_number ="";
$status ="";

//add new supplier
if (isset($_POST['btn_addsupply'])) {
    // get value from supplier.php and fetch in each variables
    $supplier_company = $_POST['supplier_company'];
    $supplier_details = $_POST['supplier_details'];
    $supplier_address = $_POST['supplier_address'];
    $supplier_fax = $_POST['supplier_fax'];
    $contact_person = $_POST['contact_person'];
    $contact_email = $_POST['contact_email'];
    $contact_number = $_POST['contact_number'];

    $query = "insert into supplier(supplier_company, supplier_detail, supplier_address, supplier_fax, contact_person,contact_email,contact_number,Status) 
    values('$supplier_company','$supplier_details','$supplier_address','$supplier_fax','$contact_person','$contact_email','$contact_number','active')";
    mysqli_query($db, $query);
    header('location:supplier.php');
}
// new updates (29/11/2021)
//edit supplier
if(isset($_POST['btn_editsupply'])){
    $supplier_id = $_POST['Supplier_ID'];

    $supplier_company = $_POST['supplier_company'];
    $supplier_details = $_POST['supplier_details'];
    $supplier_address = $_POST['supplier_address'];
    $supplier_fax = $_POST['supplier_fax'];
    $contact_person = $_POST['contact_person'];
    $contact_email = $_POST['contact_email'];
    $contact_number = $_POST['contact_number'];
    $status =$_POST['status'];

    if($status=='inactive'){
        $query = "UPDATE `supplier` SET supplier_company='$supplier_company',supplier_detail='$supplier_details',supplier_address='$supplier_address',supplier_fax='$supplier_fax',
    contact_person='$contact_person',contact_email='$contact_email',contact_number='$contact_number',Status='active'";
    mysqli_query($db, $query);
    header('location:supplier.php');
    } else {
        $query = "UPDATE `supplier` SET supplier_company='$supplier_company',supplier_detail='$supplier_details',supplier_address='$supplier_address',supplier_fax='$supplier_fax',
    contact_person='$contact_person',contact_email='$contact_email',contact_number='$contact_number'";
    mysqli_query($db, $query);
    header('location:supplier.php');
    }

    
}

//Logical Delete means the supplier's status will be inactive
if(isset($_POST['btn_remove'])){
    $supplier_id = $_POST['Supplier_ID'];

    $query = "UPDATE `supplier` SET Status='inactive'";
    mysqli_query($db, $query);
    header('location:supplier.php');
}
?>