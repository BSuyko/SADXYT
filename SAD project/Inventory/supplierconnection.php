<?php
//session_start();

//connecto database
$db = mysqli_connect('localhost','root','','xyt');

//initiate variable for product
$company_name ="";
$first_name ="";
$middle_name ="";
$last_name ="";
$contact_number ="";
$address ="";
$email ="";
$supplier_fax ="";
$other_details ="";



//add new supplier
if (isset($_POST['btn_addsupply'])) {
    // get value from supplier.php and fetch in each variables
    $company_name = $_POST['company_name'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $supplier_fax = $_POST['supplier_fax'];
    $other_details = $_POST['other_details'];

    $query = "insert into supplier(Company_Name, Firstname, Lastname, Middle_name, Address, Phone, Fax, Email, Other_Details,Status) 
    values('$company_name','$first_name','$last_name','$middle_name','$address','$contact_number','$supplier_fax','$email','$other_details','active')";
    mysqli_query($db, $query);
    header('location:supplier.php');
}
?>