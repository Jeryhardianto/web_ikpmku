<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('ProgramKerja/ubah') ?>
            <div class="form-group row">
                <label for=jabatan class="col-sm-2 col-form-label">Program Kerja</label>
                <input type="hidden" name="id" id="id" value="<?= $programkerja['id'] ?>">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="program_kerja" name="program_kerja"
                        value="<?= $programkerja['program_kerja']; ?>">
                    <?= form_error('program_kerja', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="tujuan" class="col-sm-2 col-form-label">Tujuan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tujuan" name="tujuan"
                        value="<?= $programkerja['tujuan']; ?>">
                    <?= form_error('tujuan', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="sasaran" class="col-sm-2 col-form-label">Sasaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="sasaran" name="sasaran"
                        value="<?= $programkerja['sasaran']; ?>">
                    <?= form_error('sasaran', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="mitra" class="col-sm-2 col-form-label">Mitra</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mitra" name="mitra"
                        value="<?= $programkerja['mitra']; ?>">
                    <?= form_error('mitra', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="pj" class="col-sm-2 col-form-label">Penanggungjawab</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="pj" name="pj" value="<?= $programkerja['pj']; ?>">
                    <?= form_error('pj', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_pelaksanaan" class="col-sm-2 col-form-label">Tanggal Pelaksanaan</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggal_pelaksanaan" name="tanggal_pelaksanaan"
                        value="<?= $programkerja['tanggal_pelaksanaan']; ?>">
                    <?= form_error('tanggal_pelaksanaan', '<small class="text-danger p-3">', '</small>'); ?>
                </div>
            </div>


            <div class="form-group row">
                <label for="class" class="col-sm-2 col-form-label">Class</label>
                <div class="col-sm-10">
                    <select class="form-control" id="class" name="class" value="">
                        <?php foreach ($class as $c) { ?>
                        <?php if ($s == $programkerja['class']) : ?>
                        <option value="<?= $c; ?>" selected><?= $c; ?>
                        </option>
                        <?php else : ?>
                        <option value="<?= $c; ?>"><?= $c; ?></option>
                        <?php endif; ?>
                        <?php } ?>
                    </select>
                    <small>*Label disini merupakan warna dari status : <br>
                        &nbsp; &nbsp;Terlaksanakan = <strong class="badge badge-success">badge-success (Hijau)
                        </strong><br>
                        &nbsp; &nbsp;Belum Terlaksanakan = <strong class="badge badge-danger">badge-danger (Merah)
                        </strong>
                    </small>
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select class="form-control" id="status" name="status" value="">
                        <?php foreach ($status as $s) { ?>
                        <?php if ($s == $programkerja['status']) : ?>
                        <option value="<?= $s; ?>" selected><?= $s; ?>
                        </option>
                        <?php else : ?>
                        <option value="<?= $s; ?>"><?= $s; ?></option>
                        <?php endif; ?>
                        <?php } ?>
                    </select>
                </div>
            </div>


            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>


            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->