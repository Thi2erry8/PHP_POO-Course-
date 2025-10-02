<ul>
    <?php foreach($db->query('SELECT * FROM articles') as $post): ?> <!-- ✅ deux-points -->

        <li><?= $post->title ?></li>

    <?php endforeach; ?>
</ul>