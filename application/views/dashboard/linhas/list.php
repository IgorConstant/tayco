<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-laptop-code"></i> <?php echo $titulo_pagina ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <?php echo anchor('linhas_admin/adicionar', '<i class="fas fa-plus-circle"></i> <span>Novo</span>', array('class' => 'btn btn-outline-success')) ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12">
            <table id="mainTable" class="table table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Nome</th>
                        <th>Slug</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($objetos as $obj) { ?>
                        <tr>
                            <td><?= $obj->id ?></td>
                            <td><?= $obj->nome_linha ?></td>
                            <td><?= $obj->slug ?></td>
                            <td class="text-center">
                                <?= anchor('linhas_admin/editar/' . $obj->id, '<i class="fas fa-pencil"></i>', array('title' => 'Editar')) ?>
                                <?= anchor('linhas_admin/apagar/' . $obj->id, '<i class="far fa-trash-alt"></i>', array('title' => 'Excluir')) ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
</main>