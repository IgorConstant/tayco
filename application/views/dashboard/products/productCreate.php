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
        <div class="col-12 col-sm-12 mb-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Nome do produto</label>
                            <input type="text" class="form-control" id="nomeProduto" name="nomeProduto">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="catProduto" class="form-label">Categoria do Produto</label>
                            <input type="text" class="form-control" id="catProduto" name="catProduto">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="corProduto" class="form-label">Cores do Produto</label>
                            <select class="form-control" name="cores[]" id="cor" multiple>
                                <option value="" selected disabled> Selecione uma ou várias</option>
                                <?php
                                    foreach( $cores AS $cor ){
                                        echo "<option value=\"$cor->id\">$cor->nome_cor</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="tamProduto" class="form-label">Tamanho do Produto</label>
                            <input type="text" class="form-control" id="tamProduto" name="tamProduto">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="classeProduto" class="form-label">Classe do Produto</label>
                            <input type="text" class="form-control" id="classeProduto" name="classeProduto">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                        <label for="corProduto" class="form-label">Linhas do Produto</label>
                        <select class="form-control" name="linhas[]" id="linha" multiple>
                            <option value="" selected disabled> Selecione uma ou várias</option>
                            <?php
                                foreach( $linhas AS $lin ){
                                    echo "<option value=\"$lin->id\">$lin->nome_linha</option>";
                                }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="slugProduto" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slugProduto" name="slugProduto">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="descCurta" class="form-label">Descrição Curta</label>
                            <input type="text" class="form-control" id="descCurta" name="descCurta">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                        <label for="corProduto" class="form-label">Tipos de Produto</label>
                        <select class="form-control" name="tipos[]" id="tipo" multiple>
                            <option value="" selected disabled> Selecione uma ou várias</option>
                            <?php
                                foreach( $tipos AS $tipo ){
                                    echo "<option value=\"$tipo->id\">$tipo->nome_tipo</option>";
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
                                foreach( $quimicas AS $qui ){
                                    echo "<option value=\"$qui->id\">$qui->nome_filtragem</option>";
                                }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-4">
                            <label for="editor1" class="form-label">Descrição do Produto</label>
                            <textarea id="editor1" class="form-control" name="descProduto" placeholder="Add Body"></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="certAprovacao" class="form-label">Certificado de Aprovação</label>
                            <br />
                            <input type="file" name="certAprovacao" class="form-control-file" id="certAprovacao">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="fichaTec" class="form-label">Ficha Técnica</label>
                            <br />
                            <input type="file" name="fichaTec" class="form-control-file" id="fichaTec">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="certConformidade" class="form-label">Certificado de Conformidade</label>
                            <br />
                            <input type="file" name="certConformidade" class="form-control-file" id="certConformidade">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="imgProduto" class="form-label">Imagem Destaque</label>
                            <br />
                            <input type="file" name="imagemProduto" class="form-control-file" id="imgProduto">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success mt-3 mb-3 w-100">Adicionar novo Produto</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>