<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
    <title>Pariwisata - Kabupaten</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
                    
    <div class="container-fluid">

    	<!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Kabupaten</h1>

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

        

    	<div class="row mb-4">

            <div class="col-lg-10">
	    		<div class="accordion" id="accordionExample">
				  <div class="card">
				    <div class="card-header" id="headingOne">
				      <h2 class="mb-0">
				        <button class="btn btn-link btn-block text-left text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        	<h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-plus mr-3"></i>Tambah Data Kabupaten</h6>
				        </button>
				      </h2>
				    </div>

				    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				      	<div class="card-body shadow">
		                    <form method="post" action="<?= site_url('kabupaten/create') ?>"  enctype="multipart/form-data">
							  <div class="form-group">
							    <label for="nama_kabupaten">Kabupaten</label>
							    <input type="text" class="form-control" name="nama_kabupaten" id="nama_kabupaten" placeholder="Masukkan Nama Kabupaten">
							  </div>
							   
							  <div class="form-group d-flex flex-column">
							  	<label>Upload Foto</label>
							  	<img src="<?= base_url(); ?>/uploads/foto_kabupaten/default.jpg" class="my-3 img-thumbnail" width="200px"  id="img-preview" alt="">
								  <div class="custom-file mb-3">
								    <input onchange="previewImg()" type="file" class="custom-file-input" id="foto" name="foto_kabupaten" required>
								    <label class="custom-file-label" for="foto_kabupaten">Pilih Foto</label>
								  </div>
							  </div>

  				  			  <div class="text-right">
							  	<button class="btn btn-info">Tambah</button>
							  </div>
							</form>
		                </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>

		<div class="row">

            <!-- Fade In Utility -->
            <div class="col-lg-10">
                <div class="card position-relative">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Kabupaten</h6>
                    </div>
                    <div class="card-body shadow">
                        <table class="table table-bordered  table-striped">
						  <thead>
						    <tr>
						      <th scope="col" style="width: 3%">#</th>
						      <th scope="col" style="width: 20%">Kabupaten</th>
						      <th scope="col">Foto</th>
						      <th scope="col" style="width: 10%">Aksi</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php foreach ($kabupaten as $key => $row): ?>
						  		<tr>
							      <th scope="row"><?= ++$key; ?></th>
							      <td><?= $row['nama_kabupaten']; ?></td>
							      <td>
							      	<img class="img-thumbnail" src="<?= base_url() ?>/uploads/foto_kabupaten/<?= $row['foto']; ?>" width="200px" alt="">
							      </td>
							      <td>
							      	<a href="<?= site_url() ?>kabupaten/edit/<?= $row['id_kabupaten']; ?>" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
							      	<a href="<?= site_url() ?>kabupaten/remove/<?= $row['id_kabupaten']; ?>" class="btn btn-outline-danger" onclick="return confirm('Apa Anda Yakin Ingin Menghapus Data ?')"><i class="fas fa-trash"></i></a>
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



