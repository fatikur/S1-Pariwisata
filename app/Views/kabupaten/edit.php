<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
    <title>Pariwisata - Ubah Kabupaten</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
                    
    <div class="container-fluid">

    	<!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Ubah Kabupaten</h1>

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

        
    	<div class="row">
            <!-- Grow In Utility -->
            <div class="col-lg-4">
                <div class="card position-relative">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Ubah Kabupaten</h6>
                    </div>
                    <div class="card-body shadow">
                        <form method="post" action="<?= site_url('kabupaten/update') ?>/<?= $kabupaten['id_kabupaten']; ?>"  enctype="multipart/form-data">
                        	<input type="hidden" name="foto_lama" value="<?= $kabupaten['foto']; ?>">
							<div class="form-group">
							  <label for="nama_kabupaten">Kabupaten</label>
							  <input type="text" class="form-control" name="nama_kabupaten" id="nama_kabupaten" value="<?= $kabupaten['nama_kabupaten']; ?>">
							</div>
							   
							<div class="form-group d-flex flex-column">
							  	<label>Upload Foto</label>
							  	<img src="<?= base_url(); ?>/uploads/foto_kabupaten/<?= $kabupaten['foto']; ?>" class="my-3 img-thumbnail" width="200px" id="img-preview" alt="">
								<div class="custom-file mb-3">
								   	<input onchange="previewImg()" type="file" class="custom-file-input" id="foto" name="foto_kabupaten" >
								   	<label class="custom-file-label" for="foto_kabupaten">Pilih Foto</label>
								</div>
							 </div>

				  			<div class="text-right">
						  		<button class="btn btn-info">Ubah</button>
						  	</div>
						</form>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?= $this->endSection() ?>


