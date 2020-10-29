<?php $v->layout('theme/_theme'); ?>

<section id="slides">
    <span id="next"><i class="fa fa-chevron-right"></i></span>
    <span id="prev"><i class="fa fa-chevron-left"></i></span>
    <div id="slide1" class="slide-hide" style="background-image: url(<?= asset("images/gnu-presentation1.jpg") ?>"
    >
        <article class="slide-content">
            <h2>Solicite um orçamento</h2>
            <span class="divider"></span>
            <p>Nossa equipe trabalha 12 horas por dia pela sua empresa.</p>
            <a class="btn sec hover-pri" href="#">CLIQUE AQUI</a>
        </article>
    </div>
    <div id="slide2" class="slide-hide" style="background-image: url(<?= asset("images/gnu-presentation2.jpg") ?>">
        <article class="slide-content">
            <h2>Solicite um orçamento</h2>
            <span class="divider"></span>
            <p>Nossa equipe trabalha 12 horas por dia pela sua empresa.</p>
            <a class="btn sec hover-pri">CLIQUE AQUI</a>
        </article>
    </div>
    <div id="slide3" class="slide-hide" style="background-image: url(<?= asset("images/gnu-presentation3.jpg") ?>">
        <article class="slide-content">
            <h2>Solicite um orçamento</h2>
            <span class="divider"></span>
            <p>Nossa equipe trabalha 12 horas por dia pela sua empresa.</p>
            <a class="btn sec hover-pri">CLIQUE AQUI</a>
        </article>
    </div>
</section><!-- slides -->
<section class="content center wrap-content padding-5-10">
    <h2 class="text-center margin-bottom">Sistema 100% próprio, dinâmico, rápido, com interface interativa e prática.
        Solução de baixo custo e ALTA qualidade!</h2>
    <article class="pos-relative" id="gnu-stats1">
        <img class="lazyload" data-src="<?= asset('images/send-message.png') ?>">
        <div class="content-absolute">
            <h3 class="size-22 text-secundary">133.336.948</h3>
            <p class="text-light text-center">Mensagens enviadas</p>
        </div>
    </article>
    <article class="pos-relative" id="gnu-stats2">
        <img class="lazyload" data-src="<?= asset('images/response-message-complete.png') ?>">
        <div class="content-absolute">
            <h3 class="size-22 text-secundary">40.001.085</h3>
            <p class="text-light text-center">Mensagens respondidas</p>
        </div>
    </article>
    <article class="pos-relative" id="gnu-stats3">
        <img class="lazyload" data-src="<?= asset('images/customer-message.png') ?>">
        <div class="content-absolute">
            <h3 class="size-22 text-secundary">330</h3>
            <p class="text-light text-center">Clientes satisfeitos</p>
        </div>
    </article>
    <article class="pos-relative" id="gnu-stats4">
        <img class="lazyload" data-src="<?= asset('images/users-message.png') ?>">
        <div class="content-absolute">
            <h3 class="size-22 text-secundary">528</h3>
            <p class="text-light text-center">Usuários</p>
        </div>
    </article>
</section>
<section class="container content center middle column padding-5 text-center pos-relative bg-primary"
         id="testimonial-section">
    <h2 class="text-center margin-bottom text-light size-36">O que nossos clientes falam de nós!</h2>
    <i class="fa fa-chevron-left" id="testimonial-prev"></i>
    <i class="fa fa-chevron-right" id="testimonial-next"></i>
    <section id="testimonials">
        <div id="testimonial-1" class="testimonial">
            <p>
                A JM Master Technology tem sido uma parceira fiel e eficiente da CompleTI!
                Temos extrema satisfação com a qualidade de serviços e atendimento.
                Parabéns pelo excelente trabalho e profissionalismo!
            </p>
            <img src="<?= asset('images/gnu-testimonial-example.jpg') ?>">
            <h5>Nilmar</h5>
            <h6>Diretor de TI</h6>
        </div>
        <div id="testimonial-2" class="testimonial slide-hide">
            <p>
                A JM Master Technology tem sido uma parceira fiel e eficiente da CompleTI!
                Temos extrema satisfação com a qualidade de serviços e atendimento.
                Parabéns pelo excelente trabalho e profissionalismo!
            </p>
            <img src="<?= asset('images/gnu-testimonial-example.jpg') ?>">
            <h5>Nilmar</h5>
            <h6>Diretor de TI</h6>
        </div>
        <div id="testimonial-3" class="testimonial slide-hide">
            <p>
                Teste
            </p>
            <img src="<?= asset('images/gnu-testimonial-example.jpg') ?>">
            <h5>Nilmar</h5>
            <h6>Diretor de TI</h6>
        </div>
    </section>
