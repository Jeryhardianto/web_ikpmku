<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= $this->session->flashdata('pesan'); ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="<?= base_url(); ?>berita/tambah/" class="btn btn-primary mb-3">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Penulis</th>
                            <th>Image</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 1; ?>
                        <?php foreach ($berita->result() as $b) { ?>
                        <tr>
                            <th scope="row"><?= $id; ?></th>
                            <td><?= $b->judul; ?></td>
                            <td><?= $b->isi; ?></td>
                            <td><?= $b->penulis; ?></td>
                            <td>
                                <img src="<?= base_url('upload/berita/' . $b->image) ?>" style="width:50px">
                            </td>
                            <td><?= $b->tanggal; ?></td>

                            <td>
                                <a href="<?= base_url(); ?>berita/ubah/<?= $b->id; ?>" class="fas fa-edit"></a>||
                                <a href="<?= base_url(); ?>berita/hapus/<?= $b->id; ?>" class="far fa-trash-alt"
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