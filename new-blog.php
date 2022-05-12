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

	<?php
        // this is an if statement questioning whether someone has already logged in
          if (isset($_SESSION['username'])) {
            echo
            '<form action="addpost.php" method="POST">
				<h2>New-Blog</h2>
				<label for="" id="titlelabel">Title</label>
				<input type="text" name="Blog-Title" id="title">

				<label for="" id="desclabel">Description</label>
				<input type="text" name="Description" id="desc">

				<button type="submit" id="submit" name="newPost">submit</button>
				<button id="clear" value="clear">Clear</button>
			</form>';
            //if they are logged in they show the account icon with the link to the account page
          }
          else {
			  echo 'You need to be logged in to add posts';
            //if they are not logged in they will get a sign in icon and it will be linked too the sign up page
          }
          
    ?>

	<script src="addPost.js"></script>
</body>

</html>
