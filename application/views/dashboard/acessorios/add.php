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
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="nomeAcessorio" class="form-label">Nome do Acessório</label>
                            <input type="text" class="form-control" id="nomeAcessorio" name="nomeAcessorio">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="slugAcessorio" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slugAcessorio" name="slugAcessorio">
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
                            <label for="editor1" class="form-label">Aplicação do Acessório</label>
                            <textarea id="editor1" class="form-control" name="appProduto" placeholder="Add Body"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="imgAcessorio" class="form-label">Imagem Destaque</label>
                            <br />
                            <input type="file" name="imagemAcessorio" class="form-control-file" id="imgAcessorio">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success mt-3 mb-3 w-100">Adicionar novo acessório</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</main>