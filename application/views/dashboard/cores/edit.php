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
            <form action="linhas_admin/editar/<?php echo ($query->id) ?>" method="POST">
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo ($query->nome_cor) ?>">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" value="<?php echo ($query->slug) ?>">
                        </div>
                    </div>
                    <div class="col-12 mt-3 mb-4">
                        <input type="hidden" id="id" name="id" value="<?= $query->id ?>">
                        <button type="submit" class="btn btn-success w-100">Editar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>