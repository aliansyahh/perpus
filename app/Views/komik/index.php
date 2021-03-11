<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Main Content -->
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
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif; ?>


            <div class="row">
                <div class="col-12 col-md-14 col-lg-14">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?= base_url('/komik/create'); ?>" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1; ?>
                                    <?php foreach ($komik as $k) : ?>
                                    <tr>
                                        <th scope="row"><?= $no++; ?></th>
                                        <td><img class="my-2" src="<?= base_url('assets/img'); ?>/<?= $k['sampul']; ?>"
                                                width="70" alt=""></td>
                                        <td><?= $k['judul']; ?></td>
                                        <td><a href="<?= base_url('/komik'); ?>/<?= $k['slug']; ?>"
                                                class="btn btn-success">Detail</a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>