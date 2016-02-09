<?php
require('../model/database.php');
include'../view/header.php';
?>


    <main>
       
        <form action="add_categories.php" method="post"
              id="add_product_form">

           

            <label>Name:</label>
            <input type="text" name="name"><br>

            
            <input type="hidden" value="add_categories" name="action" />
            <label>&nbsp;</label>
            <input type="submit" value="Add Product"><br>
        </form>
        <p><a href="index.php">View Category List</a></p>
    </main>

  <?php include'../view/footer.php'; ?>