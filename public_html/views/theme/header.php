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
        <a id="home-link" href="<?= site()?>"><img src="<?= asset("images/gnu-logo.png") ?>"></a>
    </article>
    <article class="nav-info">
        <section class="column75">
            <nav class="header-menu">
                <ul class="">
                    <li><a href="<?= $router->route('web.services') ?>">Soluções</a></li>
                    <li><a href="<?= "#gnu-benefits" ?>" class="soft-achor">Vantagens</a></li>
                    <li><a href="<?= "#testimonial-section"  ?>" class="soft-achor">Depoimentos</a></li>
                    <li><a class="contact-link" href="<?= "#" ?>">Contato</a></li>
                    <li><a href="<?= $router->route('web.blog') ?>">Blog</a></li>
                </ul>
            </nav>
            <nav class="mobile-menu">
                <i class="fa fa-bars mobile-icon" id="mobile-icon"></i>
                <ul class="mobile-menu-dropdown">
                    <li><a href="<?= $router->route('web.services') ?>">Soluções</a></li>
                    <li><a href="<?= $router->route('web.home') . "/#gnu-benefits" ?>" class="soft-achor">Vantagens</a></li>
                    <li><a href="<?= $router->route('web.home') . "/#testimonial-section"  ?>" class="soft-achor">Depoimentos</a></li>
                    <li><a class="contact-link" href="<?= "#" ?>">Contato</a></li>
                    <li><a href="<?= $router->route('web.blog') ?>">Blog</a></li>
                </ul>
            </nav>
        </section>
        <section class="column-4 content jus-end pos-relative" id="header-cta">
            <a class="btn gray hover-sec contact-link" href="#">Compre Agora</a>
        </section>
    </article>
</section>
<section id="contact-form-area">
    <div class="form">
        <span id="contact-close"><i class="fa fa-times"style="font-family: FontAwesome, Poppins"> Fechar</i></span>
        <h4 class="size18 margin-bottom">Obrigado pelo interesse! Entraremos em contato o mais breve possível!</h4>
        <form method="post" id="contact-form">
            <div class="form-input-group">
                <input type="text" placeholder="&#xf2bd;  Nome" name="name" style="font-family: Arial, FontAwesome;font-size: 18px">
            </div>
            <div class="form-input-group">
                <input type="text" placeholder="&#xf10b;  Celular" style="font-family: Arial, FontAwesome;font-size: 18px">
            </div>
            <div class="form-input-group">
                <input type="text" placeholder="&#xf0e0;  E-mail" style="font-family: Arial, FontAwesome;font-size: 18px">
            </div>
            <div class="form-input-group">
                <input type="text" placeholder="&#xf21b;  Senha" style="font-family: Arial, FontAwesome;font-size: 18px">
            </div>
            <div class="form-input-group">
                <textarea placeholder="&#xf086;  Conte-nos a sua necessidade" style="font-family: Arial, FontAwesome;font-size: 18px"></textarea>
            </div>
            <button class="btn bg-secundary large margin-ver-5 size18">Enviar</button>
        </form>
    </div>


</section>