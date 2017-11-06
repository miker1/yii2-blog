<?php

/* @var $this yii\web\View */
/* @var $model blog\entities\Blog\Post\Post */

use yii\helpers\Html;
use yii\helpers\Url;

$url = Url::to(['post', 'id' =>$model->id]);
?>


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
                        <span><?= Html::encode($model->comments_count) ?></span>
                        <i class="icon ion-ios-heart"></i>
                        <span>nothing</span>
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
