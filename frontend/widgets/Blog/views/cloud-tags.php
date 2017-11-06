<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\helpers\Url;
?>

<?php foreach ($cloud_tags as $tag): ?>
    <?php $url = Url::to(['/blog/post/tag', 'id' =>$tag->id]); ?>
    <li><a href="<?= Html::encode($url) ?>"><?= $tag->name; ?></a></li>

<?php endforeach; ?>