<div class="col-md-12">
		<div class="card">
 		<div class="card-header " style="background-color: blue" ><?php echo $sub_judul; ?></div>
			<div class="card-body " style="background-color: pink">

				<?php 

				if ($this->session->flashdata('info')) {
				 echo "<div class='alert alert-primary'> " . $this->session->flashdata ("info") . "</div>";

				}

				 ?>

				<a href="<?php echo site_url('admin/pengumuman/tambah'); ?>" class="btn btn-primary">Tambah data</a>

				<br> <br>

			<?php 

			foreach ($isi_table as $value): ?>
			
			<div style="border: 1px solid red; padding: 15px; margin-bottom: 10px">

			<div class="row">
				<div class="col-sm-1">
					<img src="<?= base_url('assets/dwiariesta.JPG') ?>" class="img-thumbnail">
				</div>
				<div class="col-sm-4">
					penulis <strong><?= $value->penulis; ?></strong>
					<br>
					<small>03-07-2018</small>
				</div>

 				<div class="col-xl-7">
 					<a href="<?= site_url('admin/pengumuman/hapus/' . $value->id); ?>" 
 					class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin?')">hapus</a>

 					<a href="<?= site_url('admin/pengumuman/edit/' . $value->id); ?>"
 					class="btn btn-warning btn-sm">edit</a>


 				</div>

			</div>
			<div class="row">
				<div class="col-sm-12">
					<h4><?= $value->judul ?></h4>
					<br>
					<p><?= $value->isi ?></p>
					
			</div>
				
			</div>

			</div> 

<?php endforeach; ?>

			

</div>
	
</div>

</div> 