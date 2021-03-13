<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?= base_url('/assets/img'); ?>/<?= $komik['sampul']; ?>" width="100"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $komik['judul']; ?></h5>
                                    <p class="card-text"><?= $komik['penulis']; ?></p>
                                    <p class="card-text"><small class="text-muted"><?= $komik['penulis']; ?></small></p>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                    <a href="" class="btn btn-warning">Edit</a>
                                    <br><br>
                                    <a href="<?= base_url('/komik'); ?>" class="card-link">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<?= $this->endSection(); ?>