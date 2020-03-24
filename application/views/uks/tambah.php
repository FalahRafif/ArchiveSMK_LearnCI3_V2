<div class="container mt-3">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h3>Tambah Data UKS</h3>
				</div>
				<div class="card-body">
                    <?php if(validation_errors() ) :?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
					<?php endif ?>
					<form action="" method="post">
						<div class="form-group">
							<label for="nama">Nama UKS</label>
							<input type="text" class="form-control" name="nama" id="nama">
						</div> 
						<div class="form-group">
							<label for="alamat">Alamat UKS</label>
							<input type="text" class="form-control" name="alamat" id="alamat">
						</div>
						<div class="form-group">
							<label for="notelp">No Telp UKS</label>
							<input type="text" class="form-control" name="notelp" id="notelp">
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right mr-2 ml-2">Tambah Data</button>
                        <a href="<?= base_url()  ?>uks" class="btn btn-secondary float-right mr-2 ml-2">Kembali</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>