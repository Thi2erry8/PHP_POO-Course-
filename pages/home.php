<ul>
    <?php foreach($db->query('SELECT * FROM articles') as $post): ?> <!-- ✅ deux-points -->

        <li><?= $post->titre ?></li>

    <?php endforeach; ?>
</ul>