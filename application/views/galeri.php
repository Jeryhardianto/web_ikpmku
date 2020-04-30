<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_text_inner">
            <h4>Galeri</h4>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Static Area =================-->
<section class="static_area">
    <div class="container">
        <div class="static_inner">
            <?php if (empty($galeri->result())) : ?>
            <h1 style=" text-align: center;">Tidak ada gambar</h1>
            <?php endif; ?>
            <div class="row">
                <div class="l_news_inner">
                    <div class="row">
                        <?php foreach ($galeri->result() as $g) : ?>
                        <figure class="col-md-4">
                            <a href="<?= base_url('upload/galeri/' . $g->image); ?>" data-size="1000x950">
                                <img alt="picture" src="<?= base_url('upload/galeri/' . $g->image); ?>"
                                    class="img-fluid">
                                <small> <strong><?= $g->kegiatan; ?></strong></small>
                            </a>
                        </figure>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Static Area =================-->