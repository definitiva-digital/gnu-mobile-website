<section class="large content padding-5-10 center middle">
    <article class="content column column-2 padding-hor-5">
        <h3 class="text-primary size-26 margin-bottom">Comece agora mesmo</h3>
        <p class="size18 line-2">1. Preencha os dados ao lado</p>
        <p class="size18 line-2">2. Valide o token enviado em seu telefone</p>
        <p class="size18 line-2">3. Receba em seu e-mail os dados de acesso</p>
        <p class="size18 line-2">4. Acesse sua conta com todas as funcionalidades e recursos liberados e dez creditos para testar como quiser</p>
    </article>
    <form class="column-2 content column center middle form padding-hor-5" method="post" action="<?= $router->route('app.register') ?>">
        <input type="text" placeholder="&#xf2bd;  Nome" style="font-family: Arial, FontAwesome;font-size: 18px">
        <input type="text" placeholder="&#xf10b;  Celular" style="font-family: Arial, FontAwesome;font-size: 18px">
        <input type="text" placeholder="&#xf0e0;  E-mail" style="font-family: Arial, FontAwesome;font-size: 18px">
        <input type="text" placeholder="&#xf21b;  Senha" style="font-family: Arial, FontAwesome;font-size: 18px">
        <button class="btn bg-secundary large margin-ver-5">Enviar</button>
    </form>
</section>

<footer>
    <section class="footer-logo large">
        <div>
            <img src="<?= asset('images/gnu-complete-logo-white.png') ?>">
        </div>
    </section>
    <section class="content large">
        <div class="content column column-4 text-light">
            <article class="footer-content">
                <h4>Institucional</h4>
                <a class="text-light" href="mailto:contato@gnumobile.com.br" target="_blank">
                    <i class="fa fa-envelope"></i>contato@gnumobile.com.br
                </a>
                <a class="text-light" href="" target="_blank">
                    <i class="fa fa-whatsapp"></i>(21) 9 2222-2222
                </a>
                <a class="text-light" href="" target="_blank">
                    <i class="fa fa-ban"></i>Política de cancelamento
                </a>
                <a class="text-light" href="mailto:contato@gnumobile.com.br" target="_blank">
                    <i class="fa fa-file"></i>Termos de uso
                </a>
            </article>
        </div>
    </section>
</footer>

<script src="<?= asset('js/jquery.js') ?>"></script>
<script src="<?= asset('js/mobile-menu.js') ?>"></script>
<script src="<?= asset('js/sticky-header.js') ?>" ></script>
