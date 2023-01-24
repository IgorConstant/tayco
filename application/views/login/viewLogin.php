<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Igor Henrique Constant">
    <title>Login - Tayco</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7bc0885a91.js"></script>

    <!-- Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/css/login.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/css/bootstrap.min.css') ?>">

</head>


<body id="loginView">

    <div class="container">
        <?= $this->session->flashdata('erro_login'); ?>

        <div class="row g-0">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12"></div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 d-flex align-items-center">
                <div class="brandSala03 text-center">
                    <img src="<?php echo base_url("assets/dashboard/images/logo-tayco.png") ?>" alt="Logo Tayco">
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="blockForm">
                    <?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
                    <?php echo $this->session->flashdata('form'); ?>

                    <?php
                    $attributes = array('role' => 'form');
                    echo form_open('', $attributes);
                    ?>

                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="inputEmail">
                    </div>
                    <div class="mb-3">
                        <label for="inputPass" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="senha" id="inputPass">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100">Entrar</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12"></div>
        </div>
    </div>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js'></script>
    <script src="<?php echo base_url('assets/dashboard/js/main.js') ?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/dashboard/js/bootstrap.bundle.min.js') ?>"></script>
</body>