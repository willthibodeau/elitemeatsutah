<?php 
    require_once('../util/main.php');
   
    require_once('valid_admin.php');
    include 'view/header.php';
    
?>

<main>
    <h1>Admin Menu</h1>
    <p><a href="product">Product Manager</a></p>
    <p><a href="category">Category Manager</a></p>
    <p><a href="comment">Order Manager</a></p>
    <p><a href="account">Account Manager</a></p>
    <p><a href="index.php?action=logout">Logout</a></p>
</main>

<?php include '../view/footer.php'; ?>