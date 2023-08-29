<?php
session_start();
include "config.php";

if (isset($_POST["submit"])) {
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $img = mysqli_real_escape_string($conn, $_FILES["img"]["name"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $category = mysqli_real_escape_string($conn, $_POST["category_id"]);
    $details = mysqli_real_escape_string($conn, $_POST["product_details"]);

    // Add single quotes around values in the SQL query
    $sql = "INSERT INTO products(name, img_url, category_id, product_details, price) VALUES ('$name', '$img', '$category', '$details', '$price')";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if ($result) {
        move_uploaded_file($_FILES['img']['tmp_name'], "uploads/" . $_FILES["img"]["name"]);
        $_SESSION['status'] = "Product Created Successfully.";
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "Product Creation Failed!";
        header('Location: index.php');
    }
}
