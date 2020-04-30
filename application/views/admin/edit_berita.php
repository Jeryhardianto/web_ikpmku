<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('berita/ubah') ?>

            <div class="form-group row">
                <label for=judul class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="id" value="<?= $berita['id']; ?>">
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $berita['judul'] ?>">
                    <?= form_error('judul', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="isi" name="isi"><?= $berita['isi'] ?></textarea>

                    <?= form_error('isi', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="penulis" name="penulis"
                        value="<?= $berita['penulis'] ?>">
                    <?= form_error('penulis', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggal" name="tanggal"
                        value="<?= $berita['tanggal'] ?>">
                    <?= form_error('tanggal', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Foto</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('upload/berita/' . $berita['image']) ?>" class="img-thumbnail">
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

            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->