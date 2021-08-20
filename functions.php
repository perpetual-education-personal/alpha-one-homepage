<?php function studentCardGenerator($name, $slogan, $link)  {?>
	<student-card>
		<ul class="student-info">
			<li>
				<h2 class="student-name"><?=$name?></h2>
			</li>

			<li>
				<a href="<?=$link?>"><?=$slogan?></a>
			</li>
		</ul>

	</student-card>
<?php }?>