<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('pesan'); ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="<?= base_url(); ?>struktur/tambah/" class="btn btn-primary mb-3">Tambah Data</a>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5"> <?php if (empty($struktur)) : ?>
                                <div style="text-align: center; background:#E9967A; color:white; font-size:20px;">
                                    Data Kosong !
                                </div>
                            </td>
                            <?php endif; ?>
                        </tr>
                        <!-- <?php $id = 1; ?> -->
                        <?php foreach ($struktur as $s) { ?>
                        <tr>
                            <th scope="row"> <?= ++$start; ?></th>
                            <td><?= $s['nama']; ?></td>
                            <td><?= $s['jabatan']; ?></td>
                            <td>
                                <img src="<?= base_url('upload/struktur/' . $s['image']) ?>" style="width:50px">
                            </td>
                            <td>

                                <a href="<?= base_url(); ?>struktur/ubah/<?= $s['id']; ?>" class="fas fa-edit"></a>
                                ||
                                <a href="<?= base_url(); ?>struktur/delete/<?= $s['id']; ?>" class="far fa-trash-alt"
                                    onclick="return confirm('Apakah anda yakin menghapus data ini ?');"></a>
                            </td>
                        </tr>

                        <?php } ?>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary float-right">
                    Jumlah <span class="badge badge-light"><?= $jumlah; ?></span>
                </button>
                <?= $this->pagination->create_links();  ?>
            </div>

        </div>
    </div>

</div>