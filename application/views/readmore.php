<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_text_inner">
            <h4>Berita</h4>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Static Area =================-->
<section class="static_area">
    <div class="container">
        <div class="static_inner">
            <div class="row">
                <div class="card-deck">
                    <?php foreach ($berita->result() as $br) { ?>
                    <div class="card mb-3">

                        <img src="<?= base_url('upload/berita/' . $br->image) ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $br->judul; ?></h5>
                            <p class="card-text" style="text-align: justify;"><?= $br->isi; ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"><i class="fas fa-user"></i>
                                &nbsp;<strong><?= $br->penulis; ?></strong>
                            </small>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="col-lg-3">
                        <div class="right_sidebar_area">
                            <aside class="right_widget r_news_widget">
                                <div class="r_w_title">
                                    <h3>Berita Terbaru</h3>
                                </div>
                                <?php foreach ($berita1->result() as $br) : ?>
                                <div class="news_inner">

                                    <div class="news_item">
                                        <a href="<?= base_url('index.php/berita/readmore/' . $br->id); ?>">
                                            <h4><?= $br->judul ?></h4>
                                        </a>
                                        <a>
                                            <h6><?= $br->tanggal ?></h6>
                                        </a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--================End Static Area =================-->