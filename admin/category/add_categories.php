<?php 
echo'category_list ';
include('../view/header.php');

?>
<main>
    <aside>
        <h1>Categories</h1>
        <ul>
            <!-- display links for all categories -->
            <?php foreach($categories as $category) : ?>
            <li>
                <a href="?category_id=<?php echo $category['cat_categoryID']; ?>">
                    <?php echo $category['cat_categoryName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>

        <
    </aside>
  
</main>
<?php include('../view/footer.php'); ?>