<?php

/* @var $this yii\web\View */
/* @var $post blog\entities\Blog\Post\Post */

use frontend\widgets\Blog\CommentsWidget;
use yii\helpers\Html;


?>


    <div class="single_post">
        <div class="post_media">
            <img src="<?= Html::encode($post->getThumbFileUrl('photo', 'origin')) ?>" alt="post image">
        </div>
        <div class="post_title">
            <h4 class="montserrat-text uppercase"><?= Html::encode($post->title) ?></h4>
            <span class="post_date"> <?= Yii::$app->formatter->asDatetime($post->created_at); ?></span>
        </div>
        <p>
            <?= Yii::$app->formatter->asHtml($post->content, [
                'Attr.AllowedRel' => array('nofollow'),
                'HTML.SafeObject' => true,
                'Output.FlashCompat' => true,
                'HTML.SafeIframe' => true,
                'URI.SafeIframeRegexp'=>'%^(https?:)?//(www\.youtube(?:-nocookie)?\.com/embed/|player\.vimeo\.com/video/)%',
            ]) ?>
        </p>

    </div>
<!-- end col -->
<?= CommentsWidget::widget([
    'post' => $post,
]) ?>
