<div class="row">
	<h1>Gestion des videos</h1>

	<div class="col-lg-12">
		<table class="table table-bordered table-hover table-striped table-to-sort">
			<thead>
				<tr>
					<th>Titre</th>
					<th>Auteur</th>
					<th>Vues</th>
					<th>+</th>
					<th>-</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($videos as $vid): 
				$line_color = $vid->isSuspended() ? "danger" : ($vid->isFlagged() ? "warning": "");
				?>
					<tr class="<?php echo $line_color; ?>">
						<td><a href="<?php echo WEBROOT.'watch/'.$vid->id; ?>"><?php echo $vid->title; ?></a></td>
						<td><?php echo UserChannel::find($vid->poster_id)->name; ?></td>
						<td><?php echo number_format($vid->views); ?></td>
						<td><?php echo $vid->likes; ?></td>
						<td><?php echo $vid->dislikes; ?></td>
						<td>
							<?php if($vid->isSuspended()) { ?>
								<button class="btn-success btn" onclick="unSuspendVideo('<?php echo $vid->id ?>')">Annuler la suspension</button>	
							<?php } else { ?>
							<?php if($vid->isFlagged()){ ?>
								<button class="btn-success btn" onclick="unFlagVideo('<?php echo $vid->id ?>')">Annuler le flag</button>
								<?php }else{ ?>
								<button class="btn-warning btn" onclick="flagVideo('<?php echo $vid->id ?>')">Reporter la vidéo</button>
								<?php }?>
								<button class="btn-warning btn" onclick="suspendVideo('<?php echo $vid->id ?>')">Suspendre</button>
							<?php } ?>
						
							<?php if(Session::get()->isAdmin()): ?>
								<button class="btn-danger btn" onclick="eraseVideo('<?php echo $vid->id ?>')">Supprimer</button>
							<?php endif ?>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>

		
	</div>
</div>