<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="fas fa-laptop-code"></i> <?php echo $titulo_pagina ?></h1>
  </div>

  <section id="error-area">
    <div class="row">
      <div class="col-12 col-sm-12">
        <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>') ?>
        <?= $this->session->userdata('msg'); ?>
      </div>
    </div>
  </section>

  <div class="row">
    <div class="col-12 col-sm-12">
      <form action="produtos_admin/editarproduto/<?php echo ($query->id) ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="col-3">
            <div class="mb-3">
              <label for="nomeProduto" class="form-label">Nome do produto</label>
              <input type="text" class="form-control" id="nomeProduto" name="nomeProduto" value="<?php echo $query->nome ?>">
            </div>
          </div>
          <div class="col-3">
            <div class="mb-3">
              <label for="catProduto" class="form-label">Categoria do Produto</label>
              <input type="text" class="form-control" id="catProduto" name="catProduto" value="<?php echo $query->categoria ?>">
            </div>
          </div>
          <div class="col-3">
            <div class="mb-3">
              <label for="slugProduto" class="form-label">Slug</label>
              <input type="text" class="form-control" id="slugProduto" name="slugProduto" value="<?php echo $query->slug ?>">
            </div>
          </div>
          <div class="col-3">
            <div class="mb-3">
              <label for="descCurta" class="form-label">Descrição Curta</label>
              <input type="text" class="form-control" id="descCurta" name="descCurta" value="<?php echo $query->descricao_curta ?>">
            </div>
          </div>
          <div class="col-3">
            <div class="mb-3">
              <label for="corProduto" class="form-label">Cores do Produto</label>
              <select class="form-control" name="cores[]" id="cor" multiple>
                <option value="" selected disabled> Selecione uma ou várias</option>
                <?php
                foreach ($cores as $cor) {
                  $qtd = $this->produto_tem_cor_model->verificar_pertence_produto($query->id, $cor->id);
                  if ($qtd > 0) {
                    echo "<option value=\"$cor->id\" selected>$cor->nome_cor</option>";
                  } else {
                    echo "<option value=\"$cor->id\">$cor->nome_cor</option>";
                  }
                }
                ?>
              </select>
            </div>
          </div>
          <div class="col-3">
            <div class="mb-3">
              <label for="corProduto" class="form-label">Tipos de Produto</label>
              <select class="form-control" name="tipos[]" id="tipo" multiple>
                <option value="" selected disabled> Selecione uma ou várias</option>
                <?php
                foreach ($tipos as $tipo) {
                  $qtd = $this->produto_tem_tipo_produto_model->verificar_pertence_produto($query->id, $tipo->id);
                  if ($qtd > 0) {
                    echo "<option value=\"$tipo->id\" selected>$tipo->nome_tipo</option>";
                  } else {
                    echo "<option value=\"$tipo->id\">$tipo->nome_tipo</option>";
                  }
                }
                ?>
              </select>
            </div>
          </div>
          <div class="col-3">
            <div class="mb-3">
              <label for="corProduto" class="form-label">Linhas do Produto</label>
              <select class="form-control" name="linhas[]" id="linha" multiple>
                <option value="" selected disabled> Selecione uma ou várias</option>
                <?php
                foreach ($linhas as $lin) {
                  $qtd = $this->produto_tem_linha_model->verificar_pertence_produto($query->id, $lin->id);
                  if ($qtd > 0) {
                    echo "<option value=\"$lin->id\" selected>$lin->nome_linha</option>";
                  } else {
                    echo "<option value=\"$lin->id\">$lin->nome_linha</option>";
                  }
                }
                ?>
              </select>
            </div>
          </div>
          <div class="col-3">
            <div class="mb-3">
              <label for="corProduto" class="form-label">Filtragens Químicas</label>
              <select class="form-control" name="quimicas[]" id="quimicas" multiple>
                <option value="" selected disabled> Selecione uma ou várias</option>
                <?php
                foreach ($quimicas as $qui) {
                  $qtd = $this->produto_tem_filtragem_quimica_model->verificar_pertence_produto($query->id, $qui->id);
                  if ($qtd > 0) {
                    echo "<option value=\"$qui->id\" selected>$qui->nome_filtragem</option>";
                  } else {
                    echo "<option value=\"$qui->id\">$qui->nome_filtragem</option>";
                  }
                }
                ?>
              </select>
            </div>
          </div>

          <div class="col-3">
            <div class="mb-3">
              <label for="corProduto" class="form-label">Filtragens Mecânicas</label>
              <select class="form-control" name="mecanicas[]" id="mecanicas" multiple>
                <option value="" selected disabled> Selecione uma ou várias</option>
                <?php
                foreach ($mecanicas as $mec) {
                  $qtd = $this->produto_tem_filtragem_mecanica_model->verificar_pertence_produto($query->id, $mec->id);
                  if ($qtd > 0) {
                    echo "<option value=\"$mec->id\" selected>$mec->nome_filtragem</option>";
                  } else {
                    echo "<option value=\"$mec->id\">$mec->nome_filtragem</option>";
                  }
                }
                ?>
              </select>
            </div>
          </div>
          <div class="col-3">
            <div class="mb-3">
              <label for="tamProduto" class="form-label">Tamanho do Produto</label>
              <input type="text" class="form-control" id="tamProduto" name="tamProduto" value="<?php echo $query->tamanho ?>">
            </div>
          </div>
          <div class="col-12">
            <div class="mb-4">
              <label for="editor1" class="form-label">Descrição do Produto</label>
              <textarea id="editor1" class="form-control" name="descProduto" placeholder="Add Body">
                <?php echo $query->descricao ?>
              </textarea>
            </div>
          </div>
          <div class="col-6">
            <div class="mb-3">
              <label for="certAprovacao" class="form-label">Certificado de Aprovação</label>
              <br />
              <input type="file" name="certAprovacao" class="form-control-file" id="certAprovacao" value="<?php echo $query->certificado_aprovacao ?>">
            </div>
          </div>
          <div class="col-6">
            <div class="mb-3">
              <label for="fichaTec" class="form-label">Ficha Técnica</label>
              <br />
              <input type="file" name="fichaTec" class="form-control-file" id="fichaTec" value="<?php echo $query->ficha_tecnica ?>">
            </div>
          </div>
          <div class="col-6">
            <div class="mb-3">
              <label for="certConformidade" class="form-label">Certificado de Conformidade</label>
              <br />
              <input type="file" name="certConformidade" class="form-control-file" id="certConformidade" value="<?php echo $query->certificado_conformidade ?>">
            </div>
          </div>
          <div class="col-6">
            <div class="mb-3">
              <label for="imgProduto" class="form-label">Imagem Destaque</label>
              <br />
              <input type="file" name="imagemProduto" class="form-control-file" id="imgProduto" value="<?php echo $query->imagem_destaque ?>">
            </div>
          </div>
          <div class="col-12">
            <input type="hidden" id="idProduto" name="idProduto" value="<?= $query->id ?>">
            <button type="submit" class="btn btn-success mt-3 mb-3 w-100">Editar Produto</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>