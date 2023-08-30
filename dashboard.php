<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List Products</h1>

    <?php
    if (isset($_SESSION['status']) && $_SESSION != '') {

    ?>

        <div class="alert alert-warning alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Hey! </strong><?php echo $_SESSION['status']; ?>
        </div>

    <?php
        unset($_SESSION['status']);
    }
    include 'config.php';

    $sql = "SELECT * FROM products AS p JOIN categories AS c WHERE p.category_id = c.category_id";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if (mysqli_num_rows($result) > 0) {
    ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Details</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['category_name']; ?></td>
                        <td><?php echo $row['product_details']; ?></td>
                        <td>Rs. <?php echo $row['price']; ?></td>
                        <td><img src="<?php echo "uploads/" . $row['img_url']; ?>" alt="" height="200px" width="200px" style="object-fit: contain;"></td>
                        <td><a href="update.php?id=<?php echo $row['product_id']; ?>" class="btn btn-info">Edit</a></td>
                        <td>
                            <!-- Delete product -->
                            <form action="delete.php" method="post">
                                <input type="hidden" name="del_id" value="<?php echo $row['product_id']; ?>">
                                <input type="hidden" name="del_img" value="<?php echo $row['img_url']; ?>">
                                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>

                <?php }


                ?>
            </tbody>
        </table>

    <?php } else {

        echo "<tr><td> No Record Found</td></tr>";
    } ?>

</div>