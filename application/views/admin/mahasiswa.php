<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('pesan'); ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="<?= base_url(); ?>mahasiswa/tambah/" class="btn btn-primary mb-3">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kabupaten/Kota</th>
                            <th>Jumlah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4"> <?php if (empty($mahasiswa->result())) : ?>
                                <div style="text-align: center; background:#E9967A; color:white; font-size:20px;">
                                    Data Kosong !
                                </div>
                            </td>
                            <?php endif; ?>
                        </tr>
                        <?php $id = 1; ?>
                        <?php foreach ($mahasiswa->result() as $m) { ?>
                        <tr>
                            <th scope="row"><?= $id; ?></th>
                            <td><?= $m->kabupaten; ?></td>
                            <td><?= $m->jumlah; ?></td>

                            <td>

                                <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $m->id; ?>" class="fas fa-edit"></a>
                                ||
                                <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $m->id; ?>" class="far fa-trash-alt"
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