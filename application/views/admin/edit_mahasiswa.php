<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('mahasiswa/ubah') ?>

            <div class="form-group row">
                <label for=jabatan class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="id" value="<?= $mahasiswa['id']; ?>">
                    <input type="text" class="form-control" id="kabupaten" name="kabupaten"
                        value="<?= $mahasiswa['kabupaten'] ?>">
                    <?= form_error('kabupaten', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="jumlah" name="jumlah"
                        value="<?= $mahasiswa['jumlah'] ?>">
                    <?= form_error('jumlah', '<small class="text-danger p-3">', '</small>'); ?>
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