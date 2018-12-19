

		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-warning"><?php echo $sub_judul; ?></div>
                                <div class="card-body bg-blue">

                                	<a href="<?php echo site_url('admin/mahasiswa/tambah')?>" class="btn btn-primary btn-sm">Tambah Data Mahasiswa</a>
                                	<hr>
					
                                    <table style="text-align: center" border="3" >
                                        <thead>
                                            <tr>
                                                <th>NIM</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Program Studi</th>
                                                <th>Tgl Dibuat</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
<?php foreach ($isi_tabel as $key) { ?>

                                        
                                        <tbody>
                                            <tr>
                                                <td><?php echo $key->nim; ?></td>
                                                <td><?php echo $key->nama_mahasiswa; ?></td>
                                                <td><?php echo $key->program_studi; ?></td>
                                                <td><?php echo date('d-M-Y', strtotime($key->created_at)); ?></td>
                                                <td><a href="<?php echo site_url('admin/mahasiswa/edit/'.$key->nim); ?>" class="btn btn-primary btn-sm" onclick="return confirm('Edit ?');">Edit</a>| <a href="<?php echo site_url('admin/mahasiswa/hapus/'.$key->nim); ?>" class="btn btn-danger btn-sm" onclick="return confirm('hapus ?');">Hapus</a></td>
                                                
                                            </tr>
                                           
                                        </tbody>
                                    <?php } ?>  

                                    </table>

                                    
                                 
                                    
                                    
				</div>
			</div>
		</div>
