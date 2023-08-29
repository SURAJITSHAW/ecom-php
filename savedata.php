<?php
session_start();
include "config.php";


if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $img = $_FILES["img"]["name"];
    $price = $_POST["price"];
    $category = $_POST["category_id"];
    $details = $_POST["product_details"];
}

$sql = "INSERT INTO products(name, img_url, category_id, product_details, price ) VALUES('$name', '$img', '$category', '$details', '$price')";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

if ($result) {
    move_uploaded_file($_FILES['img']['tmp_name'], "uploads/". $_FILES["img"]["name"]);
    $_SESSION['status'] = "Image Stored Successfully.";
    header('Location: index.php');
} else {
    $_SESSION['status'] = "Image Stored Failed!";
    header('Location: index.php');
}
