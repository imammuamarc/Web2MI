		<div class="col-md-12">
			<div style="background-color: lightgrey" class="card">
				<div class="card-header bg-primary"><?php echo $sub_judul; ?></div>
				<div class="card-body">

				
<form action="<?php echo site_url('admin/mahasiswa/proses_edit'); ?>" method="post">

<div class="form-group">
	<label>Nim</label>
	<input class="form-control" name="nim" value="<?php echo $isi_data->nim; ?>" readonly>
</div>

<div class="form-group">
	<label>Nama Mahasiswa</label>
	<input class="form-control" name="nama_mahasiswa" value="<?php echo $isi_data->nama_mahasiswa; ?>">
</div>

<div class="form-group">
	<label>program studi</label>
	<select class="form-control" name="program_studi"> <option value="<?php echo $isi_data->program_studi; ?>"><?php echo $isi_data->program_studi; ?></option>
		<option value="D3 MI">D3 MI</option>
		<option value="D3 TI">D3 TI</option>
		<option value="S1 TI">S1 TI</option>
	</select>
</div>
<div>
<input type="submit" name="submit" value="Simpan" class="btn btn-success">
<a href="<?php echo site_url('admin/mahasiswa'); ?>" class="btn btn-danger">Batal</a>
</div>
</form>


		</div>
		</div>
		</div>