<?php include 'header.php'; ?>
<main>
    <form action="." method="post" >
    <fieldset>
        <legend>User Information</legend>
        
       

       

        

        <label>E-Mail:</label>
        <input type="text" name="email" 
               value="<?php echo htmlspecialchars($email);?>">
        <?php echo $fields->getField('email')->getHTML(); ?><br>
        </fieldset>

        <label>Password:</label>
        <input type="text" name="password" 
               value="<?php echo htmlspecialchars($password);?>">
        <?php echo $fields->getField('password')->getHTML(); ?><br>
        <fieldset>


        <legend>Submit Registration</legend>
        
        <label>&nbsp;</label>
        <input type="submit" name="action" value="add_admin"/>
        <input type="submit" name="action" value="Reset" /><br>
    </fieldset>
    </form>
</main>
<?php include 'footer.php'; ?>