<?php
	define('TITLE', 'Menu Item | Franclins Fine Dining');
	include('includes/header.php');


//echo $_GET['item'];

function strip_bad_chars($input){
	$output = preg_replace("/[^a-zA-Z0-9_-]/","",$input);
	return $output;
}

if (isset($_GET['item'])){
	$MENUitem = strip_bad_chars( $_GET['item'] );
	$DISH= $menuItems[$MENUitem];
}

//Calculate sugessted tip
function suggestedTip($price, $tip){
	$totalTip = $price * $tip;
	echo $totalTip.' $';
}
?>

<hr>
	<div id="dish">
		<h1>
			<?php echo $DISH["title"];?>
		</h1>
		<span class="price">
			<?php echo $DISH['price'].'$';?>
		</span>
		<p>
			<?php echo $DISH['info'];?>
		</p>
		<p><strong>Suggested drink:
			<?php echo $DISH['drink'];?>
		</strong></p>
		<p><i>Suggested Tip:
			<?php suggestedTip($DISH['price'], 0.10);?>
		</i></p>
	</div> <!-- dish -->

<hr>

<a href="menu.php" class="button previous">&laquo; Back to Menu</a>

<?php include('includes/footer.php');?>