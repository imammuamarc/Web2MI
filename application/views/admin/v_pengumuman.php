		<div class="col-md-12">
			<div style="background-color: lightgrey" class="card">
				<div class="card-header bg-primary"><?php echo $sub_judul; ?></div>
				<div class="card-body">
<?php 
if ($this->session->flashdata('info')) {
	echo"<div class='alert alert-primary'>". $this->session->flashdata('info')."</div>";
}

 ?>

					<a href="<?php echo site_url('admin/pengumuman/tambah')?>" class="btn btn-primary">Tambah data</a>
<br><br>
					<?php

					foreach ($isi_tabel as $value) :
						?>


				<div style="border: 1px solid red; padding: 15px; margin-bottom: 5px">

					<div class="row" >
						<div  class="col-sm-1">
							<img src="<?= base_url('assets/a.jpg')?>" class="img-thumbnail">
						</div>
						<div style="background-color: lightblue" class="col-sm-50">
							Penulis <strong><?= $value->penulis;  ?></strong>
							<br>
		<strong><?= $value->created_at;  ?></strong>
						</div>
						<div class="col-xl-4">
							<a href="<?= site_url('admin/pengumuman/hapus/'.$value->id); ?>" class="btn btn-danger">Hapus</a>
							<a href="<?= site_url('admin/pengumuman/edit/').$value->id; ?>" class="btn btn-warning">Edit</a>
						</div>
					</div>
					<div class="row" style="margin-top: 15px">
						<div class="col-sm-12">
							Judul pengumuman = <strong><?= $value->judul; ?></strong>
							<br>
							Isi pengumuman = <strong><?= $value->isi; ?></strong>
						</div>
					</div>
				</div> <!-- border stop -->
					<?php endforeach; ?>

				

		</div>
		</div>