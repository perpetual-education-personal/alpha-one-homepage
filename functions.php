<?php function studentCardGenerator($name, $teaser, $cta) {?>
<li>
	<student-card class="student-info">
		<h3 class="name"><?=$name?></h3>

		<p class="teaser"><?=$teaser?></p>
		<a class="cta" href=""><span><?=$cta?></span></a>
	</student-card>
</li>
<?php } ?>