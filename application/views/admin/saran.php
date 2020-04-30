<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('pesan'); ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Saran & Kritik</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5"> <?php if (empty($saran_kritik->result())) : ?>
                                <div style="text-align: center; background:#E9967A; color:white; font-size:20px;">
                                    Data Kosong !
                                </div>
                            </td>
                            <?php endif; ?>
                        </tr>
                        <?php $id = 1; ?>
                        <?php foreach ($saran_kritik->result() as $sk) { ?>
                        <tr>
                            <th scope="row"><?= $id; ?></th>
                            <td><?= $sk->name; ?></td>
                            <td><?= $sk->email; ?></td>
                            <td><?= $sk->message; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>kontak/hapus/<?= $sk->id; ?>" class="badge badge-danger"
                                    onclick="return confirm('Apakah anda yakin menghapus data ini ?');">Hapus</a>
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