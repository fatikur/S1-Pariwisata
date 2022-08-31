<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
    <title>Pariwisata - Detail Wisata</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
                    
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Wisata</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4 col-6">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary text-center"><?= $wisata['nama_wisata']; ?></h3>
            </div>
            <div class="card-body ">
            	
                <div class="row">
                	<div class="col-12">
                		<!-- content -->

                		<div class="card mb-3">
						  	<img src="<?= base_url() ?>/uploads/wisata/<?= $wisata['foto']; ?>" class="card-img-top img-thumbnail" style="width: 100%;" alt="...">
						  	<div class="card-body">

						  		<table class="table table-bordered table-striped">
						  			<tbody>
						  				<tr>
						  					<td>Kabupaten</td>
						  					<td>:</td>
						  					<td>
						  						<?= $wisata['nama_kabupaten']; ?>
						  					</td>
						  				</tr>
						  				<tr>
						  					<td>Jenis Wisata</td>
						  					<td>:</td>
						  					<td>
						  						<?= $wisata['nama_jenis_wisata']; ?>
						  					</td>
						  				</tr>
						  				<tr>
						  					<td>Harga Tiket</td>
						  					<td>:</td>
						  					<td>
						  						<span class="badge p-3 badge-pill badge-primary">Rp. <?= number_format($wisata['harga_tiket']); ?></span>
						  					</td>
						  				</tr>
						  				<tr>
						  					<td>Jam Operasional</td>
						  					<td>:</td>
						  					<td>
						  						<span class="badge p-2 badge-info"><?= $wisata['jam_buka']; ?></span>
						  						 s/d
						  						<span class="badge p-2 badge-info"><?= $wisata['jam_tutup']; ?></span>
						  					</td>
						  				</tr>
						  				<tr>
						  					<td>No Telepon</td>
						  					<td>:</td>
						  					<td><?= $wisata['no_telepon']; ?></td>
						  				</tr>
						  				<tr>
						  					<td>Email</td>
						  					<td>:</td>
						  					<td><?= $wisata['email']; ?></td>
						  				</tr>
						  				<tr>
						  					<td>Alamat</td>
						  					<td>:</td>
						  					<td><?= $wisata['alamat']; ?></td>
						  				</tr>
						  			</tbody>
						  		</table>
							</div>

							<div class="card-footer text-right">
								<a href="<?= site_url() ?>wisata/edit/<?= $wisata['id_wisata']; ?>" class="btn btn-warning"> <i class="fas fa-edit mr-2"></i> Edit</a>
								<a href="<?= site_url() ?>wisata/remove/<?= $wisata['id_wisata']; ?>" class="btn btn-danger"> <i class="fas fa-trash mr-2"></i> Hapus</a>
							</div>

						</div>
        			</div>
        		</div>
            </div>
        </div>

    </div>

<?= $this->endSection() ?>


