<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-laptop-code"></i> <?php echo $titulo_pagina ?></h1>
    </div>

    <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>') ?>


    <div class="row">
        <div class="col-12 col-sm-12 mb-4">
            <?= form_open() ?>

            <div class="form-group">
                <?= form_label('Tags Header', 'tagHeader') ?>
                <?= form_textarea(['type' => 'text', 'rows' => '4', 'class' => 'form-control', 'name' => 'tagHeader', 'id' => 'tagHeader', 'value' => $query->tag_header]) ?>
            </div>

            <div class="form-group">
                <?= form_label('Tags Body', 'tagBody') ?>
                <?= form_textarea(['type' => 'text', 'rows' => '4', 'class' => 'form-control', 'name' => 'tagBody', 'id' => 'tagBody', 'value' => $query->tag_body]) ?>
            </div>

            <div class="form-group">
                <?= form_label('Tags Footer', 'tagFooter') ?>
                <?= form_textarea(['type' => 'text', 'rows' => '4', 'class' => 'form-control', 'name' => 'tagFooter', 'id' => 'tagFooter', 'value' => $query->tag_footer]) ?>
            </div>

            <hr />
            <?= form_hidden('idTag', $query->id); ?>
            <?= form_submit('submit', 'Salvar Tags', ['class' => 'btn btn-success mt-3 mb-3']) ?>

            <?= form_close() ?>
        </div>
    </div>
</main>