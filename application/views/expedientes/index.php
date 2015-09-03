<h2><?php echo $title; ?></h2>

<?php foreach ($expedientes as $expedientes_item): ?>

        <h3><?php echo $expedientes_item['title']; ?></h3>
        <div class="main">
                <?php echo $expedientes_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('expedientes/'.$expedientes_item['nombre_exp']); ?>">View article</a></p>

<?php endforeach; ?>