<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_text_inner">
            <h4>Asrama</h4>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Static Area =================-->
<section class="static_area">
    <div class="container">
        <div class="static_inner">
            <div class="row">
                <div class="card-deck" style="
    width: 1290px;">
                    <?php foreach ($asrama->result() as $a) { ?>
                    <div class=" card mb-3">

                        <img src="<?= base_url('upload/asrama/' . $a->image) ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $a->asrama; ?></h5>
                            <dl class="row">
                                <dd class="col-sm-3">Ketua Asrama </dd>
                                <dt class="col-sm-9"><mark><?= $a->ketua; ?></mark></dt>
                                <dd class="col-sm-3">Kontak Asrama </dd>
                                <dt class="col-sm-9"><mark><?= $a->no_hp; ?></mark></dt>
                                <dd class="col-sm-3">Jumlah Daya Tampung </dd>
                                <dt class="col-sm-9"><mark><?= $a->daya_tampung; ?>&nbsp;<i class="fas fa-users"></i>
                                </dt>
                                <dd class="col-sm-3">Jumlah Kamar Kosong </dd>
                                <dt class="col-sm-9"><mark><?= $a->j_kamar_kosong; ?>&nbsp;<i class="fas fa-home"></i>
                                </dt>

                                <dd class="col-sm-3">Alamat ( Google Maps ) </dd>
                                <dt class="col-sm-9"><mark><a href="<?= $a->map; ?>"
                                            class="text-decoration-none"><?= $a->alamat; ?></a></mark></dt>
                            </dl>

                        </div>
                        <div class="card-footer">
                            <blockquote class="blockquote text-right">
                                <footer class="blockquote-footer"><cite title="Source Title"><?= $a->asrama ?></cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Static Area =================-->