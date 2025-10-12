<ul>
    <?php foreach(\App\Table\Article::getLast() as $post): ?> <!-- ✅ deux-points -->
       
        
        <li> <a href="<?= $post->url ?>"><?= $post->titre ?></a></li>
        
        <p> <?= $post->extrait; ?> </p>
    <?php endforeach; ?>
</ul>

<div class="">
      <?php foreach(\App\Table\Categorie::all() as $categorie): ?>
      
        <li><a href=""><?= $categorie->titre; ?></a></li>

      <?php endforeach ?>
</div>