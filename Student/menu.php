<?php
	define("TITLE", 'Menu | Franclins Fine Dining');
	include('includes/header.php');
?>

<div id="menu-items">
	<h1>Our Delicious Menu:</h1>
	<p>Cluck any menu item to learn more about it.</p>
	<hr>

	<ul>
		<?php
			foreach($menuItems as $keyDish => $valItem){?>
			<li>
				<a href="dish.php?item=<?php echo $keyDish;?>">
				  <?php echo $valItem["title"]; ?>
				</a>	
					<?php echo $valItem["price"].'$';?>
					<!-- <?php var_dump($item);?> -->
			</li>
		<?php }; ?>
	</ul>

</div> <!-- menu-items -->

<?php include('includes/footer.php'); ?> 