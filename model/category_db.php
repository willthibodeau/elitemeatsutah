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

function get_category_name($category_id) {
    global $db;
    $query = 'SELECT * FROM categories
              WHERE cat_categoryID = :category_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $category['cat_categoryName'];
    return $category_name;
}

// check for existing category name
function detect_category_name($name){
	global $db;
	$sql = "Select cat_categoryName from categories where cat_categoryName = '$name'";
	$stmt = $db->prepare($sql);
	$stmt->execute();
		if($data = $stmt->fetch()){
			echo "The Category Name you entered is already in the database, please try another name.";
		} else {
			add_categories($name);
		}
}

function delete_category($category_id) {
    global $db;
    $query = 'DELETE FROM categories WHERE categoryID = :category_id';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

?>