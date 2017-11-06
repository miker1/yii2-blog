<?php

/** @var $posts blog\entities\Blog\Post\Post[] */

use yii\helpers\Html;
use yii\helpers\StringHelper;
use yii\helpers\Url;
?>

<?php foreach ($posts as $post): ?>
    <?php $url = Url::to(['/blog/post/post', 'id' =>$post->id]); ?>
<div class="related_post">
    <div class="thumb"><img src="<?= Html::encode($post->getThumbFileUrl('photo', 'lasts_posts')) ?>" alt="image"></div>
    <a href="<?= Html::encode($url) ?>" class="post_title montserrat-text uppercase"><?= Html::encode($post->title) ?></a>
    <div class="post_date"><?= Yii::$app->formatter->asDatetime($post->created_at); ?></div>
</div>
<?php endforeach; ?>