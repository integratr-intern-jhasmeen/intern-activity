<?php 
include_once("../connect.php");

$name = $_POST ['name'];
$quantity = $_POST ['quantity'];
$price = $_POST ['price'];


if (isset ($_POST['submit_products'])){
    $sql = "INSERT INTO products ( name, quantity, price) VALUES
    ($name', '$quantity', '$price')";

    $query = $conn->query($sql) or die($conn->error);

    $_SESSION['success'] = "Person sucessfully added";
    
} else if (isset($_POST['update_products'])) {
    $id = $_POST['id'];
    $sql = "UPDATE products set name='$name', quantity='$quantity', price='$price' WHERE id=$id";

    $query = $conn->query($sql) or die($conn->error);
    $_SESSION['sucess'] = "Person sucessfully updated";
    
}
header("Location: ../products.php");
exit();