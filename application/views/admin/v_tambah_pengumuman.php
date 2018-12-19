		<div class="col-md-12">
			<div style="background-color: lightgrey" class="card">
				<div class="card-header bg-primary"><?php echo $sub_judul; ?></div>
				<div class="card-body">

				
<form action="<?php echo site_url('admin/pengumuman/proses_tambah'); ?>" method="post">

<div class="form-group">
	<label>judul</label>
	<input type="text" class="form-control" name="judul">
</div>

<div class="form-group">
	<label>isi</label>
	<textarea name="isi" cols="30" rows="5" class="form-control"></textarea>
</div>

<div class="form-group">
	<label>penulis</label>
	<input type="text" class="form-control" name="penulis">
</div>
<input type="submit" name="submit" value="Simpan" class="btn btn-success">
<a href="<?php echo site_url('admin/pengumuman'); ?>" class="btn btn-danger">Batal</a>

</form>


		</div>
		</div>
		</div>