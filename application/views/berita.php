<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_text_inner">
            <h4>Berita</h4>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Latest News Area =================-->
<section class="latest_news_area p_100">
    <div class="container">
        <div class="l_news_inner">
            <div class="row">
                <?php foreach ($berita->result() as $b) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="l_news_item">
                        <div class="l_news_img"><a href="<?= base_url('upload/berita/' . $b->image) ?>"><img
                                    class="img-fluid" src="<?= base_url('upload/berita/' . $b->image) ?>"></div>
                        <div class="l_news_content">
                            <a href="<?= base_url('index.php/berita/readmore/' . $b->id); ?>">
                                <h4><?= $b->judul; ?></h4>
                            </a>
                            <p style="text-align: justify;">
                                <?php
                                    $artikel = $b->isi;
                                    $potong = substr($artikel, 0, 99);
                                    echo $potong;
                                    ?>
                            </p>
                            <div class="card-footer">
                                <small class="text-muted"> <cite title="Source Title"><i class="fas fa-user"></i></cite>
                                    <strong> <?= $b->penulis; ?></strong>
                                    <cite title="Source Title"> </cite></small>
                            </div>
                            <br> <a class="btn btn-primary"
                                href="<?= base_url('index.php/berita/readmore/' . $b->id); ?>">Selengkapnya...</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
<!--================End Latest News Area =================-->