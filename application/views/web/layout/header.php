<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="equipamentos de proteção respiratória, médico-hospitalar, industrial, mineração, laboratórios, química, agroquímica, agricultura, construção civil, PFF1, PFF2, PFF3">
    <meta name="description" content="Uma empresa preocupada com sua segurança, saúde e comprometida com a qualidade.">
    <meta name="author" content="Igor Henrique Constant">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/site/images/favicon-tayco.png'); ?>" />
    <!-- OGTags -->
    <meta property="og:title" content="Tayco" />
    <meta property="og:url" content="https://www.tayco.com.br" />
    <meta property="og:type" content="website" />
    <meta property="og:locale:alternate" content="pt_BR">
    <meta property="og:description" content="" />
    <meta property="og:image" content="<?php echo base_url("assets/site/images/ogtag-img.jpg") ?>" />
    <meta property="og:image:type" content="image/jpeg" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url("assets/site/images/favicon.png") ?>" type="image/x-icon">

    <title><?php echo $titulo ?></title>

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/7bc0885a91.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/site/css/main.css') ?>">
</head>

<body>
    <header>
        <div uk-sticky="sel-target: .uk-container; cls-active: uk-navbar-sticky">
            <nav class="uk-container uk-padding-small" uk-navbar="mode: click">
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="<?php echo base_url() ?>">
                        <img width="120px" src="<?php echo base_url("assets/site/images/logo-tayco.svg") ?>" alt="Logo Tayco">
                    </a>
                </div>
                <div class="uk-navbar-center uk-visible@l">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="<?php echo base_url() ?>">Home</a></li>
                        <li><a href="<?php echo base_url("sobre-nos") ?>">Quem Somos</a></li>
                        <li><a href="<?php echo base_url("produtos") ?>">Produtos</a></li>
                        <li><a href="<?php echo base_url("blog") ?>">Blog</a></li>
                        <li><a href="<?php echo base_url("contato") ?>">Contato</a></li>
                    </ul>
                </div>
                <!-- Canvas -->
                <a class="uk-navbar-toggle uk-hidden@l uk-position-right" uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav-primary"><span class="off-canvas"></span></a>
            </nav>
        </div>
    </header>

    <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true; flip: true;">
        <div class="uk-offcanvas-bar uk-flex uk-flex-column">
            <div class="brand uk-text-center">
                <a class="uk-offcanvas-brand" href="#"><img width="120px" src="<?php echo base_url("assets/site/images/logo-tayco.svg") ?>" alt="Logo Tayco"></a>
            </div>
            <ul class="uk-nav uk-nav-primary uk-padding-small uk-nav-left uk-margin-auto-vertical">
                <li class="uk-active"><a href="<?php echo base_url() ?>">Home</a></li>
                <li><a href="<?php echo base_url("sobre-nos") ?>">Quem Somos</a></li>
                <li><a href="<?php echo base_url("produtos") ?>">Produtos</a></li>
                <li><a href="<?php echo base_url("blog") ?>">Blog</a></li>
                <li><a href="<?php echo base_url("contato") ?>">Contato</a></li>
                <li class="uk-nav-divider"></li>
            </ul>
        </div>
    </div>