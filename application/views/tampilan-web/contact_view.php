<?php
 
if (isset($hasil)) {
    if ($hasil == 'true') {
        echo 'Berhasil';
    } else {
        echo 'Terjadi Kegagalan';
    }
}
//variable ini digunakan jika kita ingin menge-set kembali nilai default menggunakan pengirim yang sama
$author = (isset($_POST['author']) == true ? $_POST['author'] : '');
$email = (isset($_POST['email']) == true ? $_POST['email'] : '');
$subject = (isset($_POST['subject']) == true ? $_POST['subject'] : '');
$text = (isset($_POST['text']) == true ? $_POST['text'] : '');
?>
<div class="container">
    <div class="row"><br><br>
        <form method="post" name="contact" action="<?php echo base_url();?>contact/sendmessage">
            <label for="author">Name:</label> <input value="<?php echo $author; ?>" type="text" id="author" name="author" class="required input_field" />
            <br />
            <label for="email">Email:</label> <input value="<?php echo $email; ?>" type="text" id="email" name="email" class="validate-email required input_field" />
            <br />
             
            <label for="subject">Subject:</label> <input value="<?php echo $subject; ?>" type="text" name="subject" id="subject" class="input_field" />
            <br />
            <label for="text">Message:</label> <textarea id="text" name="text" id="text" rows="0" cols="0" class="required"><?php echo $text; ?></textarea>
             
            <br />
            <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
            <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />
         
        </form>
    </div>
</div>