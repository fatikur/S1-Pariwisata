<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
    <title>Pariwisata - Ubah User</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
                    
    <div class="container-fluid">

    	<!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Ubah User</h1>

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
                        <h6 class="m-0 font-weight-bold text-primary">Ubah User</h6>
                    </div>
                    <div class="card-body shadow">
                        <form method="post" action="<?= site_url('user/update') ?>/<?= $user['id_user']; ?>">
						  <div class="form-group">
							    <label for="username">Username</label>
							    <input type="text" class="form-control" name="username" id="username" value="<?= $user['username']; ?>">
							  </div>
						  	<div class="form-group">
							    <label for="password">Password</label>
							    <input type="text" class="form-control" name="password" id="password" value="<?= $user['password']; ?>">
							  </div>
						  	<div class="form-group">
							      <label for="level">Level</label>
							      <select id="level" class="form-control" name="level">
							        <option value="admin" <?= $user['level'] == 'admin' ? 'selected' : null ?>>admin</option>
							        <option value="member" <?= $user['level'] == 'member' ? 'selected' : null ?>>member</option>
							      </select>
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


