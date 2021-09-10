<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Alpha-1</title>
		<meta name="description" content="Meet the students of Alpha-1">
		<meta name="og:description" content="Meet the students of Alpha-1">
		<meta property="og:title" content="Alpha-1">
		<meta property="og:url" content="[[insert url here]]">
		<meta property="og:image" content="[[meta-image]]">
		<link rel="shortcut icon" type="image/jpg" href="[[favicon]]">
		<link rel="stylesheet" href="css/styles.css">
	</head>

	<?php include('student_data.php'); ?>
	<?php include('functions.php'); ?>

	<body>

		<div class='inner-column'>
			<header class="site-header">
				<inner-column>
          		<h1>Alpha-1 Homepage</h1>
          		<h2>Meet the students of Alpha-1</h2>        
       		</inner-column>
			</header>

			<main>
				<section class="portal">
        	<inner-column>
        		<ol class="student-list">

         		<!-- Array ... item refered to as -->
          		<?php foreach ($student_data as $student) { ?>
            	<li class="student">
            	<?php buildStudentCard($student); ?>
            	</li>
          		<?php } ?>
          		
        		</ol>
      		</inner-column>
				</section>
			</main>

			<footer>
				<inner-column>
					<p>alpha-1 to the moon 🚀</p>
				</inner-column>
			</footer>
		</div>
	
	</body>
</html>