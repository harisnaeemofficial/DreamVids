<?php

?>

<div class="container">
	<div class="container" style="">
		<div class="border-top"></div>
			<h1><?php echo $title; ?><small> <?php echo $lang['by']; ?> <a href="#"><?php echo $author; ?></a></small></h1>
		<div class="border-bottom"></div>

		<br><br>
	</div>

	<div class="container" style="">

		<video id="video_player" class="video-js vjs-default-skin"
		controls preload="auto" width="640" height="360" data-setup="{'video':true}">
		<?php
		/* TMP
			<source src="<?php echo $path.'.mp4'; ?>" type='video/mp4' />
			<source src="<?php echo $path.'.webm'; ?>" type='video/webm' />
			<source src="<?php echo $path.'.ogv'; ?>" type='video/ogg' />
		*/?>
			<source src="<?php echo $path; ?>" type='video/mp4' />
			<source src="<?php echo $path; ?>" type='video/webm' />
			<source src="<?php echo $path; ?>" type='video/ogg' />
			<img src="img/loadervids.gif" alt="traitement" /><br><b><?php echo $lang['loading_video']; ?></b>
		</video>
	</div>

	<br />
	
	<div class="container">
		<!-- <button class="btn btn-success"> -->
		
		<div class="panel panel-primary" style="width: 56%;">
			<div class="panel-heading">
				<?php echo $lang['desc']; ?>
			</div>
			<div class="panel-body">
				<?php echo bbcode(secure($desc)); ?>
			</div>
		</div>
	</div>
</div>
