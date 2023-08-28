<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List Products</h1>
    
    <?php
      include 'config.php';

      $sql = "SELECT * FROM products AS p JOIN categories AS c WHERE p.category_id = c.category_id";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Details</th>
                <th>Price</th>
                <th>Variations</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['category_name']; ?></td>
                <td><?php echo $row['product_details']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo "..."; ?></td>
                <td><button class="btn btn-danger">Delete</button></td>
            </tr>

            <?php } ?>
        </tbody>
    </table>
    
    <?php } ?>

</div>
