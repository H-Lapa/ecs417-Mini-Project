<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="new-blog.css">
	<title>New</title>
</head>

<body>
	<link rel="stylesheet" href="navbar.css">
	<?php include 'navbar.php'; ?>

	<!-- form for new contact request -->
	<form action="">
		<h2>Inquiry</h2>
		<label for="contact">Email</label>
		<input required type="email" name="Blog Title" id="title">

		<label for="">description</label>
		<input required type="text" name="Description" id="desc">

		<button type="submit" id="submit">submit</button>
	</form>
</body>

</html>
