<?php

/* @var $this yii\web\View */

$this->title = 'Главная';
?>


<h2>Записи</h2>

<!--Вывод всех постов-->
<?php foreach ($posts as $post){ ?>
    <div class="post">
        <h3 class="post__title"><?= $post->title ?></h3>
        <p class="post__content"><?= $post->content ?></p>
        <p class="post__date">Дата публикации: <?= $post->date ?></p>
    </div>
<?php } ?>