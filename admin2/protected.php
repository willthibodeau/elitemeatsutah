<?php require_once('valid_admin.php'); ?>

<?php include('../view/header.php'); ?>
<?php echo $login_message; ?>
<h1>Protected</h1>
    <main>
        <p>This is the Protected page.</p>
        <p><a href="index.php?action=show_account">Account Manager</a></p>
        <p><a href="index.php?action=show_category">Category Manager</a></p>
        <p><a href="index.php?action=show_comment">Comments Manager</a></p>
        <p><a href="index.php?action=show_product">Product Manager</a></p>
        <p><a href="index.php?action=logout">Logout</a></p>
    </main>

<?php include('../view/footer.php'); ?>