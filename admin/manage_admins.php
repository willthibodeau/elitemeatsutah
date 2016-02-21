

<?php include '../view/header.php'; 
session_start();

$_SESSION['admin'] = 'Will';
$_SESSION['username'] = 1;
$_SESSION['admin_id'] = 13;



?>
<?php
print_r($_SESSION);
?>

<h2>Manage Admins</h2>
<a href="../admin/products/">Product Manager</a>
<a href="/category/">Category Manager</a>
<a href="/account/">Account Manager</a>
<a href="/comments/">Comments</a>
<a href="logout.php">Logout</a>

<?php include("../view/footer.php"); ?>
