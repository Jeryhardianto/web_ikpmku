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
        <div class="l_news_inner">
            <div class="row">
                <?php foreach ($asrama->result() as $a) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="l_news_item">
                        <div class="l_news_img"><a href="<?= base_url('upload/asrama/' . $a->image) ?>"><img
                                    class="img-fluid" src="<?= base_url('upload/asrama/' . $a->image) ?>"></div>
                        <div class="l_news_content">
                            <a href="<?= base_url('index.php/asrama/detail/' . $a->id); ?>">
                                <h4><?= $a->asrama; ?></h4>
                            </a>
                            <p><?= $a->alamat; ?> </p>
                            <br> <a class="btn btn-primary"
                                href="<?= base_url('index.php/asrama/detail/' . $a->id); ?>">Detail</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!--================End Static Area =================-->