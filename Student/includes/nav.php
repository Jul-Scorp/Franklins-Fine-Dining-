<ul>
	<!-- <li><a href="index.php">Home</a></li>	
	<li><a href="team.php">Team</a></li>	
	<li><a href="menu.php">Menu</a></li>	
	<li><a href="contact.php">Contact</a></li> -->

	<?php 
		foreach($navItems as $pageitem) {
			echo "<li><a href='$pageitem[page]'>$pageitem[title]</a></li>";
		}
	?>
	
</ul>