</section><!--testimonials-->
<section class="container content">
    <article class="column-2 content column middle padding-5">
        <h2 class="size-36 normal text-center text-secundary">Você só encontra na GNU MOBILE</h2>
        <section class="accordion">
            <div class="single-accordion">
                <h3>SMS Corporativo</h3>
                <span class="accordion-init" data-set="accordion-1"> <i class="fa fa-chevron-down"></i> </span>
                <article id="accordion-1">
                    <p>
                        Amplie seu poder de comunicação com campanhas de SMS Corporativo.
                        Apresente sua empresa para o mundo enviando e recebendo mensagens de SMS informativas de forma
                        simples.
                    </p>
                </article>
            </div>
            <!-- single-accordion -->
            <div class="single-accordion">
                <h3>SMS Interativo</h3>
                <span class="accordion-init" data-set="accordion-2"> <i class="fa fa-chevron-down"></i> </span>
                <article id="accordion-2">
                    <p>
                        Crie mensagens de SMS com perguntas e respostas. Faça pesquisas de mercado, fluxos de cobrança,
                        ações de pós venda e higienize a sua base.
                    </p>
                </article>
            </div>
            <!-- single-accordion -->
            <div class="single-accordion">
                <h3>SMS Marketing</h3>
                <span class="accordion-init" data-set="accordion-3"> <i class="fa fa-chevron-down"></i> </span>
                <article id="accordion-3">
                    <p>
                        Envie SMS Marketing personalizados. Ao criar campanhas de marketing aumente os seus leads,
                        fortaleça sua marca e aumente suas vendas. Enviei mensagens de SMS com avisos de lançamentos de
                        produtos , oportunidades, rematrícula, provas, ofertas, descontos, vantagens e muito mais.
                    </p>
                </article>
            </div>
            <!-- single-accordion -->
            <div class="single-accordion">
                <h3>Cobrança otimizada</h3>
                <span class="accordion-init" data-set="accordion-4"> <i class="fa fa-chevron-down"></i> </span>
                <article id="accordion-4">
                    <p>
                        Realize cobrança através de campanhas de SMS com baixo custo e ótimo resultados.
                        Economize substancialmente com valores de telefonia, gráficas e postagens de forma mais
                        eficiente.
                    </p>
                </article>
            </div>
            <!-- single-accordion -->
            <div class="single-accordion">
                <h3>Revenda de Serviços</h3>
                <span class="accordion-init" data-set="accordion-5"> <i class="fa fa-chevron-down"></i> </span>
                <article id="accordion-5">
                    <p>
                        Seja uma revendedora, monte sua empresa, crie sua carteira de clientes, configure o sistema de
                        disparo de SMS com seu logotipo e seu domínio, monte suas estratégias e conquiste o mercado.
                    </p>
                </article>
            </div>
            <!-- single-accordion -->
            <div class="single-accordion">
                <h3>Relatórios</h3>
                <span class="accordion-init" data-set="accordion-6"> <i class="fa fa-chevron-down"></i> </span>
                <article id="accordion-6">
                    <p>
                        Diversos relatórios disponíveis para acompanhamento com disponibilidade configurada por usuário
                        conforme nível de acesso. Saiba tudo sobre suas campanhas de SMS.
                    </p>
                </article>
            </div>
            <!-- single-accordion -->
            <div class="single-accordion">
                <h3>E-mail Marketing</h3>
                <span class="accordion-init" data-set="accordion-7"> <i class="fa fa-chevron-down"></i> </span>
                <article id="accordion-7">
                    <p>
                        Envie e-mails com anexos Via API e através do Painel. Somos o melhor provedor de e-mail do
                        mercado, garantindo assim uma excelência na efetividade nos envios.
                    </p>
                </article>
            </div>
            <!-- single-accordion -->
            <div class="single-accordion">
                <h3>Tecnologia</h3>
                <span class="accordion-init" data-set="accordion-8"> <i class="fa fa-chevron-down"></i> </span>
                <article id="accordion-8">
                    <p>
                        Acesse e gerencie sua empresa em qualquer lugar Pelo computador, notebook, celular ou tablet.
                    </p>
                </article>
            </div>
            <!-- single-accordion -->
            <div class="single-accordion">
                <h3>Solução</h3>
                <span class="accordion-init" data-set="accordion-9"> <i class="fa fa-chevron-down"></i> </span>
                <article id="accordion-9">
                    <p>
                        Solução de disparo de SMS simples, rápida e pratica, que foi desenvolvida internamente visando a
                        necessidade do mercado e qualidade do resultado esperado.
                    </p>
                </article>
            </div>
            <!-- single-accordion -->
            <div class="single-accordion">
                <h3>Qualidade</h3>
                <span class="accordion-init" data-set="accordion-10"> <i class="fa fa-chevron-down"></i> </span>
                <article id="accordion-10">
                    <p>
                        Servidores com controle de contingencia, segurança, de alta performance e disponibilidade.
                    </p>
                </article>
            </div>
            <!-- single-accordion -->
            <div class="single-accordion">
                <h3>Black List</h3>
                <span class="accordion-init" data-set="accordion-11"> <i class="fa fa-chevron-down"></i> </span>
                <article id="accordion-11">
                    <p>
                        Cadastro de telefones que devem ser desconsiderados em seus envios de SMS.
                    </p>
                </article>
            </div>
            <!-- single-accordion -->
            <div class="single-accordion">
                <h3>Atendimento</h3>
                <span class="accordion-init" data-set="accordion-12"> <i class="fa fa-chevron-down"></i> </span>
                <article id="accordion-12">
                    <p>
                        Atendimento 24hs por dia, todos os dias nos telefones comerciais. Você não fica sem suporte!
                    </p>
                </article>
            </div>
            <!-- single-accordion -->
        </section>
    </article>
    <article class="column-2" id="accordion-image"></article>
    <!-- accordion-image -->
