<?php $v->layout('theme/_theme'); ?>

<section class="container-full-size content padding-10-2" style="
    background-image: url(<?= asset('images/wave2.svg') ?>);
    background-size: contain;
    background-repeat: no-repeat;
    background-position: top;
    background-color: var(--primary-color);
">
    <div class="column-2 padding-right-30px" id="service-img">
        <img class="service-ilustration1" src="<?= asset('images/services_svg4.svg') ?>">
    </div>
    <article class="column-2 padding-hor-5 text-light" id="service-banner">
        <h1 class="size-65 line-1-3 normal-bold margin-bottom">Título da página de Soluções</h1>
        <h3 class="size-36 normal text-secundary">Subtítulo da página soluções!</h3>
        <p class="size20 thin">
            Conteúdo do banner, Conteúdo do banner
            Conteúdo do banner
        </p>
        <div class="large content column center middle margin-top-15">
            <img width="75%" src="<?= asset('images/services_svg3.svg') ?>">
            <a class="btn sec margin-top-5 half-rounded size-22 upper normal hover-gray " style="width: 70%">Começar Agora</a>
        </div>
    </article>
</section>
<section class="large" style="
    height: 200px;
    background-color: var(--primary-color);
    background-image: url(<?= asset('images/wave3.svg') ?>);
    background-position: center;
    background-size: cover;
">

</section>
<section class="container content column center middle">
    <h2 class="size-50"><i class="fa fa-mobile-phone title-icon" ></i> Soluções</h2>
    <article class="large content center margin-top-5" id="service-cards">
        <article class="column-3 service-card" id="card-first">
            <div class="service-icon">
                <i class="fa fa-envelope"></i>
                <p>SMS Corporativo</p>
            </div>
            <article class="service-content">
                <p>
                    Amplie seu poder de comunicação com campanhas de SMS Corporativo. Apresente sua empresa para o mundo
                    enviando e recebendo mensagens de SMS informativas de forma simples.
                </p>
            </article>
        </article>

        <article class="column-3 service-card">
            <div class="service-icon">
                <i class="fa fa-comments-o"></i>
                <p>SMS Interativo</p>
            </div>
            <article class="service-content">
                <p>
                    Crie mensagens de SMS com perguntas e respostas. Faça pesquisas de mercado, fluxos de cobrança,
                    ações de pós venda e higienize a sua base.
                </p>
            </article>
        </article>

        <article class="column-3 service-card">
            <div class="service-icon">
                <i class="fa fa-comment-o"></i>
                <p>SMS Marketing</p>
            </div>
            <article class="service-content">
                <p>
                    Envie SMS Marketing personalizados. Ao criar campanhas de marketing aumente os seus leads, fortaleça
                    sua marca e aumente suas vendas. Enviei mensagens de SMS com avisos de lançamentos de produtos ,
                    oportunidades, rematrícula, provas, ofertas, descontos, vantagens e muito mais.
                </p>
            </article>
        </article>
    </article>

    <article class="large content center margin-top-5" id="service-cards">
        <article class="column-3 service-card">
            <div class="service-icon">
                <i class="fa fa-credit-card"></i>
                <p>Cobrança otimizada</p>
            </div>
            <article class="service-content">
                <p>
                    Realize cobrança através de campanhas de SMS com baixo custo e ótimo resultados.
                    Economize substancialmente com valores de telefonia, gráficas e postagens de forma mais eficiente.
                </p>
            </article>
        </article>

        <article class="column-3 service-card">
            <div class="service-icon">
                <i class="fa fa-sitemap"></i>
                <p>Revenda de Serviços</p>
            </div>
            <article class="service-content">
                <p>
                    Seja uma revendedora, monte sua empresa, crie sua carteira de clientes, configure o sistema de
                    disparo de SMS com seu logotipo e seu domínio, monte suas estratégias e conquiste o mercado.
                </p>
            </article>
        </article>

        <article class="column-3 service-card">
            <div class="service-icon">
                <i class="fa fa-bar-chart"></i>
                <p>Relatórios</p>
            </div>
            <article class="service-content">
                <p>
                    Diversos relatórios disponíveis para acompanhamento com disponibilidade configurada por usuário
                    conforme nível de acesso. Saiba tudo sobre suas campanhas de SMS.
                </p>
            </article>
        </article>
    </article>

    <article class="large content center margin-top-5" id="service-cards">
        <article class="column-3 service-card">
            <div class="service-icon">
                <i class="fa fa-envelope-square"></i>
                <p>E-mail Marketing</p>
            </div>
            <article class="service-content">
                <p>
                    Envie e-mails com anexos Via API e através do Painel. Somos o melhor provedor de e-mail do mercado,
                    garantindo assim uma excelência na efetividade nos envios.
                </p>
            </article>
        </article>

        <article class="column-3 service-card">
            <div class="service-icon">
                <i class="fa fa-tablet"></i>
                <p>Tecnologia</p>
            </div>
            <article class="service-content">
                <p>
                    Acesse e gerencie sua empresa em qualquer lugar Pelo computador, notebook, celular ou tablet.
                </p>
            </article>
        </article>

        <article class="column-3 service-card">
            <div class="service-icon">
                <i class="fa fa-laptop"></i>
                <p>Solução</p>
            </div>
            <article class="service-content">
                <p>
                    Solução de disparo de SMS simples, rápida e pratica, que foi desenvolvida internamente visando a
                    necessidade do mercado e qualidade do resultado esperado.
                </p>
            </article>
        </article>
    </article>

    <article class="large content center margin-top-5" id="service-cards">
        <article class="column-3 service-card">
            <div class="service-icon">
                <i class="fa fa-desktop"></i>
                <p>Qualidade</p>
            </div>
            <article class="service-content">
                <p>
                    Servidores com controle de contingencia, segurança, de alta performance e disponibilidade.
                </p>
            </article>
        </article>

        <article class="column-3 service-card">
            <div class="service-icon">
                <i class="fa fa-group"></i>
                <p>Black List</p>
            </div>
            <article class="service-content">
                <p>
                    Cadastro de telefones que devem ser desconsiderados em seus envios de SMS.
                </p>
            </article>
        </article>

        <article class="column-3 service-card">
            <div class="service-icon">
                <i class="fa fa-phone"></i>
                <p>Atendimento</p>
            </div>
            <article class="service-content">
                <p>
                    Atendimento 24hs por dia, todos os dias nos telefones comerciais. Você não fica sem suporte!
                </p>
            </article>
        </article>
    </article>
</section>
