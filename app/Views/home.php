<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
    <title>Pariwisata - Dashboard</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
                    
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <a href="<?= site_url('wisata') ?>" class="col-xl-3 col-md-6 mb-4 text-decoration-none">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Wisata</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_wisata; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <!-- Earnings (Monthly) Card Example -->
        <a href="<?= site_url('kabupaten') ?>" class="col-xl-3 col-md-6 mb-4 text-decoration-none">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kabupaten</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_kabupaten; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <!-- Earnings (Monthly) Card Example -->
        <a href="<?= site_url('JenisWisata') ?>" class="col-xl-3 col-md-6 mb-4 text-decoration-none">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jenis Wisata</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_jenis_wisata; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>


        <!-- Earnings (Monthly) Card Example -->
        <a href="<?= site_url('user') ?>" class="col-xl-3 col-md-6 mb-4 text-decoration-none">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">User</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_user; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

<?= $this->endSection() ?>