<div class="content">
	<div id="video-top-infos">
		<div id="video-top-title">
			<div id="video-top-channel">
				<img src="<?php echo $channel->getAvatar(); ?>">
				<span id="hover_subscribe" data-channel="<?php echo $channel->id; ?>" class="<?php echo $subscribed ? 'subscribed' : ''; ?>">
					<i><?php echo $subscribed ? 'Abonné': 'S\'abonner'; ?></i>
				</span>
				<div id="video-top-channel-infos">
					<a id="video-top-pseudo" href="<?php echo WEBROOT.'channel/'.$channel->id; ?>" class="<?php echo $channel->isVerified() ? 'validate' : ''; ?>">
						<?php echo $channel->name; ?>
					</a>
					<hr>
					<p id="video-top-abonnes"><span class="strong"><?php echo $subscribers; ?></span> abonnés</p>
				</div>
			</div>
			<h1 class="<?php echo ($onAir) ? 'live' : 'title'; ?>">Live de <?php echo $channel->name; ?></h1>
		</div>
	</div>
	
	<?php if ($onAir) { ?>
		<div id="player">
			<video id="live-player" class="video-js vjs-default-skin" controls preload="auto" width="640" height="360" data-setup='{ "techOrder": ["flash"] }'>
				<source src="<?php echo Config::getValue_('livestream-source').$channel->name; ?>" type='rtmp/flv' />
			</video>
		</div>
	<?php }

	else { ?>
		<div id="player" class="live-offline">
			<div class="live-offline__image"></div>
		</div>
	<?php } ?>

	<section class="video-infos live <?php if (!$onAir) { echo "live--offline"; } ?>">

		<div class="views">128 viewers</div>

		<hr>

		<div class="live-chat">

			<div class="live-chat__messages" id="messages-panel">
				
				<!--<div class="live-chat__message">

					<img class="live-chat__message__avatar" src="http://lorempicsum.com/nemo/255/200/2">
					<span class="live-chat__message__pseudo">Pseudo</span>
					<p>Lol</p>

				</div>

				<div class="live-chat__message">

					<img class="live-chat__message__avatar" src="http://lorempicsum.com/rio/350/200/1">
					<span class="live-chat__message__pseudo">Pseudo</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, maiores, sit! Quibusdam aut adipisci amet, beatae dolor natus odit quo excepturi, quia doloremque reprehenderit? Nulla corporis doloribus eaque, voluptatum sit.</p>

				</div>

				<div class="live-chat__message">

					<img class="live-chat__message__avatar" src="http://lorempicsum.com/simpsons/255/200/5">
					<span class="live-chat__message__pseudo">Pseudo</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

				</div>
				-->

			</div>
			
			<form class="live-chat__form" method="post" onsubmit="return false;" onclick="document.getElementById('live-chat-input').focus();">

				<input class="live-chat__form__input" id="live-chat-input" type="text" placeholder="Message">

			</form>

		</div>

	</section>
	
</div>

<script>

	var chatLiveOptions = {
		ip: "192.168.33.10",
		port: 8081,
		channel: '<?php echo $channel->name; ?>',
		username: '<?php echo Session::get()->username; ?>',
		sessionId: '<?php echo Session::getId(); ?>'
	};

</script>