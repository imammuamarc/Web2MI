		<div class="col-md-12">
			<div style="background-color: lightgrey" class="card">
				<div class="card-header bg-primary"><?php echo $sub_judul; ?></div>
				<div class="card-body">

				
<form action="<?php echo site_url('admin/dosen/proses_tambah'); ?>" method="post">

<div class="form-group">
	<label>NIK</label>
	<input type="text" class="form-control" name="nik">
</div>

<div class="form-group">
	<label>Nama Dosen</label>
	<input type="text" class="form-control" name="nama_dosen">
</div>

<div class="form-group">
	<label>Alamat</label>
	<input type="text" class="form-control" name="alamat">
</div>
<div>
<input type="submit" name="submit" value="Simpan" class="btn btn-success">
<a href="<?php echo site_url('admin/dosen'); ?>" class="btn btn-danger">Batal</a>
</div>
</form>


		</div>
		</div>
		</div>