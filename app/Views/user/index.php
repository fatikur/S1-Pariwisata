<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
    <title>Pariwisata - User</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
                    
    <div class="container-fluid">

    	<!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">User</h1>

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
                        <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
                    </div>
                    <div class="card-body shadow">
                        <form method="post" action="<?= site_url('user/create') ?>">
						  	<div class="form-group">
							    <label for="username">Username</label>
							    <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username">
							  </div>
						  	<div class="form-group">
							    <label for="password">Password</label>
							    <input type="text" class="form-control" name="password" id="password" placeholder="Masukkan password">
							  </div>
						  	<div class="form-group">
							      <label for="level">Level</label>
							      <select id="level" class="form-control" name="level">
							        <option value="admin">admin</option>
							        <option value="member">member</option>
							      </select>
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
                        <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                    </div>
                    <div class="card-body shadow">
                        <table class="table table-bordered  table-striped">
						  <thead>
						    <tr>
						      <th scope="col" style="width: 3%">#</th>
						      <th scope="col">Username</th>
						      <th scope="col">Password</th>
						      <th scope="col">Level</th>
						      <th scope="col" style="width: 20%">Aksi</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php foreach ($user as $key => $row): ?>
						  		<tr>
							      <th scope="row"><?= ++$key; ?></th>
							      <td><?= $row['username']; ?></td>
							      <td><?= $row['password']; ?></td>
							      <td>
							      	<?php if ($row['level'] == 'admin'): ?>
							      		<span class="badge badge-pill badge-primary p-2"><?= $row['level']; ?></span>
							      	<?php else: ?>
							      		<span class="badge badge-pill badge-success p-2"><?= $row['level']; ?></span>
							      	<?php endif ?>
							      </td>
							      <td>
							      	<a href="<?= site_url() ?>user/edit/<?= $row['id_user']; ?>" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a>
							      	<a href="<?= site_url() ?>user/remove/<?= $row['id_user']; ?>" class="btn btn-outline-danger" onclick="return confirm('Apa Anda Yakin Ingin Menghapus Data ?')"><i class="fas fa-trash"></i></a>
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


