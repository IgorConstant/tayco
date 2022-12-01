<section id="headerContent">
  <div class="uk-container">
    <div class="titleHeader">
      <h1 class="uk-text-uppercase">Produtos</h1>
      <p>Confira nossas linhas de produtos <br> e conheça seus diferenciais.</p>
    </div>
  </div>
</section>

<section id="listProduct">
  <div class="uk-container uk-container-xlarge">
    <div class="filterMobile">
      <ul class="uk-hidden@m" uk-accordion="multiple: true">
        <li>
          <a class="uk-accordion-title" href="#">Filtro</a>
          <div class="uk-accordion-content">
            <div class="filterBlock">
              <h5>Classe de Produto</h5>
              <hr />
              <?php
              foreach ($mecanicas AS $mec) {
                ?>
                  <div class="list-group-item checkbox">
                    <label><input type="checkbox" class="common_selector classe" value="<?php echo $mec->id; ?>"> <?php echo $mec->nome_filtragem; ?></label>
                  </div>
                <?php
                }
              ?>
              <h5>Filtros Químicos</h5>
              <hr />
              <?php
              foreach ($quimicos AS $qui) {
                ?>
                  <div class="list-group-item checkbox">
                    <label><input type="checkbox" class="common_selector quimico" value="<?php echo $qui->id; ?>"> <?php echo $qui->nome_filtragem; ?></label>
                  </div>
                <?php
                }
              ?>
              <h5>Linha de Produto</h5>
              <hr />
              <?php
              foreach ($linhas AS $linha) {
                ?>
                  <div class="list-group-item checkbox">
                    <label><input type="checkbox" class="common_selector linha" value="<?php echo $linha->id; ?>"> <?php echo $linha->nome_linha; ?></label>
                  </div>
                <?php
                }
              ?>
              <h5>Cor de Produtos</h5>
              <hr />
              <?php
              foreach ($cores AS $cor) {
              ?>
                <div class="list-group-item checkbox">
                  <label><input type="checkbox" class="common_selector cor" value="<?php echo $cor->id; ?>"> <?php echo $cor->nome_cor; ?></label>
                </div>
              <?php
              }
              ?>
              <h5>Categoria de Produtos</h5>
              <hr />
              <?php
              foreach ($tipos AS $tipo) {
                ?>
                  <div class="list-group-item checkbox">
                    <label><input type="checkbox" class="common_selector categoria" value="<?php echo $tipo->id; ?>"> <?php echo $tipo->nome_tipo; ?></label>
                  </div>
                <?php
                }
              ?>
              <h5>Tamanho de Produtos</h5>
              <hr />
              <?php
              foreach ($tamanho_data->result_array() as $row) {
              ?>
                <div class="list-group-item checkbox">
                  <label><input type="checkbox" class="common_selector tamanho" value="<?php echo $row['tamanho']; ?>"> <?php echo $row['tamanho']; ?></label>
                </div>
              <?php
              }
              ?>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div uk-grid>
      <div class="uk-width-1-4@m uk-visible@m">
        <div>
          <div class="filterBlock">
            <h5>Classe de Produto</h5>
            <hr />
            <?php
            foreach ($mecanicas AS $mec) {
              ?>
                <div class="list-group-item checkbox">
                  <label><input type="checkbox" class="common_selector classe" value="<?php echo $mec->id; ?>"> <?php echo $mec->nome_filtragem; ?></label>
                </div>
              <?php
              }
            ?>
            <h5>Filtros Químicos</h5>
            <hr />
              <?php
              foreach ($quimicos AS $qui) {
                ?>
                  <div class="list-group-item checkbox">
                    <label><input type="checkbox" class="common_selector quimico" value="<?php echo $qui->id; ?>"> <?php echo $qui->nome_filtragem; ?></label>
                  </div>
                <?php
                }
              ?>
            <h5>Linha de Produto</h5>
            <hr />
            <?php
             foreach ($linhas AS $linha) {
              ?>
                <div class="list-group-item checkbox">
                  <label><input type="checkbox" class="common_selector linha" value="<?php echo $linha->id; ?>"> <?php echo $linha->nome_linha; ?></label>
                </div>
              <?php
              }
            ?>
            <h5>Cor de Produtos</h5>
            <hr />
            <?php
            foreach ($cores AS $cor) {
              ?>
                <div class="list-group-item checkbox">
                  <label><input type="checkbox" class="common_selector cor" value="<?php echo $cor->id; ?>"> <?php echo $cor->nome_cor; ?></label>
                </div>
              <?php
              }
            ?>
            <h5>Categoria de Produtos</h5>
            <hr />
            <?php
            foreach ($tipos AS $tipo) {
              ?>
                <div class="list-group-item checkbox">
                  <label><input type="checkbox" class="common_selector categoria" value="<?php echo $tipo->id; ?>"> <?php echo $tipo->nome_tipo; ?></label>
                </div>
              <?php
              }
            ?>
            <h5>Tamanho de Produtos</h5>
            <hr />
            <?php
            foreach ($tamanho_data->result_array() as $row) {
            ?>
              <div class="list-group-item checkbox">
                <label><input type="checkbox" class="common_selector tamanho" value="<?php echo $row['tamanho']; ?>"> <?php echo $row['tamanho']; ?></label>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
      <div class="uk-width-expand@m">
        <div>
          <div class="uk-child-width-1-2@s uk-child-width-1-4@m productContent filter_data" uk-grid>

          </div>
          <div align="center" id="pagination_link">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>