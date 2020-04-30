<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('galeri/ubah') ?>

            <div class="form-group row">
                <label for="kegiatan" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="id" value="<?= $galeri['id']; ?>">
                    <input type="text" class="form-control" id="kegiatan" name="kegiatan"
                        value="<?= $galeri['kegiatan'] ?>">
                    <?= form_error('kegiatan', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Foto</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('upload/galeri/' . $galeri['image']) ?>" class="img-thumbnail">
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