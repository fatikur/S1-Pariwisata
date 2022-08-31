<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
    <title>Pariwisata - Ubah Jenis Wisata</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
                    
    <div class="container-fluid">

    	<!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Ubah Jenis Wisata</h1>

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
                        <h6 class="m-0 font-weight-bold text-primary">Ubah Jenis Wisata</h6>
                    </div>
                    <div class="card-body shadow">
                        <form method="post" action="<?= site_url('JenisWisata/update') ?>/<?= $jenis_wisata['id_jenis_wisata']; ?>">
						  <div class="form-group">
						    <label for="nama_jenis_wisata">Jenis Wisata</label>
						    <input value="<?= $jenis_wisata['nama_jenis_wisata']; ?>" type="text" class="form-control" name="nama_jenis_wisata" id="nama_jenis_wisata" placeholder="Masukkan Jenis Wisata">
						  </div>
						  <div class="form-group text-right">
						  	<button class="btn btn-info">Ubah</button>
						  </div>
						</form>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?= $this->endSection() ?>


