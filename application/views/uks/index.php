<div class="containe mt-3">
	<div class="row">
		<div class="col-sm-6">
			<div class="card">
				<div class="card-body">
					<ul class="list-group">
						<?php foreach($uks as $uks) : ?>
						<li class="list-group-item"><?= $uks['nama'] ?></li>
						<?php endforeach ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>