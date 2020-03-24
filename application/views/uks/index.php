<div class="containe mt-3">
	<?php if( $this->session->flashdata('flash') ) : ?>
	<div class="row">
		<div class="col-sm-12">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash') ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
	</div>
	<?php endif ?>
	<div class="row">
		<div class="col-sm-6">
			<div class="card">
				<div class="card-header">
					<h3>Action Box</h3>
				</div>
				<div class="card-body">
					<a href="<?= base_url() ?>uks/tambah" class="btn btn-primary">Tambah Data UKS</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="card">
				<div class="card-header">
					<h3>Daftar UKS</h3>
				</div>
				<div class="card-body">
					<ul class="list-group">
						<?php foreach($uks as $uks) : ?>
						<li class="list-group-item">
							<?= $uks['nama'] ?> 
							<a href="<?= base_url(); ?>uks/hapus/<?= $uks['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin ?')">Hapus</a>
						</li>
						<?php endforeach ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>