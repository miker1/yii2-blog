<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\helpers\Url;
?>

<?php foreach ($posts_category as $post): ?>
    <?php $url = Url::to(['/blog/post/category', 'slug' =>$post->slug]); ?>
    <li><a href="<?= Html::encode($url)?>"><?= $post->title;?><span><?= $post->posts_count;?></span></a></li>

<?php endforeach; ?>