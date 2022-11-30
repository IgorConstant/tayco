<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-laptop-code"></i> <?php echo $titulo_pagina ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <?php echo anchor('acessorios_admin/adicionaracessorio', '<i class="fas fa-plus-circle"></i> <span>Novo Acessório</span>', array('class' => 'btn btn-outline-success')) ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12">
            <table id="mainTable" class="table table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">ID</th>
                        <th>Nome do Acessório</th>
                        <th>Slug</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($app_acessorio as $acessorios) { ?>
                        <tr>
                            <td><?= $acessorios->id ?></td>
                            <td><?= $acessorios->nome_acessorio ?></td>
                            <td><?= $acessorios->slug ?></td>
                            <td class="text-center">
                                <?= anchor('acessorios_admin/editaracessorio/' . $acessorios->id, '<i class="fas fa-pencil"></i>', array('title' => 'Editar')) ?>
                                <?= anchor('acessorios_admin/apagaracessorio/' . $acessorios->id, '<i class="far fa-trash-alt"></i>', array('title' => 'Excluir')) ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
</main>