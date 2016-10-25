<h1>Contact Form</h1>
<?php echo validation_errors(); ?>
<?
	echo form_open(current_url()); 
?>

	<table>
	<?php

		echo "<tr>
			<td>" . form_label('Name: ', 'name') . "</td>
			<td>" . form_input('name', set_value('name')) . "</td>
			</tr>";

		echo "<tr>
			<td>" . form_label('Email: ', 'email'). "</td>
			<td>" . form_input('email', set_value('email')) . "</td>
			</tr>";

		echo "<tr>
			<td>".form_label('Message: ', 'message'). "</td>
			<td><textarea name='message'>" . set_value("message") . "</textarea></td>
			</tr>";


		if ($show_spam_protection) {

		echo "<tr>
			<td>" . form_label('Spam protection - : ' . $spam_question, 'spam_protection'). "</td>
			<td>" . form_input('spam_protection', set_value('spam_protection')) . "</td>
			</tr>";

		}

		echo "<tr>
			<td>".form_submit('submit', 'Submit Message') . "</td>
			</tr>";

	?>
	</table>

<?
	echo form_close();
?>

<?
		// leaving the credit is nice :)
		// or... better yet... hire me for PHP (esp. CodeIgniter related) work!
		// I am UK/EU Based but work remotely.
		// Also message me if you just need a hand implementing this.
?>
<p style='margin-top:25px;font-size:10px;'><a href='http://ashleybaker.co.uk/'>Contact Form by Ashley Baker</a></p>


