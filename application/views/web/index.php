<main>
    <div class="slideHome">
        <div class="uk-container-expand">
            <div uk-slideshow="animation: push;ratio: false;">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                    <ul class="uk-slideshow-items" uk-height-viewport="min-height: 800">
                        <?php foreach ($app_home as $banner) { ?>
                            <li>
                                <img class="uk-width-1-1" src="upload/banners/<?= $banner->imagem ?>" alt="<?= $banner->titulo_banner ?>">
                                <div class="uk-position-center-right uk-panel">
                                    <div class="captionSlideshow">
                                        <h2><?= $banner->titulo_banner ?></h2>
                                        <h3><?= $banner->legenda_banner ?></h3>
                                        <p><?= $banner->texto_suporte ?></p>
                                        <a href="<?= $banner->link_banner ?>" class="uk-button uk-button-default">Conheça</a>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                </div>
            </div>
        </div>
    </div>

    <section id="cardsIntro">
        <div class="uk-container">
            <div class="uk-child-width-1-1@s uk-child-width-1-3@m uk-text-center" uk-grid>
                <div>
                    <a href="<?php echo base_url("produtos") ?>">
                        <div class="uk-card uk-card-default uk-card-body">
                            <img src="<?php echo base_url("assets/site/images/produto-1.png") ?>" alt="Descartáveis">
                            <p class="uk-text-center">Descartáveis</p>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="<?php echo base_url("produtos") ?>">
                        <div class="uk-card uk-card-default uk-card-body">
                            <img src="<?php echo base_url("assets/site/images/produto-2.png") ?>" alt="Reutilizáveis">
                            <p class="uk-text-center">Reutilizáveis</p>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="<?php echo base_url("produtos") ?>">
                        <div class="uk-card uk-card-default uk-card-body">
                            <img src="<?php echo base_url("assets/site/images/produto-3.png") ?>" alt="Peças e Acessórios">
                            <p class="uk-text-center">Peças e Acessórios</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="produtosDestaque">
        <div class="uk-container">
            <div class="titleSection">
                <h4 class="uk-text-center">Produtos em destaque</h4>
                <p class="uk-text-center">Protetores faciais produzidos com alta tecnologia e desempenho para proporcionar conforto e segurança.</p>
            </div>

            <div class="productGrid uk-margin-large-top uk-margin-large-bottom">
                <div id="homeProducts" class="owl-carousel owl-theme">
                    <?php foreach ($app_product as $product) { ?>
                        <div class="item">
                            <a href="<?= base_url("produtos/" . $product->slug) ?>">
                                <div class="uk-card uk-card-default uk-card-body">
                                    <img src="upload/produtos/<?= $product->imagem_destaque ?>" alt="<?= $product->nome ?>">
                                </div>
                                <p class="titleProduct"><?= $product->nome ?></p>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <section id="newProduct">
        <div class="uk-container">
            <div class="uk-child-width-1-2@s uk-child-width-1-2@m" uk-grid>
                <div class="uk-flex uk-flex-middle">
                    <div>
                        <div class="content">
                            <h1>LINHA <span>T-9500</span> <br> NOSSO ÚLTIMO <br> LANÇAMENTO.</h1>
                            <p>Respirador semifacial reutilizável, conta com copa em silicone e 3 tamanhos disponíveis. Além disso, tem uma grande variedade de filtros mecânicos e cartuchos químicos sem abrir mão do melhor custo benefício.</p>
                            <a class="uk-button uk-button-default" href="<?php echo base_url("produtos/respirador-t9500") ?>">Clique e Conheça</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="figureBlock">
                            <figure class="uk-margin-remove">
                                <img src="<?php echo base_url("assets/site/images/produto-destaque.png") ?>" alt="Produto Destaque">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="abntBlock">
        <div class="uk-container">
            <div class="uk-child-width-1-2@s uk-child-width-1-2@m" uk-grid>
                <div class="uk-flex uk-flex-middle">
                    <div>
                        <div class="content">
                            <p class="uk-margin-remove">No Brasil, os respiradores isentos de manutenção ou respiradores do tipo peça semifacial filtrante para partículas devem ser produzidos <strong>seguindo as diretrizes da norma ABNT NBR 13.698:2011.</strong></p>
                            <p>Assim, são classificados da seguinte forma:</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="classeProduto">
        <div class="uk-container-expand">
            <div class="uk-child-width-1-1@s uk-child-width-1-3@m uk-grid-collapse" uk-grid>
                <div>
                    <div class="bgProduct">
                        <div class="content">
                            <h3>Classe PPF1</h3>
                            <p>Nível básico de proteção. <br> Indicado para poeiras e névoas em geral.</p>
                            <a href="<?php echo base_url("produtos") ?>" class="uk-button uk-button-default">Ver mais</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bgProduct">
                        <div class="content">
                            <h3>Classe PPF2</h3>
                            <p>Nível médio de proteção. <br> Indicado para poeiras, névoas e fumos metálicos.</p>
                            <a href="<?php echo base_url("produtos") ?>" class="uk-button uk-button-default">Ver mais</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bgProduct">
                        <div class="content">
                            <h3>Classe PPF3</h3>
                            <p>Nível alto de proteção. <br> Indicado para poeiras, névoas, radionuclídeos.</p>
                            <a href="<?php echo base_url("produtos") ?>" class="uk-button uk-button-default">Ver mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="solutions">
        <div class="uk-containerexpand">
            <div class="uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
                <div class="uk-flex uk-flex-middle">
                    <div>
                        <div class="content">
                            <h2>Soluções que proporcionam máxima segurança, proteção e conforto.</h2>
                            <hr>
                            <p>Os respiradores Tayco são produzidos com a mais alta tecnologia do mercado e certificações nacionais em países da América Latina e Europa. São mercados extremamente exigentes que aprovam nossa qualidade, segurança, eficiência, produtos mais leves e ótimo custo x benefício.</p>
                            <a href="<?php echo base_url("sobre-nos") ?>" class="uk-button uk-button-default">VEJA QUEM SOMOS</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="imgBlock">
                            <img src="<?php echo base_url('assets/site/images/banner-middle.webp') ?>" alt="BannerMiddle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="stamps">
        <div class="uk-container">
            <div class="uk-child-width-1-1@s uk-child-width-1-3@m" uk-grid>
                <div>
                    <div class="flexbox">
                        <img src="<?php echo base_url("assets/site/images/stamp.png") ?>" alt="Stamp">
                        <span>excelência em produtos com proteção, segurança e conforto. </span>
                    </div>
                </div>
                <div>
                    <div class="flexbox">
                        <img src="<?php echo base_url("assets/site/images/blocks.png") ?>" alt="Blocks">
                        <span>área Médico-Hospitalar, Industrial, Mineração, Química, Agricultura e Construção civil</span>
                    </div>
                </div>
                <div>
                    <div class="flexbox">
                        <img src="<?php echo base_url("assets/site/images/iso.png") ?>" alt="ISO">
                        <span>certificado ISO 9001:2015, Produtos certificados pelo INMETRO avaliados anualmente</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>