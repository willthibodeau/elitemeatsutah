<?php include '../view/header.php';
session_start();
?>
<?php
print_r($_SESSION);
?>


<form action="." method="post" >
<input type="hidden" name="action" value="logout">

<input type="submit" value="submit">
</form>

<h2>Logout Page</h2>


<?php session_unset();
 	 	session_destroy();?>
<?php include'../view/footer.php'; ?>
