<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('asrama/ubah') ?>

            <div class="form-group row">
                <label for=asrama class="col-sm-2 col-form-label">Asrama</label>
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="id" value="<?= $asrama['id']; ?>">
                    <input type="text" class="form-control" id="asrama" name="asrama" value="<?= $asrama['asrama'] ?>">
                    <?= form_error('asrama', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $asrama['alamat'] ?>">
                    <?= form_error('alamat', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="ketua" class="col-sm-2 col-form-label">Ketua Asrama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ketua" name="ketua" value="<?= $asrama['ketua'] ?>">
                    <?= form_error('ketua', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="no_hp" class="col-sm-2 col-form-label">No Handphone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $asrama['no_hp'] ?>">
                    <?= form_error('no_hp', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="daya_tampung" class="col-sm-2 col-form-label">Daya Tampung</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="daya_tampung" name="daya_tampung"
                        value="<?= $asrama['daya_tampung'] ?>">
                    <?= form_error('daya_tampung', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="j_kamar_kosong" class="col-sm-2 col-form-label">Jumlah Kamar Kosong</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="j_kamar_kosong" name="j_kamar_kosong"
                        value="<?= $asrama['j_kamar_kosong'] ?>">
                    <?= form_error('j_kamar_kosong', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="map" class="col-sm-2 col-form-label">Link Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="map" name="map" value="<?= $asrama['map'] ?>">
                    <?= form_error('map', '<small class="text-danger p-3">', '</small>'); ?>
                    <small>Copy link alamat asrama dari google map</small>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Foto</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('upload/asrama/' . $asrama['image']) ?>" class="img-thumbnail">
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