<?php 
echo'category_list ';
include('../view/header.php');

?>


<table id="category_table">
        <?php foreach ($categories as $category) : ?>
        <tr>
            <form action="." method="post" >
            <td>
                 <input type="text" name="name"
                        value="<?php echo htmlspecialchars($category['cat_categoryName']); ?>">
            </td>
            <td>
                <input type="hidden" name="action" value="update_category">
                <input type="hidden" name="category_id"
                       value="<?php echo $category['cat_categoryID']; ?>">
                <input type="submit" value="Update">
            </td>
            </form>
            <td>
               
                <form action="#" method="post" >
                    <input type="hidden" name="action" value="delete_category">
                    <input type="hidden" name="category_id"
                           value="<?php echo $category['cat_categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form>
                
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Add Category</h2>
    <form action="." method="post" id="add_category_form" >
        <input type="hidden" name="action" value="add_category">
        <input type="text" name="name">
        <input type="submit" value="Add">
    </form>

<?php include('../view/footer.php');