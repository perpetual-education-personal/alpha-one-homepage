<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" >
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>alpha 1 homepage</title>
		<meta name="description" content="[[meta-description]]">

		<meta property="og:image" content="[[meta-image]]">

		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<?php 
		include 'functions.php';
		include 'student-data.php';
		?>

		<h1>Alpha-1 Home Page</h1>
		<ul>
			<li>
				<?php 
				studentCardGenerator("marco", "lets git it done", "https://perpetual.education");
				
				// studentCardGenerator("alex", "web design is fun", "https://perpetual.education");
				?>
					
			</li>
		</ul>
	
	</body>
</html>