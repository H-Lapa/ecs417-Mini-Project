<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="projects.css">
	<title>Blog</title>
</head>

<body>
	<div id="new-blog">

		<aside>
			<a href="new-blog.html">New Blog +</a>
		</aside>
	</div>

	<?php 
	require 'dbh.php';
	 $sql = "SELECT * FROM posts";
	 $result = $conn->query($sql);
	 $row = $result->fetch_all(MYSQLI_ASSOC);
	 
	 $columns = array_column ($row, 'datetime');
	 array_multisort($columns, SORT_DESC, $row);
	
	?>

	<main>
		<?php 
			foreach ($row as $row) {
		
		?>
		<div class="project">
			<div class="txt">
				<h2 class="project-title">01 / <?php echo $row['title']; ?></h2>
				<p class="project-desc"> <?php echo $row['body']; ?> </p>
			</div>
		</div>
		<hr>
		<?php } ?>
	</main>

</body>

</html>
