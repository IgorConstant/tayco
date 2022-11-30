<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-laptop-code"></i> <?php echo $titulo_pagina ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <?php echo anchor('posts/adicionarpost', '<i class="fas fa-plus-circle"></i> <span>Novo Post</span>', array('class' => 'btn btn-outline-success')) ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-12">
            <table id="mainTable" class="table table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Título do Post</th>
                        <th>Slug</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($app_blog as $post) { ?>
                        <tr>
                            <td><?= $post->id ?></td>
                            <td><?= $post->title ?></td>
                            <td><?= $post->slug ?></td>
                            <td><?= $post->category ?></td>
                            <td class="text-center">
                                <?= anchor('posts/editarpost/' . $post->id, '<i class="fas fa-edit"></i>', array('title' => 'Editar')) ?>
                                <?= anchor('posts/deletarpost/' . $post->id, '<i class="fas fa-trash-alt"></i>', array('title' => 'Excluir')) ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>