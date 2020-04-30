<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_text_inner">
            <h4>Profil</h4>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Static Area =================-->
<section class="static_area " style=" padding-left: 50px;
    padding-right: 30px;
    padding-top: 50px;
    padding-bottom: 50px;">
    <!-- <div class="container"> -->

    <div class="accordion " id="accordionExample">
        <div class="card z-depth-0 bordered">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        <strong>Profil IKPMKU</strong>
                    </button>
                </h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <?php foreach ($profil->result() as $p) : ?>
                <div class="card-body">
                    <p style="text-align:justify;"><?= $p->profil; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="card z-depth-0 bordered">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong> Visi &amp; Misi</strong>
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <dl>
                        <dt>Visi</dt>
                        <?php foreach ($visi_misi->result() as $vm) : ?>
                        <dd style="text-align:justify;"><?= $vm->visi; ?></dd>
                        <?php endforeach; ?>
                        <dt>Misi</dt>

                        <dd>
                            <ol>
                                <?php foreach ($visi_misi->result() as $vm) : ?>
                                <li style="text-align:justify;"><?= $vm->misi; ?></li>
                                <?php endforeach; ?>
                            </ol>
                        </dd>

                    </dl>
                </div>
            </div>
        </div>
        <div class="card z-depth-0 bordered">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <strong> Struktur Organisasi IKPMKU Tahun 2019/2020</strong>
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <div id="mapBox" class="mapBox row m0">
                        <a href="<?= base_url('assets'); ?>/img/galeri/organisasi.jpg" data-size="1500x1500">
                            <img alt="picture" src="<?= base_url('upload'); ?>/galeri/organisasi1.jpg"
                                class="img-fluid">
                        </a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="card z-depth-0 bordered">
            <div class="card-header" id="headingfour">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <strong> Program Kerja IKPMKU Tahun 2019/2020</strong>
                    </button>
                </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="table table-striped">
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
                                </tr>
                            </thead>
                            <tbody>
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
                                    <td><span class="badge badge-danger"><?= $pk->status; ?></span></td>
                                </tr>
                            </tbody>
                            <?php $id++; ?>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Static Area =================-->