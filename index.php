<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title></title>
		<meta
			name="description"
			content="[[meta-description]]"
		/>
		<meta
			name="og:description"
			content="[[meta-description]]"
		/>
		<!-- these are self closing, no /> needed! -->

		<!-- I think most of these meta tags can be removed, except the description. thoughts? -->

		<meta property="og:title" content="[[meta-content]]" />
		<meta property="og:type" content="">
		<meta property="og:url" content="">

		<meta property="og:image" content="[[meta-image]]" />
		<link rel="shortcut icon" type="image/jpg" href="[[favicon]]" />

		<link rel="stylesheet" href="css/styles.css" />
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
				
				// just a test!
				// studentCardGenerator("alex", "web design is fun", "https://perpetual.education");
				?>
					
			</li>
		</ul>
	
	</body>
</html>