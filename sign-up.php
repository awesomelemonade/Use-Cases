<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lemon's Website</title>
	<?php include '/template/css-rqmts/link.php'; ?>
	<link rel="stylesheet" href="/sign-up.css" type="text/css"/>
</head>
<body>
	<?php include '/template/base.php'; ?>
	<?php include '/template/header.php'; ?>
	<div id="wrapper">
		<form action="submit.php" method="POST">
			<h1>Day 3 Study Hall Passes</h3>
			<p>Name: <input type="text" name="Name"></p>
			<p>Study Hall Teacher: <input type="text" name="Teacher"></p>
			<p>Email: <input type="text" name="Email"></p>
			<p>Block: </p>
			<input type="radio" name="Block" value="A-Block">A Block</br>
			<input type="radio" name="Block" value="A-Block">C Block</br>
			<input type="radio" name="Block" value="A-Block">D Block</br>
			<input type="radio" name="Block" value="A-Block">F Block</br>
			<input type="radio" name="Block" value="A-Block">E Block</br>
			<input type="submit" name="Submit">
		</form>
	</div>
	<?php include '/template/footer.php'; ?>
</body>
</html>