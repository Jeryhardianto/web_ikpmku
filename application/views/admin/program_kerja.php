<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('pesan'); ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="<?= base_url(); ?>programkerja/tambah/" class="btn btn-primary mb-3">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Program Kerja</th>
                            <th>Tujuan</th>
                            <th>Sasaran</th>
                            <th>Mitra</th>
                            <th>Penangung Jawab</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="9"> <?php if (empty($programkerja->result())) : ?>
                                <div style="text-align: center; background:#E9967A; color:white; font-size:20px;">
                                    Data Kosong !
                                </div>
                            </td>
                            <?php endif; ?>
                        </tr>
                        <?php $id = 1; ?>
                        <?php foreach ($programkerja->result() as $pk) { ?>
                        <tr>
                            <th scope="row"><?= $id; ?></th>
                            <td><?= $pk->program_kerja; ?></td>
                            <td><?= $pk->tujuan; ?></td>
                            <td><?= $pk->sasaran; ?></td>
                            <td><?= $pk->mitra; ?></td>
                            <td><?= $pk->pj; ?></td>
                            <td><?= $pk->tanggal_pelaksanaan; ?></td>
                            <td><span class="<?= $pk->class; ?>"><?= $pk->status; ?></span></td>
                            <td>
                                <a href="<?= base_url(); ?>programkerja/ubah/<?= $pk->id; ?>" class="fas fa-edit"></a>
                                ||
                                <a href="<?= base_url(); ?>programkerja/hapus/<?= $pk->id; ?>" class="far fa-trash-alt"
                                    onclick="return confirm('Apakah anda yakin menghapus data ini ?');"></a>
                            </td>
                        </tr>
                        <?php $id++; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>