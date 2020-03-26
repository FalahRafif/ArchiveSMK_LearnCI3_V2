<div class="container mt-3">
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
					<div class="row">
						<div class="col-md-4">
							<a href="<?= base_url() ?>uks/tambah" class="btn btn-primary">Tambah Data UKS</a>
						</div>
						<div class="col md-8">
							<form action="" method="post">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Cari UKS"
										aria-label="Recipient's username" aria-describedby="button-addon2"
										name="keyword" id="keyword" autocomplete="off">
									<div class="input-group-append">
										<button class="btn btn-primary" type="submit" id="tombolcaro">Cari</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="card">
				<div class="card-header">
					<h3>Daftar UKS</h3>					
				</div>
				<div class="card-body">
					<!-- kondisi jika mahasiswa kosong -->
					<?php if( empty($uks)) : ?>
						<div class="alert alert-danger" role="alert">
							Data Tidak di Temukan
						</div>
					<?php endif; ?>
					<ul class="list-group">
						<?php foreach($uks as $uks) : ?>
						<li class="list-group-item">
							<?= $uks['nama'] ?>
							<a href="<?= base_url(); ?>uks/hapus/<?= $uks['id']; ?>"
								class="badge badge-danger float-right" onclick="return confirm('Yakin ?')"><i class="fa fa-trash"></i></a>
							<a href="<?= base_url(); ?>uks/ubah/<?= $uks['id']; ?>"
								class="badge badge-warning float-right"><i class="fa fa-edit"></i></a>
							<a href="<?= base_url(); ?>uks/detail/<?= $uks['id']; ?>"
								class="badge badge-success float-right"><i class="fa fa-info"></i></a>
						</li>
						<?php endforeach ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>