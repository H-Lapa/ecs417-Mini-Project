<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="new-blog.css">
	<title>New</title>
</head>

<body>
	<link rel="stylesheet" href="navbar.css">
	<?php include 'navbar.php'; ?>
	<!-- form for new blog submission -->
	<form action="addpost.php" method="POST">
		<h2>New-Blog</h2>
		<label for="" id="titlelabel">Title</label>
		<input type="text" name="Blog-Title" id="title">

		<label for="" id="desclabel">Description</label>
		<input type="text" name="Description" id="desc">

		<button type="submit" id="submit" name="newPost">submit</button>
	</form>
	<button id="clear" >Clear</button>

	<script src="addPost.js"></script>
</body>

</html>
