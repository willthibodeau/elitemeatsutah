<?php include '../view/header.php'; 
session_start();

?>

<?php
print_r($_SESSION);
?>
    <h2>Admin Login</h2>
    <form action="manage_admins.php" method="post">
        <input type="hidden" name="" value="">
        <label>E-mail:</label>
        <input type="text" name="email" value="">
        <label>Password:</label>
        <input type="text" name="password" >
        <input type="submit" value="Login">
    </form>
   


<?php include '../view/footer.php'; ?>