<section id="blogHeader">
    <div class="uk-container">
        <div class="titleHeader">
            <h1 class="uk-text-uppercase">Blog</h1>
            <p>As últimas notícias, você só encontra aqui no Blog da Tayco®, <br> empresa pioneira e absoluta, no Brasil e mundo.</p>
        </div>
    </div>
</section>

<section id="blogContent">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-expand@m">
                <div>
                    <?php foreach ($app_blog as $b) { ?>
                        <div class="uk-card uk-card-default">
                            <div class="uk-card-media-top">
                                <img src="<?php echo base_url("upload/blog/") ?><?php echo $b->imagem_destaque; ?>" alt="<?php echo $b->imagem_destaque; ?>">
                            </div>
                            <div class="uk-card-body">
                                <small><?php echo $b->category ?></small>
                                <h3><?php echo $b->title; ?></h3>
                                <p class="uk-margin-small excerpt"><?php echo word_limiter($b->content_post, 20) ?></p>
                                <p><a href="<?= base_url("blog/" . $b->slug) ?>">Leia Mais</a></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="uk-width-1-3@m">
                <div></div>
            </div>
        </div>
    </div>
</section>