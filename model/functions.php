<?php 

function category_exists($name){
	global $db;
	$query = "SELECT cat_categoryName FROM categories WHERE cat_categoryName = '$name'";
	$statement = $db->prepare($query);
	$statement->execute();
		if($data = $statement->fetch()){
			$error = "The category is already in the database";
			include'../error.php';
		} else {
			add_categories($name);
		}
}

function add_categories($name){
	global $db;
	$query = 'INSERT INTO categories
                 (cat_categoryID, cat_categoryName)
              VALUES
                 (null, :name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();
}

function get_categories(){
	global $db;
	$query = 'SELECT * FROM categories ORDER BY cat_categoryID';
	$statement = $db->prepare($query);
	$statement->execute();
	$categories = $statement->fetchAll();
	$statement->closeCursor();
	return $categories;
}

?>