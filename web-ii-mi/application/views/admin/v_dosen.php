<div class="col-md-12">
	<div class="card">
		<div class="card-header bg-drag bg-info"><?php echo $sub_judul; ?></div>
			<div class="card-body">
				<?php 

				if ($this->session->flashdata('info')) {
				 echo "<div class='alert alert-primary'> " . $this->session->flashdata ("info") . "</div>";

				}

				 ?>
				<a href="<?php echo site_url('admin/dosen/tambah'); ?>" class="btn btn-primary">Tambah data</a>
				<hr>
				<table class="table table-bordered">
				<tr>
					<th>nik</th>
					<th>Nama dosen</th>
					<th>Alamat</th>
					<th>Tgl Dibuat</th>
					<th>Aksi</th>
				</tr>

				<?php foreach ($isi_table as $key ) { ?>
				<tr>
					<td><?php echo $key->nik; ?></td>
					<td><?php echo $key->nama_dosen; ?></td>
					<td><?php echo $key->alamat; ?></td>
					<td><?php echo date('d M Y',strtotime($key->created_at)); ?></td>
					<td>
					Edit | hapus
					</td>
			</tr>
			<?php } ?>
				</table>
		</div>
	</div>
</div>
