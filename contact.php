<?php include('include/head.php'); ?>
<script src='js/hintedtextbox.js' type='text/javascript'></script>

<h1>Contact Me</h1>

<div id='contact'>
	<form action='contact.php' method='post' name='contactform' onsubmit='return validateForm();'>
		<!--<label for='name'>Name:</label>-->
		<input type='text' hint='your name' name='name' class='formfield' />
		<!--<label for='email'>Email*:</label>-->
		<input type='text' hint='your email address*' name='email' class='formfield' />
		<!--<label for='name'>Subject:</label>-->
		<input type='text' hint='the subject' name='subject' class='formfield' />
		<!--<label for='message'>Message:</label>-->
		<textarea name='message' hint='write your message here' rows='10' cols='32' class='formfield' /></textarea>
		<input type='submit' class='submitbtn' value='Send Message' />
	</form>
</div>

<div id='sociallinks' class='imgcont left imgsm'>
	<img src='images/self.jpg' alt='Photograph of Eleanor Paxman' />
	<div class='caption'>
		Other ways to contact me:<br />
		<a href='http://www.linkedin.com/pub/eleanor-paxman/20/6aa/753' target='_blank'>My LinkedIn profile</a><br />
		<a href='https://github.com/paxell' target='_blank'>My GitHub Account</a>
	</div>
</div>

<div class='clear'></div>
<?php
  if(isset($_POST['subject'])) {
	  $emailSubject = "";
	  $emailMessage = $_POST['subject'] . "\n\r" . $_POST['message'];
	  $emailFrom = $_POST['email'];
	  $emailFromName = $_POST['name'];
	  
	  $emailTo = 'e.paxman.design@gmail.com';
	  $headers = "From: ".$emailFrom;
	  
	  if (strlen($emailMessage) == 0) {
		  echo 'You have not entered a message.';
	  } else {
		  
		  if (strlen($emailFrom) > 0) {
			  $emailSubject = '*** Website Contact from: "' . $emailFromName . '" <' . $emailFrom . '>'.'***';
		  } else {
			  $emailSubject = '*** Website Contact ***';
		  }
		  
		  /* Send Email */
		 if (mail($emailTo, $emailSubject, $emailMessage, $headers)) {
			echo 'Your message has been sent!';
		 } else {
			 echo 'There was an internal error whilst sending your email.<br>';
			echo 'Please try again later.';    
		 }
	  }
	  
  }
?>
  
<?php include('include/foot.php'); ?>