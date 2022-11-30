<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="fas fa-photo-video"></i> <?php echo $titulo_pagina ?></h1>
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
          <div class="col-12">
            <div class="mb-3">
              <label for="upload" class="form-label">Fotos</label>
              <div class="row">
                <input type="file" id="upload" name="fotos[]" data-fileuploader-files=''>
              </div>
            </div>
          </div>
          <div class="col-12">
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
            <div class="mt-4">
              <button type="submit" class="btn btn-outline-success">Adicionar fotos</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>