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
        <!--
        <ul class="list" style="margin:30px 0">
            <li>consectetur adipisicing</li>
            <li>Sit eum consequatur</li>
            <li>Deserunt quisquam aperiam</li>
            <li>dolorum maiores, cumque eligendi</li>
            <li>Lorem ipsum dolor sit amet</li>
        </ul>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia sint placeat praesentium dolorum minima, et laborum similique cupiditate minus nemo qui tempore corporis eum quisquam harum perferendis saepe tempora ipsum. Quia sint placeat praesentium dolorum minima, et laborum similique cupiditate minus nemo qui tempore corporis eum quisquam harum perferendis saepe tempora ipsum. Quia sint placeat praesentium dolorum minima, et laborum similique cupiditate minus nemo qui tempore corporis eum quisquam harum perferendis saepe tempora ipsum. Quia sint placeat praesentium dolorum minima, et laborum similique cupiditate minus nemo qui tempore corporis eum quisquam harum perferendis saepe tempora ipsum.
        </p>
        <blockquote class="bq" style="margin:30px 0">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia sint placeat praesentium dolorum minima, et laborum similique cupiditate minus nemo qui tempore corporis eum quisquam harum perferendis saepe tempora ipsum.
        </blockquote>
        <div class="row">
            <div class="col-md-6">
                <img src="<? //= Html::encode($post->getThumbFileUrl('photo', 'origin')) ?>" alt="image">
            </div>
            <div class="col-md-6">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia sint placeat praesentium dolorum minima, et laborum similique cupiditate minus nemo qui tempore corporis eum quisquam harum perferendis saepe tempora ipsum. Quia sint placeat praesentium dolorum minima, et laborum similique cupiditate minus nemo qui tempore corporis eum quisquam harum perferendis saepe tempora ipsum.
                </p>
                <ul class="list" style="margin:30px 0">
                    <li>consectetur adipisicing</li>
                    <li>Sit eum consequatur</li>
                    <li>Deserunt quisquam aperiam</li>
                    <li>dolorum maiores, cumque eligendi</li>
                    <li>Lorem ipsum dolor sit amet</li>
                </ul>
            </div>
        </div>
        -->
    </div>
<!-- end col -->
<?= CommentsWidget::widget([
    'post' => $post,
]) ?>
