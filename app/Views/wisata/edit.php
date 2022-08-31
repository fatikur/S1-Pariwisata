<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
    <title>Pariwisata - Ubah Wisata</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
                    
    <div class="container-fluid">

    	<!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Ubah Wisata</h1>

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
            <div class="col-lg-6">
                <div class="card position-relative">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Ubah Wisata</h6>
                    </div>
                    <div class="card-body shadow">
                        <form method="post" action="<?= site_url('wisata/update') ?>/<?= $wisata['id_wisata']; ?>"  enctype="multipart/form-data">
                        	<input type="hidden" name="foto_lama" value="<?= $wisata['foto']; ?>">

                        	<div class="form-row">
								<div class="form-group col-md-12">
							  	<label for="nama_wisata">Nama Wisata</label>
							  	<input required type="text" class="form-control" name="nama_wisata" value="<?= $wisata['nama_wisata']; ?>">
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
							      <label for="kabupaten">Kabupaten</label>
							      <select id="kabupaten" class="form-control" name="id_kabupaten">
							      	<?php foreach ($kabupaten as $row): ?>
							        	<option <?= $wisata['id_kabupaten'] == $row['id_kabupaten'] ? "selected" : null ?> value="<?= $row['id_kabupaten']; ?>"><?= $row['nama_kabupaten']; ?></option>
							      	<?php endforeach ?>
							      </select>
							    </div>

							    <div class="form-group col-md-6">
							      <label for="jeniswisata">Jenis Wisata</label>
							      <select id="jeniswisata" class="form-control" name="id_jenis_wisata">
							      	<?php foreach ($jenis_wisata as $row): ?>
							        	<option <?= $wisata['id_jenis_wisata'] == $row['id_jenis_wisata'] ? "selected" : null ?> value="<?= $row['id_jenis_wisata']; ?>"><?= $row['nama_jenis_wisata']; ?></option>
							      	<?php endforeach ?>
							      </select>
							    </div>
							</div>

							<div class="form-row">
						    	<div class="form-group col-md-6">
								  	<label for="jam_buka">Jam Buka</label>
								  	<input required type="time" class="form-control" name="jam_buka" value="<?= $wisata['jam_buka']; ?>">
								</div>
								<div class="form-group col-md-6">
								  	<label for="jam_tutup">Jam Tutup</label>
								  	<input required type="time" class="form-control" name="jam_tutup" value="<?= $wisata['jam_tutup']; ?>">
								</div>
							</div>

							<div class="form-row">
						    	<div class="form-group col-md-6">
								  	<label for="harga_tiket">Harga Tiket</label>
								  	<input required type="number" class="form-control" name="harga_tiket" value="<?= $wisata['harga_tiket']; ?>">
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-6">
								  <label for="no_telepon">No telepon</label>
								  <input required type="number" class="form-control" name="no_telepon" value="<?= $wisata['no_telepon']; ?>">
								</div>

								<div class="form-group col-md-6">
								  <label for="email">Email</label>
								  <input required type="email" class="form-control" name="email" value="<?= $wisata['email']; ?>">
								</div>
							</div>

							<div class="form-row col-md-6">
								 <div class="form-group">
								    <label for="alamat">Alamat</label>
								    <textarea class="form-control" id="alamat" rows="3" cols="100" name="alamat" ><?= $wisata['alamat']; ?></textarea>
								  </div>
							</div>
							
							<div class="form-group d-flex flex-column">
							  	<label>Upload Foto</label>
							  	<img src="<?= base_url(); ?>/uploads/wisata/<?= $wisata['foto']; ?>" class="my-3 img-thumbnail" width="200px" id="img-preview" alt="">
								<div class="custom-file mb-3">
								   	<input  onchange="previewImg()" type="file" class="custom-file-input" id="foto" name="foto" >
								   	<label class="custom-file-label" for="foto">Pilih Foto</label>
								</div>
							 </div>

				  			<div class="text-right">
						  		<button class="btn btn-info">Ubah Wisata</button>
						  	</div>
						</form>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?= $this->endSection() ?>


