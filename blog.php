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
	<link rel="stylesheet" href="navbar.css">
	<?php 
	include 'navbar.php'; 
	$num = 0;
	function numIncrement(&$var) {
		$var++;
		return $var;
	}

	
	?>

	<div id="new-blog">

		<aside>
			<a href="new-blog.php">New Blog +</a>

			<form action="blog-month.php" method="POST">
			<label for="months">Month Filter</label>
			<select id="Months" name="Month">
				<option value="March">March</option>
				<option value="April">April</option>
				<option value="May">May</option>
			</select>
			<input type="submit">
			</form>
		</aside>
	</div>

	<?php 
	require 'dbh.php';
	 $sql = "SELECT * FROM posts";
	 $result = $conn->query($sql);
	//  $row = $result->fetch_all(MYSQLI_ASSOC);
	 
	//  $columns = array_column ($row, 'datetime');
	//  array_multisort($columns, SORT_DESC, $row);

	$table = array();

	if(mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$table[] = $row;
		}
	}

	$length = count ($table);
	for ($i=0; $i < $length; $i++) { 
		for ($j=0; $j < ($length-1-$i); $j++) { 
			if (strtotime($table[$j]['datetime']) < strtotime($table[$j+1]['datetime']) ) {
				$t = $table[$j];
				$table[$j] = $table[$j+1];
				$table[$j+1] = $t;
			}
		}
	}
	
	// print_r($table);
	
	
	?>

	<main>
		<?php 
			foreach ($table as $row) {
		
		?>
		<div class="project">
			<div class="txt">
				<h2 class="project-title">0<?php echo numIncrement($num); ?> / <?php echo $row['title']; ?></h2>
				<p class="project-desc"> <?php echo $row['body']; ?> </p>
				<p class=""> <?php echo $row['datetime']; ?> </p>
			</div>
		</div>
		<hr>
		<?php } ?>
	</main>

</body>

</html>
