<h1>Contact Form</h1>

<p>Sorry but there was an error sending your message - <strong>we have not received it</strong>.</p>

<p>You message is preserved below so you do not lose what you typed. Please manually email it to us<?

if ($displayEmailWhenError) {

	echo " at " . $sendEmailTo;
}

?>.</p>

<?="<textarea name='message'>" . set_value("message") . "</textarea>";?>
