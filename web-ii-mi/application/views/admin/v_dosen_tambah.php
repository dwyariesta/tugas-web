<div class="col-md-6 offset-md-3">
	<div class="card">
		<div class="card-header">
			<?php echo $sub_judul; ?>
			</div>
			<form action="<?php echo site_url('admin/dosen/proses_tambah'); ?>" method="post"><form>
			<div class="card-body">
				<form action="" method="post">
					<div class="form-group">
						<label>nik</label>
						<input class="form-control" name="nik">
					</div>
					<div class="form-group">
						<label>nama dosen</label>
						<input class="form-control" name="nama_dosen">
					</div>
					<div class="form-group">
						<label>alamat</label>
						<input class="form-control" name="alamat">
					
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Simpan</button>
						<a href="<?php echo site_url('admin/dosen'); ?>" class="btn btn-warning">Batal</a>
					</div>
					
				</form>
			</div>
		</div>
	</div>