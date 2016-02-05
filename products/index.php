<?php 
require('../model/database.php');
include'../view/header.php';

$query = 'SELECT * FROM categories ORDER BY cat_categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Categories</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php foreach($categories as $category) : ?>
		<?php echo $category['cat_categoryName']; ?>
	<?php endforeach; ?>
	
</body>
</html>