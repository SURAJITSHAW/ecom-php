<?php
session_start();
include "config.php";

if (isset($_POST["delete"])) {
    $id = mysqli_real_escape_string($conn, $_POST["del_id"]);
    $img = mysqli_real_escape_string($conn, $_POST["del_img"]);

    $sql = "DELETE FROM products WHERE product_id=$id";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if ($result) {
        unlink("uploads/".$img);
        $_SESSION['status'] = "Product Deleted Successfully.";
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "Product Deletion Failed!";
        header('Location: index.php');
    }
}
