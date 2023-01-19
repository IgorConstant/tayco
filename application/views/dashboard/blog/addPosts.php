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
                            <label for="tituloPost" class="form-label">Título do Post</label>
                            <input type="text" class="form-control" id="tituloPost" name="tituloPost">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="slugPost" class="form-label">Slug</label>
                            <input type="text" class="form-control" id="slugPost" name="slugPost">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="categoriaPost" class="form-label">Categoria</label>
                            <input type="text" class="form-control" id="categoriaPost" name="categoriaPost">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="yoastKeywords" class="form-label">Yoast SEO - Keywords</label>
                            <input type="text" class="form-control" id="yoastKeywords" name="yoastKeywords">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="yoastDescription" class="form-label">Yoast SEO - Description</label>
                            <input type="text" class="form-control" id="yoastDescription" name="yoastDescription">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-4">
                            <label for="editor1" class="form-label">Conteúdo</label>
                            <textarea id="editor1" class="form-control" name="conteudoPost" placeholder="Add Body"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="imgDestaque" class="form-label">Imagem Destaque</label>
                            <br />
                            <input type="file" name="imagemPost" class="form-control-file" id="imgDestaque">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success mt-3 mb-3 w-100">Adicionar novo Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>