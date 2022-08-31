<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
    <title>Pariwisata - Wisata</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
                    
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Wisata</h1>

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

        <?php if (session()->getFlashdata('error')) : ?>
        	<div class="alert alert-danger border-left-danger alert-dismissible fade show" role="alert">
	        	<button class="btn btn-danger btn-circle btn-sm mr-3">
	                <i class="fas fa-check"></i>
	            </button>
			  	<strong>Error !</strong>
	   	    	<?= session()->getFlashdata('error') ?>
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
			</div>
        <?php endif ?>
        <!-- end notif -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mb-2 font-weight-bold text-primary">Data Wisata</h6>
                <a href="<?= site_url(); ?>wisata/new" class="btn btn-primary"> <i class="fas fa-plus mr-2"></i> Tambah Data</a>
            </div>
            <div class="card-body">
            	
                <div class="row">
                	<div class="col-12">
                		<table class="table table-bordered  table-striped">
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Nama Wisata</th>
						      <th scope="col">Kabupaten</th>
						      <th scope="col">Jenis Wisata</th>
						      <th scope="col">Harga Tiket</th>
						      <th scope="col">Jam Buka</th>
						      <th scope="col">Jam Tutup</th>
						      <th scope="col" style="width: 5%">Aksi</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php foreach ($wisata as $key => $row): ?>
						  		<tr>
							      <th scope="row"><?= ++$key; ?></th>
							      <td><?= $row['nama_wisata']; ?></td>
							      <td><?= $row['nama_kabupaten']; ?></td>
							      <td><?= $row['nama_jenis_wisata']; ?></td>
							      <td>Rp. <?= number_format($row['harga_tiket']); ?></td>
							      <td><?= $row['jam_buka']; ?></td>
							      <td><?= $row['jam_tutup']; ?></td>
							      <td>
							      	<a href="<?= site_url() ?>wisata/<?= $row['id_wisata']; ?>" class="btn btn-primary">Detail</a>
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


