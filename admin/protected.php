<?php require_once('valid_admin.php'); ?>

<?php include('../view/header.php'); ?>

<h1>Protected</h1>
    <main>
        <p>This is the Protected page.</p>
        <p><a href="index.php?action=show_admin_menu">Product Manager</a></p>
        <p><a href="index.php?action=show_product_manager">Product Manager</a></p>
        <p><a href="index.php?action=show_category_manager">Category Manager</a></p>
        <p><a href="index.php?action=logout">Logout</a></p>
    </main>

<?php include('../view/footer.php'); ?>