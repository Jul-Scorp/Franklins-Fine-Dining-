<?php 
	define('TITLE', 'Contact | Franclins Fine Dining');
	include('includes/header.php');
?>

<div id="contact">
	<hr>
	<h1>Get in touch with us!</h1>

<?php 
//check for header huck injections
	function has_header_injection($str){
		return preg_match("/[\r\n]/", $str);
	}

		if (isset($_POST['contact_submit'])){
			$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			$msg = $_POST['msg'];
//check if $name or $email have header injections
			if (has_header_injection($name) || has_header_injection($email)){
				die(); //kill the script if true
			}
//validation if empty
			if(!$name || !$email || !$msg){
				echo '<h4 class="error">All fields required</h4>
				<a href="contact.php" class="button block">Go and try again</a>';
				exit();
			}
//			var_dump($_POST);
//the recipient of the email newslwtter
			$to="9266494592@mail.ru";
//create 	a subject
			$subject = "$name sent you a message via your contact form";
//construct a msg			
			$message = "Name: $name\r\n";
			$message.="Email: $email\r\n";
			$message.="Message:\r\n$msg";
//if the subscribe was checked
			if(isset($_POST['subscribe']) && $_POST['subscribe']== 'Subscribe'){
//add a new line to the $message
				$message.="\r\n\r\nPlease add $email to the mailing list";
			}
//72 caracters per line
			$message = wordwrap($message, 72);
//set the mail headers - is requred for mailing	
			$headers = "MIME-Version: 1.0\r\n";
			$headers.= "Content-type: text\plain; charset=iso-8859-1\r\n";
			$headers.= "From: $name <$email>\r\n";
			$headers.= "X-Priority: 1\r\n";
			$headers.= "X-MSMail-Priority: High\r\n\r\n";	
			
//send the email
	//		mail($to, $subject, $message, $headers);			
?>

<!-- break php to add HTML and show success msg-->
<h5>Thanks for contacting Franclins!</h5>
<p>Please allow 24 hours for a response.</p>
<p><a href="" class="button block">&laquo; Go to Home Page</a></p>

<?php } else { ?>
<!-- if the submit btn was not pressed then nowbody filled the form then show the form -->
	<form action="" method="POST" id="contact-form">
		<label for="name">Your name:</label>
		<input type="text" id="name" name="name">
		<label for="email">Your email:</label>
		<input type="text" id="email" name="email">
		<label for="msg">Your message:</label>
		<textarea id="msg" name="msg"></textarea>
		<input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
		<label for="subscribe">Subscribe to our newsletter</label>
		<input type="submit" class="button next" name="contact_submit" value="Send Message">
	</form>

<?php } //close else statement ?>

<hr>
</div> <!-- contact-->

<?php include('includes/footer.php');?>