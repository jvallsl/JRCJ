<?php if (! empty($usuario) && is_array($usuario)) : ?>

    <?php foreach ($usuario as $user_item): ?>

        <h3><?= esc($user_item['Username']); ?></h3>

        <div class="main">
            <?= esc($user_item['Email']); ?>
        </div>
        <p><a href="/users/<?= esc($user_item['Username'], 'url'); ?>">View article</a></p>

    <?php endforeach; ?>

<?php else : ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>