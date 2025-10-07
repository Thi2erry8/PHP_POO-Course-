<ul>
    <?php foreach($db->query('SELECT * FROM articles', 'App\Table\Article') as $post): ?> <!-- ✅ deux-points -->
       

        <li> <a href="<?= $post->url ?>"><?= $post->titre ?></a></li>
        
        <p> <?= $post->extrait; ?> </p>
    <?php endforeach; ?>
</ul>