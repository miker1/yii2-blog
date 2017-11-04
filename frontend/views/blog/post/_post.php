<?php

/* @var $this yii\web\View */
/* @var $model blog\entities\Blog\Post\Post */

use yii\helpers\Html;
use yii\helpers\Url;

$url = Url::to(['post', 'id' =>$model->id]);
?>
<?/**
<div class="blog-posts-item">
    <?php if ($model->photo): ?>
        <div>
            <a href="<?= Html::encode($url) ?>">
                <img src="<?= Html::encode($model->getThumbFileUrl('photo', 'blog_list')) ?>" alt="" class="img-responsive" />
            </a>
        </div>
    <?php endif; ?>
    <div class="h2"><a href="<?= Html::encode($url) ?>"><?= Html::encode($model->title) ?></a></div>
    <p><?= Yii::$app->formatter->asNtext($model->description) ?></p>
</div>
*/?>

<!-- blog post-->

                <div class="blog_post wow fadeInUp">

                    <div class="post_media">
                        <?php if ($model->photo): ?>
                        <img src="<?= Html::encode($model->getThumbFileUrl('photo', 'blog_list')) ?>" alt="post image">
                        <?php endif; ?>
                    </div>
                    <div class="post_info">
                        <div class="post_date montserrat-text uppercase"><?= Yii::$app->formatter->asDatetime($model->created_at); ?></div>
                        <i class="icon ion-chatbox-working"></i>
                        <span>8</span>
                        <i class="icon ion-ios-heart"></i>
                        <span>15</span>
                    </div>
                    <p>
                        <?= Html::encode($model->title) ?>
                    </p>
                    <a href="<?= Html::encode($url) ?>" class="link montserrat-text uppercase">continue reading <i class="icon ion-arrow-right-c"></i></a>
                </div>
                <!-- pagination
                <div class="blog_pagination wow fadeInUp">
                    <a href="" class="page">
                        <i class="icon ion-arrow-left-c prev"></i>
                        <span>previous</span>
                    </a>
                    <span class="divisor">/</span>
                    <a href="" class="page">
                        <span>next</span>
                        <i class="icon ion-arrow-right-c next"></i>
                    </a>
                </div> -->
