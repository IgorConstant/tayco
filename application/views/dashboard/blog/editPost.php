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
            <form action="posts/editarpost/<?php echo ($query->id) ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="tituloPost" class="form-label">Título do Post</label>
                            <input type="text" class="form-control" id="tituloPost" name="tituloPost" value="<?php echo ($query->title) ?>">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="slugPost" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slugPost" name="slugPost" value="<?php echo ($query->slug) ?>">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="categoriaPost" class="form-label">Categoria</label>
                            <input type="text" class="form-control" id="categoriaPost" name="categoriaPost" value="<?php echo ($query->category) ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-4">
                            <label for="editor1" class="form-label">Conteúdo</label>
                            <textarea id="editor1" class="form-control" name="conteudoPost" placeholder="Add Body">
                                <?php echo $query->content_post ?>
                            </textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="" class="form-label">Destaque</label>
                            <br />
                            <img class="img-fluid foto-destaque" width="400" src="<?php echo base_url('upload/blog/' . $query->imagem_destaque) ?>" alt="<?= $query->imagem_destaque ?>">
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
                        <input type="hidden" id="idPost" name="idPost" value="<?= $query->id ?>">
                        <button type="submit" class="btn btn-success w-100">Editar Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>