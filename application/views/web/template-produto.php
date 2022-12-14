<section id="productPresent">
  <div class="uk-container uk-container-xlarge">
    <div class="uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
      <div class="uk-flex uk-flex-middle">
        <div>
          <div class="productName uk-card uk-card-default uk-card-body">
            <?php foreach ($query as $q) { ?>
              <h1 class="tituloProduto uk-margin-remove">Respirador Semifacial<br><span><?php echo $q->nome; ?></span></h1>
            <?php } ?>
          </div>
        </div>
      </div>
      <div>
        <div>
          <div class="productSlider">
            <div id="bigImage" class="owl-carousel owl-theme">
              <?php foreach ($projectGallery as $g) { ?>
                <div class="item">
                  <img class="uk-width-1-1" src="<?php echo base_url("upload/galeria/") ?><?php echo $g->fotos; ?>" alt="<?php echo $g->fotos; ?>">
                </div>
              <?php } ?>
            </div>
            <div id="thumbImage" class="owl-carousel owl-theme">
              <?php foreach ($projectGallery as $g) { ?>
                <div class="item">
                  <img style="width:80px;" src="<?php echo base_url("upload/galeria/") ?><?php echo $g->fotos; ?>" alt="<?php echo $g->fotos; ?>">
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <div class="uk-flex uk-flex-middle">
        <div class="uk-card uk-card-default uk-card-body">
          <?php foreach ($query as $q) { ?>
            <p class="linhaProduto"><b>Linhas</b> <span><?php echo $linhas ?></span></p>
            <p class="catProduto"><b>Categoria</b> <span><?php echo $q->categoria; ?></span></p>
            <p class="color"><b>CORES</b> <span><?php echo $cores ?></span></p>
            <p class="classeProduto"><b>CLASSE</b> <span><?php echo $mecanicas ?></span></p>
            <p class="descProduto"><?php echo $q->descricao_curta; ?></p>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="description">
  <div class="uk-container uk-container-xlarge">
    <div uk-grid>
      <div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body blockDesc">
          <h6>Descri????o</h6>
          <hr />
          <?php foreach ($query as $q) { ?>
            <p class="descProduto"><?php echo $q->descricao; ?></p>
          <?php } ?>
        </div>
      </div>
      <div class="uk-width-1-3@m">
        <div class="uk-card uk-card-default uk-card-body blockDownloads">
          <h6>Materiais para Download</h6>
          <hr />
          <?php foreach ($query as $q) { ?>
            <a class="uk-button uk-button-default uk-width-1-1" href="<?php echo base_url(); ?>upload/produtos/pdf/<?= $q->ficha_tecnica ?>" target="_blank">Ficha T??cnica</a>
            <a class="uk-button uk-button-default uk-width-1-1" href="<?php echo base_url(); ?>upload/produtos/pdf/<?= $q->certificado_aprovacao ?>" target="_blank">Certificado de Aprova????o</a>
            <a class="uk-button uk-button-default uk-width-1-1" href="<?php echo base_url(); ?>upload/produtos/pdf/<?= $q->certificado_conformidade ?>" target="_blank">Certificado de Conformidade</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="moreContent">
  <div class="uk-container-expand">
    <?php
    if ($query[0]->id == '0') {

      echo "sem resultado";
    } else if ($query[0]->id == '11') {
      echo "
      <div class='uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-collapse' uk-grid>
        <div>
          <div class='uk-card uk-card-default uk-card-body bgFirst'>
            <p class='textCard'>Capa em silicone, garantindo conforto e excelente veda????o</p>
          </div>
        </div>
        <div>
          <div>
            <img src='../assets/site/images/img1.png' alt='Imagem 1'>
          </div>
        </div>
        <div>
          <div class='uk-card uk-card-default uk-card-body bgSecond'>
            <p class='textCard'>F??cil desmontagem e higieniza????o do respirador</p>
          </div>
        </div>
        <div>
          <div>
            <img src='../assets/site/images/img2.png' alt='Imagem 2'>
          </div>
        </div>
        <div>
          <div>
            <img src='../assets/site/images/img3.png' alt='Imagem 3'>
          </div>
        </div>
        <div>
          <div class='uk-card uk-card-default uk-card-body bgThird'>
            <p class='textCard'>Conex??o dos filtros e cartuchos do tipo baioneta</p>
          </div>
        </div>
        <div>
          <div>
            <img src='../assets/site/images/img4.png' alt='Imagem 4'>
          </div>
        </div>
        <div>
          <div class='uk-card uk-card-default uk-card-body bgFirst'>
            <p class='textCard'>cartucho posicionado fora do campo de vis??o do operador</p>
          </div>
        </div>
      </div>
      
      <section id='blockContentProduct'>
        <div class='uk-container'>
          <div class='uk-child-width-1-2@s uk-child-width-1-2@m' uk-grid>
            <div class='uk-flex uk-flex-middle'>
              <div>
                <p class='titleBlock'>Utiliza????o do respirador</p>
                <hr />
                <p class='textBlock'>Prote????o respirat??ria de certos contaminantes do ar como part??culas (aerodispers??ides), gases e vapores. Para sua adequada utiliza????o, devem ser observadas as recomenda????es da FUNDACENTRO contidas na publica????o intitulada ???Programa de Prote????o Respirat??ria ??? recomenda????es, sele????o e uso de respiradores??? ??? 4?? Ed. 2016, al??m do disposto nas Normas Regulamentadoras de Seguran??a e Sa??de no Trabalho e nas Instru????es de Uso deste produto. Os filtros para part??culas, qu??micos ou combinados que comp??em o sistema completo do Equipamento de Prote????o Respirat??ria s??o aqueles indicados neste documento e autorizados no Certificado de Aprova????o emitido pelo Minist??rio do Trabalho deste produto e devem ser adequadamente selecionados de acordo com o contaminante ao qual o usu??rio estar?? exposto para que o sistema ofere??a a prote????o pretendida.</p>
              </div>
            </div>
            <div>
              <div>
                <img src='../assets/site/images/produto-destaque.png'  alt='Respirador' />
              </div>
            </div>
          </div>
        </div>
      </section>
      ";
    }
    ?>
  </div>
</section>

<?php if (count($acessories) > 0) { ?>
  <section id="acessories">
    <div class="uk-container uk-container-xlarge">
      <div class="titleBlock">
        <h6>Acess??rios</h6>
        <hr />
      </div>

      <div id="homeProducts" class="owl-carousel owl-theme">
        <?php foreach ($acessories as $a) { ?>
          <div class="item">
            <a href="<?= base_url("acessorios/" . $a->slug) ?>">
              <a href="<?= base_url("acessorios/" . $a->slug) ?>">
                <div class="uk-card uk-card-default uk-card-body">
                  <img src="<?php echo base_url("upload/produtos/") ?><?php echo $a->imagem; ?>" alt="<?= $a->nome_acessorio ?>">
                </div>
                <p class="titleAcessorio"><?= $a->nome_acessorio ?></p>
              </a>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
<?php } ?>

<section id="contentContacts">
  <div class="uk-container">
    <h3>Fale Conosco</h3>
    <div class="uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
      <div>
        <div class="addressBlock">
          <h6>Endere??o</h6>
          <p>MARGINAL EMICOL, 21.500 COND. WESTPARK RUA 4, 21A T??RREO-PARTE ??? JARDIM EMICOL CEP: 13.312-820 ITU/SP</p>
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