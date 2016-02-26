<?php 
// require_once('../valid_admin.php'); 
include('../../view/header.php');
include('../../model/category_db.php');
?>
<main>
    <aside>
        <h1>Categories</h1>
        <nav>
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
        </nav>
    </aside>
  
</main>
<?php include '../../view/footer.php'; ?>