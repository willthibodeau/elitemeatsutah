<?php 
// require_once('util/main.php');


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Elite Meats</title>
	<link rel="stylesheet" type="text/css"
          href="<?php echo $app_path ?>/css/style.css">
	<script type="text/javascript" src="../../js/elitemeats.js"></script>
	<script type="text/javascript" src="../../js/jquery-1.11.1.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	
</head>
<body>
<div class="pageWrapper">
		<header>
			<nav class="clear">
				<ul>
					<li><a href="<?php echo $app_path ?>/index.php">HOME</a></li>
					<li><a href="<?php echo $app_path ?>products/index.php">PRODUCTS</a></li>
					<li><a href="<?php echo $app_path ?>admin/index.php">ADMIN</a>
						<ul>
							<li><a href="<?php echo $app_path ?>admin/add_categories_form.php">Add Categories</a></li>
						</ul></li>
					<li><a href="<?php echo $app_path ?>Members/index.php">MEMBERS</a></li>
				</ul>
			</nav>
			<h1>Elite Meats</h1>
			<h3>Login / Signup</h3>

		</header>