<section id="introAcessorios">
    <div class="uk-container">
        <div class="uk-child-width-1-2@s uk-child-width-1-2@m uk-text-center" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <?php foreach ($page as $p) { ?>
                        <img src="<?php echo base_url("upload/produtos/") ?><?php echo $p->imagem; ?>" alt="<?php echo $p->imagem; ?>">
                    <?php } ?>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body">

                </div>
            </div>
        </div>
    </div>
</section>