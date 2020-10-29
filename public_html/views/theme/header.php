<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= asset('css/style.css'); ?>" />
    <link rel="stylesheet" href="<?= asset('css/font-awesome.min.css'); ?>" />
    <?php $v->section('head'); ?>
</head>
<body>
<header>
    <section class="top-bar content jus-end middle">
        <nav class="size-12 text-gray thin">
            <a href="#"><span>CONHEÇA A GNU</span></a>
            <a href="#"><span>NOSSOS PARCEIROS</span></a>
            <a href="#"><span>LOGIN</span></a>
        </nav>
    </section>
</header>
<section class="large content padding-hor bg-white" id="top-header">
    <article class="nav-logo">
        <a href="<?= site()?>"><img src="<?= asset("images/gnu-logo.png") ?>"></a>
    </article>
    <article class="nav-info">
        <section class="column-2">
            <nav class="header-menu">
                <ul class="">
                    <li><a href="<?= "#" ?>">Soluções</a></li>
                    <li><a href="<?= "#" ?>">Vantagens</a></li>
                    <li><a href="<?= "#" ?>">Depoimentos</a></li>
                    <li><a href="<?= "#" ?>">Contato</a></li>
                    <li><a href="<?= "#" ?>">Blog</a></li>
                </ul>
            </nav>
            <nav class="mobile-menu">
                <i class="fa fa-bars mobile-icon" id="mobile-icon"></i>
                <ul class="mobile-menu-dropdown">
                    <li><a href="<?= "#" ?>">Soluções</a></li>
                    <li><a href="<?= "#" ?>">Vantagens</a></li>
                    <li><a href="<?= "#" ?>">Depoimentos</a></li>
                    <li><a href="<?= "#" ?>">Contato</a></li>
                    <li><a href="<?= "#" ?>">Blog</a></li>
                </ul>
            </nav>
        </section>
        <section class="column-2 content jus-end pos-relative" id="header-cta">
            <a class="btn gray hover-sec" href="#">Compre Agora</a>
        </section>
    </article>
</section>