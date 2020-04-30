<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('struktur/ubah') ?>

            <div class="form-group row">
                <label for=jabatan class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="id" value="<?= $struktur['id']; ?>">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $struktur['nama'] ?>">
                    <?= form_error('nama', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jabatan" name="jabatan"
                        value="<?= $struktur['jabatan'] ?>">
                    <?= form_error('jabatan', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Foto</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('upload/struktur/' . $struktur['image']) ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->