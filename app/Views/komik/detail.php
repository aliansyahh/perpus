<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>

        <div class="section-body">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= base_url('/assets/img/') ?>/<?= $komik['sampul']; ?>" width="200">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul']; ?></h5>
                            <p class="card-text"><?= $komik['penulis']; ?></p>
                            <p class="card-text"><small class="text-muted"><?= $komik['penerbit']; ?></small></p>
                            <a href="" class="btn btn-danger">Hapus</a>
                            <a href="" class="btn btn-warning">Ubah</a>
                            <br><br>
                            <a href="<?= base_url('komik'); ?>" class="card-link">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>