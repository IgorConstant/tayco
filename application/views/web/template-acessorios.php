<section id="introAcessorios">
    <div class="uk-container">
        <div class="uk-child-width-1-2@s uk-child-width-1-2@m" uk-grid>
            <div class="uk-flex uk-flex-center uk-flex uk-flex-middle">
                <div>
                    <?php foreach ($query as $p) { ?>
                        <img src="<?php echo base_url("upload/produtos/") ?><?php echo $p->imagem; ?>" alt="<?php echo $p->imagem; ?>">
                    <?php } ?>
                </div>
            </div>
            <div>
                <div>
                    <div class="content">
                        <div class="titleBlock">
                            <h6>Descrição</h6>
                            <hr />
                        </div>
                        <?php foreach ($query as $p) { ?>
                            <p><?php echo $p->aplicacao ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contentContacts">
    <div class="uk-container">
        <h3>Fale Conosco</h3>
        <div class="uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
            <div>
                <div class="addressBlock">
                    <h6>Endereço</h6>
                    <p>MARGINAL EMICOL, 21.500 COND. WESTPARK RUA 4, 21A TÉRREO-PARTE – JARDIM EMICOL CEP: 13.312-820 ITU/SP</p>
                </div>
            </div>
            <div class="uk-flex uk-flex-center@l">
                <div class="phoneComercial">
                    <h6>Departamento Comercial</h6>
                    <p><a href="tel:+551140134128">+55 11 4013-4128</a></p>
                    <p><a href="mailto:vendas@tayco.com.br">VENDAS@TAYCO.COM.BR</a></p>
                </div>
            </div>
            <div>
                <div class="phoneComercial">
                    <h6>ATENDIMENTO | SAC</h6>
                    <p><a href="tel:+551140134279">+55 11 4013-4279</a></p>
                    <p><a href="mailto:atendimento@tayco.com.br">ATENDIMENTO@TAYCO.COM.BR</a></p>
                </div>
            </div>
        </div>
    </div>
</section>