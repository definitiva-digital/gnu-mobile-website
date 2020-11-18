<?php $v->layout('theme/_theme'); ?>

<section class="container content column padding-5" style="
    background-image: url(<?= asset('images/wave2.svg') ?>);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-color: var(--primary-color);
    background-blend-mode: overlay;
    background-attachment: fixed;
    ">
    <h2 class="size-36 text-center text-light">Notícias</h2>
    <section class="container content middle wrap-content">
        <?php foreach ($posts as $post): ?>
            <?php $v->insert('theme/fragments/single-post', ["post" => $post]); ?>
        <?php endforeach; ?>
    </section>
        <?= $pager ?></div>
</section>


