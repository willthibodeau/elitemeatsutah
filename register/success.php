<?php include '../view/header.php'; ?>
<main>
    <h2>Success</h2>
    <p>The following registration information has been successfully
       submitted.</p>
    <ul>
        <li>First Name: <?php echo htmlspecialchars($first_name); ?></li>
        <li>Last Name: <?php echo htmlspecialchars($last_name); ?></li>
        <li>Password: <?php echo htmlspecialchars($password); ?></li>
        <li>Email: <?php echo htmlspecialchars($email); ?></li>
    </ul>
</main>
<?php include '../view/footer.php'; ?>