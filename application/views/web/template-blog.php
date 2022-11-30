<section id="postHeader">
    <div class="uk-container">
        <div class="titleHeader">
            <?php foreach ($query as $content) { ?>
                <h1 class="uk-margin-remove"><?php echo $content->title ?></h1>
            <?php } ?>
        </div>
    </div>
</section>

<section id="blogSingle">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-1-1@m">
                <div class="contentSingle">
                    <?php foreach ($query as $content) { ?>
                        <img src="<?php echo base_url("upload/blog/") ?><?php echo $content->imagem_destaque; ?>" alt="<?php echo $content->imagem_destaque; ?>">
                        <small>Categoria: <?php echo $content->category ?></small>
                        <p><?php echo $content->content_post ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>