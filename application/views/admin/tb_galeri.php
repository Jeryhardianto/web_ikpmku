<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('galeri/tambah') ?>
            <input type="hidden" class="form-control" id="id" name="id">
            <div class="form-group row">
                <label for="kegiatan" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kegiatan" name="kegiatan">
                    <?= form_error('kegiatan', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Gambar</div>
                <div class="col-sm-10">
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>


            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->