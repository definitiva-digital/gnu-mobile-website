<article class="content column jus-start post-feed">
    <a href="<?= $router->route('web.post') . $post->slug; ?>">
        <div class="post-feed-image" style=
        "
            background-image: url(<?= asset("images/{$post->image}"); ?>);
            ">
        </div>
    </a>
    <div class="post-feed-content">
        <h3 class="post-feed-title"><a href="<?= $router->route('web.post') . $post->slug; ?>"><?= $post->title ?></a></h3>
        <span class="post-meta"><?= timeToString($post->created_at) ?></span>
        <p><?= $post->resume; ?></p>
        <a class="post-link" href="<?= $router->route('web.post') . $post->slug; ?>">Leia Mais >></a>
    </div>
</article>