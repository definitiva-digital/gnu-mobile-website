<?php $v->insert('theme/header'); ?>

<main class="main_content">
    <?= $v->section("content"); ?>
</main>

<?php $v->insert("theme/footer"); ?>

<?= $v->section('js'); ?>

</body>
</html>
