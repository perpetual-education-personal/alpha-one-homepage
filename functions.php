<?php
	// some general functions you can use in the other files

	// "Key" is folder name
?>

<?php function buildStudentCard($student) { ?>
	<student-card id='<?=$student["key"]?>-theme'>

		<?php if ($student["extra"]) { ?>
			<div class='flourish'></div>
		<?php } ?>

		<h3 class='site-title'><?=$student["title"]?></h3>

		<p class='teaser'><?=$student["teaser"]?></p>

		<a class='link' href='<?=$student["key"]?>' target='<?=$student["key"]?>'>
			<span><?=$student["cta"]?></span>
		</a>

	</student-card>
<?php } ?>
