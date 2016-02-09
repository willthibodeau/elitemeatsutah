<?php
    require('../model/database.php');
    require('../model/functions.php');
    

// get the value from the form
$name = filter_input(INPUT_POST, 'name');


// Validate the name
 if ( $name == null ) {
     $error = "Please insert a category Name.";
    
     include'../error.php';
 } else if ($name == !null){
        category_exists($name);
   
} else {

    // Add the category to the database  
    // add_categories();
    
    // Display the Categories
    include('index.php');
}
?>