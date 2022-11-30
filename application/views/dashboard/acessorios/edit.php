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
            <form action="acessorios_admin/editaracessorio/<?php echo ($query->id) ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="nomeAcessorio" class="form-label">Nome do Acessório</label>
                            <input type="text" class="form-control" id="nomeAcessorio" name="nomeAcessorio" value="<?php echo ($query->nome_acessorio) ?>">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="slugAcessorio" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slugAcessorio" name="slugAcessorio" value="<?php echo ($query->slug) ?>">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="nomeProduto" class="form-label">Vincule a um produto</label>
                            <select id="nomeProduto" name="nomeProduto" class="form-select">
                                <?php foreach ($app_nameproduct as $produtos) { ?>
                                    <option value="<?= $produtos->id ?>"><?= $produtos->nome ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-4">
                            <label for="editor1" class="form-label">Aplicação</label>
                            <textarea id="editor1" class="form-control" name="appProduto" placeholder="Add Body">
                                <?php echo $query->aplicacao ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Imagem de Destaque</label>
                            <br />
                            <img class="img-fluid foto-destaque" width="400" src="<?php echo base_url('upload/produtos/' . $query->imagem) ?>" alt="<?= $query->imagem ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <button type="button" class="btn btn-outline-warning mb-3 btn-trocar"><i class="fas fa-exchange-alt"></i> Trocar foto</button>
                            <button type="button" class="btn btn-outline-danger mb-3 btn-cancelar"><i class="fas fa-ban"></i> Cancelar</button>
                            <br>
                            <input type="file" name="imagemPost" class="form-control-file input-change-file hide" id="exampleFormControlFile1" required="" disabled="">
                        </div>
                    </div>
                    <div class="col-12 mt-3 mb-4">
                        <input type="hidden" id="idAcessorio" name="idAcessorio" value="<?= $query->id ?>">
                        <button type="submit" class="btn btn-success w-100">Editar Acessório</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>