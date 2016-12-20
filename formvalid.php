<html>
<head></head>
<body>

<?php

$name =""; // Sender Name

$email =""; // Sender's email ID

$technologies ="";

$message =""; // Sender's Message

$nameError ="";

$emailError ="";

$technologiesError ="";

$messageError ="";

$fileError ="";

$successMessage =""; // On submitting form below function will execute.

if ( isset ( $_POST['submit'] ) )  { // Checking null values in message.

if ( empty ( $_POST["name"] ) ) {

$nameError = "Name is required";

}

if ( empty ( $_POST["email"] ) ) {

$emailError = "Email is required";

}
if   (!isset ( $_POST["technologies"] ) ) {

$technologiesError = "Select one technology";

}
if ( empty ( $_POST["message"] ) ) {

$messageError = "Message is required";

}

if ( !$_FILES['resume']['name'] ) {
 $fileError = "File is required";
 }

}

?>







<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">

<label>Name :</label>
<input class="input" type="text" name="name" value="">
<div class="error"><?php echo $nameError;?></div>

<label>Email :</label>
<input class="input" type="text" name="email" value="">
<div class="error"><?php echo $emailError;?></div>

<label>Technologies :</label>
<div>
<input type="radio" name="technologies" value="PHP"> PHP
<input type="radio" name="technologies" value="HTML"> HTML
<input type="radio" name="technologies" value="PYTHON"> Python
</div>
<div class="error"><?php echo $technologiesError;?></div>

<label>Message :</label>
<textarea name="message" val=""></textarea>
<div class="error"><?php echo $messageError;?></div>

<label>Resume :</label>
<input class="input" type="file" name="resume">
<div class="error"><?php echo $fileError;?></div>

<input class="submit" type="submit" name="submit" value="Submit">
<div class="success"><?php echo $successMessage;?></div>
</form>
</body>
</html>