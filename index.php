<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome to Chatbot!</title>
</head>
<body>

<?php
 	if ($_GET ['name'] == NULL):
?>

<form>
	<label for="name">Name</label>
	<input type="text" name="name" id="name">
	<input type="submit" value="Send!">
</form>

<?php

else:

$name = $_GET ['name'];
$half_name_lenght = (int) (mb_strlen($name) / 2);
$remaining_chars = mb_strlen($name) - $half_name_lenght;
$name_end = mb_substr($name, $half_name_lenght, $remaining_chars);
$name_beginning = mb_substr($name, 0, $half_name_lenght);
$botname = $name_end . $name_beginning;

?>

<h1><?= $botname ?></h1>

<?php endif ?>

</body>
</html>