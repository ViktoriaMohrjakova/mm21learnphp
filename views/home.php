<?php include __DIR__ . '/partials/header.php'; ?>
<div class="container">
    <div class="columns is-multiline">
        <?php foreach($articles as $article): ?>
            <div class="column is-3">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <?=$article->title?>
                        </p>
                    </header>
                    <?php if($article->image): ?>
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="/<?=$article->image?>" alt="Placeholder image">
                        </figure>
                    </div>
                    <?php endif ?>
                    <div class="card-content">
                        <div class="content">
                            <?=$article->body?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include __DIR__ .  '/partials/footer.php'; ?>