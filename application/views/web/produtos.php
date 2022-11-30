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
              foreach ($classe_data->result_array() as $row) {
              ?>
                <div class="list-group-item checkbox">
                  <label><input type="checkbox" class="common_selector classe" value="<?php echo $row['classe']; ?>"> <?php echo $row['classe']; ?></label>
                </div>
              <?php
              }
              ?>
              <h5>Linha de Produto</h5>
              <hr />
              <?php
              foreach ($linha_data->result_array() as $row) {
              ?>
                <div class="list-group-item checkbox">
                  <label><input type="checkbox" class="common_selector linha" value="<?php echo $row['linha']; ?>"> <?php echo $row['linha']; ?></label>
                </div>
              <?php
              }
              ?>
              <h5>Cor de Produtos</h5>
              <hr />
              <?php
              foreach ($cor_data->result_array() as $row) {
              ?>
                <div class="list-group-item checkbox">
                  <label><input type="checkbox" class="common_selector cor" value="<?php echo $row['cor']; ?>"> <?php echo $row['cor']; ?></label>
                </div>
              <?php
              }
              ?>
              <h5>Categoria de Produtos</h5>
              <hr />
              <?php
              foreach ($categoria_data->result_array() as $row) {
              ?>
                <div class="list-group-item checkbox">
                  <label><input type="checkbox" class="common_selector categoria" value="<?php echo $row['categoria']; ?>"> <?php echo $row['categoria']; ?></label>
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
            foreach ($classe_data->result_array() as $row) {
            ?>
              <div class="list-group-item checkbox">
                <label><input type="checkbox" class="common_selector classe" value="<?php echo $row['classe']; ?>"> <?php echo $row['classe']; ?></label>
              </div>
            <?php
            }
            ?>
            <h5>Linha de Produto</h5>
            <hr />
            <?php
            foreach ($linha_data->result_array() as $row) {
            ?>
              <div class="list-group-item checkbox">
                <label><input type="checkbox" class="common_selector linha" value="<?php echo $row['linha']; ?>"> <?php echo $row['linha']; ?></label>
              </div>
            <?php
            }
            ?>
            <h5>Cor de Produtos</h5>
            <hr />
            <?php
            foreach ($cor_data->result_array() as $row) {
            ?>
              <div class="list-group-item checkbox">
                <label><input type="checkbox" class="common_selector cor" value="<?php echo $row['cor']; ?>"> <?php echo $row['cor']; ?></label>
              </div>
            <?php
            }
            ?>
            <h5>Categoria de Produtos</h5>
            <hr />
            <?php
            foreach ($categoria_data->result_array() as $row) {
            ?>
              <div class="list-group-item checkbox">
                <label><input type="checkbox" class="common_selector categoria" value="<?php echo $row['categoria']; ?>"> <?php echo $row['categoria']; ?></label>
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