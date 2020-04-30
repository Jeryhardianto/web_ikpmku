<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('pesan'); ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="<?= base_url(); ?>asrama/tambah/" class="btn btn-primary mb-3">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Asrama</th>
                            <th>Alamat</th>
                            <th>Ketua Asrama</th>
                            <th>No Handpone</th>
                            <th>Daya Tampung</th>
                            <th>Jumlah Kamar Kosong</th>
                             <th>Link Google Map</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 1; ?>
                        <?php foreach ($asrama->result() as $a) { ?>
                        <tr>
                            <th scope="row"><?= $id; ?></th>
                            <td>
                                <img src="<?= base_url('upload/asrama/' . $a->image) ?>" style="width:50px">
                            </td>
                            <td><?= $a->asrama; ?></td>
                            <td><?= $a->alamat; ?></td>
                            <td><?= $a->ketua; ?></td>
                            <td><?= $a->no_hp; ?></td>
                            <td><?= $a->daya_tampung; ?></td>
                            <td><?= $a->j_kamar_kosong; ?></td>
                             <td><?= $a->map; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>asrama/ubah/<?= $a->id; ?>" class="fas fa-edit"></a>||
                                <a href="<?= base_url(); ?>asrama/delete/<?= $a->id; ?>" class="far fa-trash-alt"
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