<?php
	define("TITLE", "Team | Franclins Fine Dining");
	include('includes/header.php');
?>

<div id="team-members" class="cf">
	<h1>Our fantastic Team!</h1>
	<p>Franclins Fine Dining has been a family-owned. When you get these tree together, you never know what can happen. But you can count on one thing: <strong>The best food you have ever had!</strong></p>
<hr>

<?php foreach($teamMembers as $member){ ?>

	<div class="member">
		<img src="img/<?php echo $member['img']; ?>.png" alt="<?php echo $member['name']; ?>">
		<h2><?php echo $member['name']; ?></h2>
		<p><?php echo $member['bio']; ?></p>
	</div> <!-- member -->

<?php }; ?>

</div> <!-- team-members -->

<?php include('includes/footer.php'); ?>