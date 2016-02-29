<?php
require_once('../util/main.php');
	
require_once('../model/database.php');
	

	$query = 'SELECT * FROM categories order by cat_categoryID';
	$statement1 = $db->prepare($query);
	$statement1->execute();
	$categories = $statement1->fetchAll();
	$statement1->closeCursor();

?>
<?php include('../view/header.php'); ?>
	<div class="contentWrapper">
		<div class="columnWrapper">
			<article class="main">
				
				<ul>
					<?php foreach($categories as $category) : ?>
					<li><?php echo $category['cat_categoryID']; ?>
					<?php echo $category['cat_categoryName']; ?></li><br>
					
				<?php endforeach; ?>
			</ul>

			<h1>Products</h1>
				<div>
					<h2>Beef</h2>
					<p><img src="../images/beef.jpg" alt="Beef" class="half right"> Sellers of high quality Beef, Chicken, Pork and Seafood. BeefLorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem necessitatibus, culpa quos, cum iste soluta nihil nulla repudiandae sapiente ex quaerat! Amet autem consequatur incidunt alias dolores, minima inventore saepe Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem necessitatibus, culpa quos, cum iste soluta nihil nulla.</p>
					<br>
					<hr>
				</div>
				<div>
					<h2>Chicken</h2>
					<p><img src="../images/chicken.jpg" alt="chicken" class="half left">ChickenLorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati delectus, distinctio maxime in? Nostrum nobis sequi similique ducimus deserunt assumenda quae, vel, delectus, distinctio maxime in? Nostrum nobis sequi similique ducimus deserunt assumenda delectus, distinctio maxime in? Nostrum nobis sequi similique ducimus deserunt assumenda quae, quae,beatae ullam facere. Voluptate commodi, laboriosam quo. Commodi.</p>
					<br>
					<hr>
				</div>
				<div>
					<h2>Pork</h2>
					<p><img src="../images/pork.jpg" alt="pork" class="half right">PorkLorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam adipisci maiores odit eligendi atque, alias aliquid voluptatem ratione quae obcaecati quidem. Nobis beatae delectus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam adipisci maiores odit eligendi atque, alias aliquid voluptatem ratione quae obcaecati quidem.odio repellat, blanditiis sunt Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam adipisci maiores odit eligendi atque, alias aliquid voluptatem ratione quae obcaecati quidem.laudantium nulla.</p>
					<br><hr>
				</div>
				<div>
					<h2>Seafood</h2>
					<p><img src="../images/seafood.jpg" alt="seafood" class="half left">SeafoodLorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor nesciunt consequatur minima asperiores pariatur expedita modi quos nisi possimus itaque distinctio, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam adipisci maiores odit eligendi atque, alias aliquid voluptatem ratione quae obcaecati quidem. voluptatibus eum. Labore, id cumque debitis dolore corrupti soluta!</p>
				</div>
			</article>
			<aside class="sidebar1">
				<h2>The Cart</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur quibusdam eos?</p>	
			</aside>
		</div><!-- end columnWrapper -->

		<aside class="sidebar2">
			<h2>Testimonial</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae est minima aperiam!</p>
			<h2>Testimonial</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae est minima aperiam!</p>
			<h2>Testimonial</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae est minima aperiam!</p>
		</aside>
	</div><!-- end contentWrapper -->
<?php 
	include '../view/footer.php';
?>