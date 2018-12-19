<!DOCTYPE html>
<html>
<head>
	<title><?php echo $judul; ?></title>
	<link rel="stylesheet" href="<?php echo base_url ('assets/dist/css/bootstrap.css'); ?>">
</head>
<body>
<div class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/pengumuman') ?>">Pengumuman</a>
      </li>
     <!--  <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('admin/mahasiswa') ?>">mahasiswa</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Data Master
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('admin/mahasiswa/index') ?>">Mahasiswa</a>
          <a class="dropdown-item" href="<?php echo site_url('admin/dosen/index') ?>">Dosen</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Perwalian</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

</div>
<div class="container">
	<div class="row">

	<?php $this->load->view($halaman); ?>
	
	</div>
</div>

<script src="<?php echo base_url('assets/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/dist/js/bootstrap.js'); ?>"></script>

</body>


</html>