</section>
<section class="container content column padding-5" style="
        background-image: url(<?= asset('images/gnu-presentation3.jpg') ?>);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-color: rgba(0,0,0,.6);
        background-blend-mode: overlay;
        background-attachment: fixed;
    ">
    <h2 class="size-36 text-center text-light">Ultimas Notícias</h2>
    <section class="container content center middle">
        <?php foreach ([1,2,3] as $i): ?>
            <article class="column-3 content column jus-start post-feed">
                <a href="#">
                    <div class="post-feed-image" style=
                    "
                            background-image: url(<?= asset('images/gnu-presentation1.jpg') ?>);
                            ">
                    </div>
                </a>
                <div class="post-feed-content">
                    <h3 class="post-feed-title"><a href="#">Loren ipsum dolor sit amet, consectetur</a></h3>
                    <span class="post-meta">31 de agosto de 2020</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vestibulum rhoncus ut odio id posuere. Vestibulum dignissim sem non metus elementum consequat.
                        Sed fermentum, lacus interdum volutpat dapibus, nunc ante commodo nibh, ac eleifend lectus dolor ut
                        metus. Vivamus dapibus nec elit tempor sodales.</p>
                    <a class="post-link" href="#" id="<?= "post-link{$i}" ?>">Leia Mais >></a>
                </div>
            </article>
        <?php endforeach; ?>
    </section>

</section>


<?php $v->start('js') ?>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script src="<?= asset('js/lazy-load.js') ?>"></script>
<script src="<?= asset('js/slider.js') ?>"></script>
<script src="<?= asset('js/testimonial-carousel.js') ?>"></script>
<script src="<?= asset('js/accordion.js') ?>"></script>
<?php $v->end('js') ?>
