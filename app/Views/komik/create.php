<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Advanced Forms</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">Advanced Forms</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-14 col-lg-14">
                    <div class="card">
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('komik/save'); ?>" method="post">
                                <?= csrf_field(); ?>
                                <div class="row mb-3">
                                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="judul" autofocus id="judul">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="penulis" id="penulis">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="penerbit" id="penerbit">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="sampul" id="sampul">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>