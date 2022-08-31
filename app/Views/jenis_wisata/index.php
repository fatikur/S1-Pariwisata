<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
    <title>Pariwisata - Jenis Wisata</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
                    
    <div class="container-fluid">

    	<!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Jenis Wisata</h1>

        <!-- notif -->
		<?php if (session()->getFlashdata('success')) : ?>
        	<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
	        	<button class="btn btn-success btn-circle btn-sm mr-3">
	                <i class="fas fa-check"></i>
	            </button>
			  	<strong>Success !</strong>
	   	    	<?= session()->getFlashdata('success') ?>
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
			</div>
        <?php endif ?>
        <!-- end notif -->

        

    	<div class="row">

            <!-- Grow In Utility -->
            <div class="col-lg-4">
                <div class="card position-relative">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Jenis Wisata</h6>
                    </div>
                    <div class="card-body shadow">
                        <form method="post" action="<?= site_url('JenisWisata/create') ?>">
						  <div class="form-group">
						    <label for="nama_jenis_wisata">Jenis Wisata</label>
						    <input type="text" class="form-control" name="nama_jenis_wisata" id="nama_jenis_wisata" placeholder="Masukkan Jenis Wisata">
						  </div>
						  <div class="form-group text-right">
						  	<button class="btn btn-info">Tambah</button>
						  </div>
						</form>
                    </div>
                </div>
            </div>

            <!-- Fade In Utility -->
            <div class="col-lg-8">
                <div class="card position-relative">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Jenis Wisata</h6>
                    </div>
                    <div class="card-body shadow">
                        <table class="table table-bordered  table-striped">
						  <thead>
						    <tr>
						      <th scope="col" style="width: 3%">#</th>
						      <th scope="col">Jenis Wisata</th>
						      <th scope="col" style="width: 20%">Aksi</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php foreach ($jenis_wisata as $key => $row): ?>
						  		<tr>
							      <th scope="row"><?= ++$key; ?></th>
							      <td><?= $row['nama_jenis_wisata']; ?></td>
							      <td>
							      	<a href="<?= site_url() ?>JenisWisata/edit/<?= $row['id_jenis_wisata']; ?>" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
							      	<a href="<?= site_url() ?>JenisWisata/remove/<?= $row['id_jenis_wisata']; ?>" class="btn btn-outline-danger" onclick="return confirm('Apa Anda Yakin Ingin Menghapus Data ?')"><i class="fas fa-trash"></i></a>
							      </td>
							    </tr>
						  	<?php endforeach ?>
						  </tbody>
						</table>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?= $this->endSection() ?>


