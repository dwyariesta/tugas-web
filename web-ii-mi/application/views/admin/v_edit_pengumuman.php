<div class="col-md-12">
		<div class="card">
 		<div class="card-header " style="background-color: blue" ><?php echo $sub_judul; ?></div>
			<div class="card-body " style="background-color: pink">

				<form action="<?php echo site_url('admin/pengumuman/proses_edit'); ?>" method="post"><form>


				<form action="" method="post">
					<div class="form-group">
						<label>judul</label>
						<input type="text" class="form-control" name="judul" value="<?php echo $isi_data->judul;?>">
							
					</div>
					<div class="form-group">
						<label>isi</label>
						<textarea name="isi" cols="30" rows="5" class="form-control"><?php echo $isi_data->isi; ?></textarea>
						
					</div>
					<div class="form-group">
						<label>penulis</label>
						<input type="text" class="form-control" name="penulis" value="<?php echo $isi_data->penulis; ?>">	
						<input type="hidden" name="id_pengumuman" value="<?php echo $isi_data->id; ?>">	
					</div>
					<input type="submit" name="submit" value="simpan" class="btn btn-success">
					<a href="<?php echo site_url('admin/pengumuman'); ?>" class="btn btn-warning">Batal</a>
					
				</form>

</div>
	
</div>

</div> 