<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('pesan'); ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="<?= base_url(); ?>galeri/tambah/" class="btn btn-primary mb-3">Tambah Data</a>
            <td class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Kegiatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4"> <?php if (empty($galeri->result())) : ?>
                                <div style="text-align: center; background:#E9967A; color:white; font-size:20px;">
                                    Data Kosong !
                                </div>
                            </td>
                            <?php endif; ?>
                        </tr>
                        <?php $id = 1; ?>
                        <?php foreach ($galeri->result() as $g) { ?>
                        <tr>


                            <th scope="row"><?= $id; ?></th>
                            <td>
                                <img src="<?= base_url('upload/galeri/' . $g->image) ?>" style="width:50px">
                            </td>
                            <td><?= $g->kegiatan; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>galeri/ubah/<?= $g->id; ?>" class="fas fa-edit"></a>||
                                <a href="<?= base_url(); ?>galeri/delete/<?= $g->id; ?>" class="far fa-trash-alt"
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