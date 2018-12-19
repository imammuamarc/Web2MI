

		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-warning"><?php echo $sub_judul; ?></div>
                                <div class="card-body bg-blue">

                                	<a href="<?php echo site_url('admin/dosen/tambah')?>" class="btn btn-primary btn-sm">Tambah Data Dosen</a>
                                	<hr>
					
                                    <table style="text-align: center" border="3" class="" >
                                        <thead>
                                            <tr>
                                                <th>NIK</th>
                                                <th>Nama Dosen</th>
                                                <th>Alamat</th>
                                                <th>Tgl Dibuat</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
<?php foreach ($isi_tabel as $key) { ?>

                                        
                                        <tbody>
                                            <tr>
                                                <td><?php echo $key->nik; ?></td>
                                                <td><?php echo $key->nama_dosen; ?></td>
                                                <td><?php echo $key->alamat; ?></td>
                                                <td><?php echo date('d-M-Y', strtotime($key->created_at)); ?></td>
                                                <td><a href="<?php echo site_url('admin/dosen/edit/'.$key->nik); ?>" class="btn btn-primary btn-sm" onclick="return confirm('Edit ?');">Edit</a>| <a href="<?php echo site_url('admin/dosen/hapus/'.$key->nik); ?>" class="btn btn-danger btn-sm" onclick="return confirm('hapus ?');">Hapus</a></td>
                                                
                                            </tr>
                                           
                                        </tbody>
                                    <?php } ?>  

                                    </table>

                                    
                                 
                                    
                                    
				</div>
			</div>
		</div>
