<?php
session_start();
include "config.php";



if (isset($_POST["edit"])) {
    $id = $_POST["product_id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $category = $_POST["category_id"];
    $details = $_POST["product_details"];

    $img_new = $_FILES["img"]["name"];
    $img_old = $_POST["img_old"];

    if ($img_new != null) {
        $update_file = $_FILES["img"]["name"];
    } else {

        $update_file = $img_old;
    }

    // Update
    $sql1 = "UPDATE products SET name='$name',img_url='$update_file', category_id='$category', product_details='$details', price='$price' WHERE product_id='$id'";

    $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

    if ($result1) {

        if ($_FILES["img"]["name"] != null) {
            move_uploaded_file($_FILES['img']['tmp_name'], "uploads/" . $_FILES["img"]["name"]);
            unlink("uploads/" . $img_old);
        }

        $_SESSION['status'] = "Updated successfully";
        header('Location: index.php');
    } else {
        $_SESSION['status'] = "Updatation failed";
        header('Location: index.php');
    }
}
