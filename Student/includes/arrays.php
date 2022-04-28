<?php 
//pages

	$navItems = array(
		array(
			"page"  => "index.php",
			"title" => "Home"
		),
		array(
			"page"  => "team.php",
			"title" => "Team"
		),
		array(
			"page"  => "menu.php",
			"title" => "Menu"
		),
		array(
			"page"  => "contact.php",
			"title" => "Contuct"
		),
	);
	
//team 

	$teamMembers = array(
		array(
			"name" => "Frankie 3",
			"position" => "Owner",
			"bio" => "Frankie 3 is the owner of Franklins Fine Dining. He cooks a mean fritatta!",
			"img" => "frankie"
		),
		array(
			"name" => "Francis",
			"position" => "General Manager",
			"bio" => "Francis knows her stuff! the big sister of Frankie himself, she runs the show.",
			"img" => "francis"			
		),
		array(
			"name" => "Carlos",
			"position" => "Head Chef",
			"bio" => "Carlos is the epitome of the phrase Dont judge a book by its cover. You simply cannot find a better chef.",
			"img" => "carlos"
		),
	);

	// menu

	$menuItems = array(
		"club-sandwich" => array(
												"title" => "Club Sandwich",
												"price" => 11,
												"info" => 'Bacon cheese brad',
												"drink" => 'Coca Cola'

		),
		"dill-salmon" => array(
												"title" => 'Lemon and Dill Salmon',
												"price" => 18,
												"info" => 'Salmon Lemon Dill baked',
												"drink" => 'green tea', 
		),
		"super-salad" => array(
			"title" => 'The Super Salad',
			"price" => '14',
			"info" => 'Ruccola Tomato Cucumber Cabbige Olive',
			"drink" => 'Tea with lemon',
		),
		"mexican-barbacoa" => array(
			"title" => 'Mexican Barbacoa',
			"price" => 22,
			"info" => 'The Beef Corn Beans Tomato Avocado Olive Oil ',
			"drink" => 'Fanta'
		),
	);
?>