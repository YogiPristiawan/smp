<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Halaman Admin</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?= base_url('admin'); ?>">Halaman Admin</a></li>
                    <li><a href="<?= base_url('jabatan'); ?>">Tabel Jabatan</a></li>
                    <li class="active">Tambah Data Jabatan</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Tambah Data Jabatan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nm_jab">Nama Jabatan</label>
                            <input type="text" class="form-control" name="nm_jab" id="nm_jab">
                            <small class="form-text text-danger">
                                <?= form_error('nm_jab'); ?>
                            </small>
                        </div>

                        <button class="btn btn-warning btn-sm">
                            <i class="fa fa-chevron-left"></i>
                            <a href="<?= base_url(); ?>jabatan">
                                Kembali
                            </a>
                        </button>
                        <button type="submit" name="tambah" class="btn btn-primary btn-sm">
                            <i class="fa fa-save"></i> Tambah
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-times"></i> Batal
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>