<form class="post-form" action="savedata.php" method="post">


    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" />
    </div>


    <div class="form-group">
        <label>Image</label>
        <input type="file" name="img_url" />
    </div>


    <div class="form-group">
        <label>Details</label>
        <input type="text" name="product_details" />
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" name="price" />
    </div>


    <div class="form-group">
        <label>Category</label>
        <select name="class">
            <option value="" selected disabled>Select Category</option>
            <?php
            include 'config.php';

            $sql = "SELECT * FROM categories";
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>

            <?php } ?>
        </select>
    </div>


    <input class="submit" type="submit" value="Save" />
</form>