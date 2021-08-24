<?php function studentCardGenerator($name, $teaser, $link)  {?>
	<student-card>
		<h2 class="site-title"><?=$name?></h2>

		<p class="teaser"><?=$teaser?></p>

		<a class="link" href="<?=$link?>" target="_newTab"><?=$slogan?></a>

	</student-card>
<?php }?>