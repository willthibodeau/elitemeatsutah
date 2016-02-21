<?php
	require('../model/database.php');
	require('../model/functions.php');
	include('../view/header.php');

	$action = filter_input(INPUT_POST, 'action');
		if($action === NULL){
			$action = filter_input(INPUT_GET, 'action');
			if($action === NULL){
				$action = 'list_categories';
			}
		}
if($action == 'list_categories'){
	$categories = get_categories();
	
} else if ($action == 'add_categories'){
	$name = filter_input(INPUT_POST, 'name');
	category_exists($name);
	add_categories($name);	
	include('../products/index.php');

} else if ($action == 'delete_categories'){


} else {

}

?>
	<div class="contentWrapper">
		<div class="columnWrapper">
		<article class="main">
			<table>
				<tr>
					<th>Category</th>
				</tr>
				<?php foreach ($categories as $category) : ?>
				<tr>
					<td><?php echo $category['cat_categoryName']; ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
<?php echo $message; ?>
		<h1>Admin</h1>
			<div>
				<h2>Account</h2>
				<p> Sellers of high quality Beef, Chicken, Pork and Seafood. BeefLorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem necessitatibus, culpa quos, cum iste soluta nihil nulla repudiandae sapiente ex quaerat! Amet autem consequatur incidunt alias dolores, minima inventore saepe Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem necessitatibus, culpa quos, cum iste soluta nihil nulla.</p>
				<br>
				<hr>
			</div>
			<div>
				<h2>Categories</h2>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati delectus, distinctio maxime in? Nostrum nobis sequi similique ducimus deserunt assumenda quae, vel, delectus, distinctio maxime in? Nostrum nobis sequi similique ducimus deserunt assumenda delectus, distinctio maxime in? Nostrum nobis sequi similique ducimus deserunt assumenda quae, quae,beatae ullam facere. Voluptate commodi, laboriosam quo. Commodi.</p>
				<br>
				<hr>
			</div>
			<div>
				<h2>Orders</h2>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam adipisci maiores odit eligendi atque, alias aliquid voluptatem ratione quae obcaecati quidem. Nobis beatae delectus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam adipisci maiores odit eligendi atque, alias aliquid voluptatem ratione quae obcaecati quidem.odio repellat, blanditiis sunt Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam adipisci maiores odit eligendi atque, alias aliquid voluptatem ratione quae obcaecati quidem.laudantium nulla.</p>
				<br><hr>
			</div>
			<div>
				<h2>Products</h2>
				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor nesciunt consequatur minima asperiores pariatur expedita modi quos nisi possimus itaque distinctio, Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam adipisci maiores odit eligendi atque, alias aliquid voluptatem ratione quae obcaecati quidem. voluptatibus eum. Labore, id cumque debitis dolore corrupti soluta!</p>
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