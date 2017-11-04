<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<?php $this->beginContent('@frontend/views/layouts/main.php') ?>

<div class="container">
    <div class="agency">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <?= $content ?>
            </div>
            <div class="col-md-3">
                <div class="sidebar">
                    <div class="widget">
                        <div class="input_2">
                            <input type="text" placeholder="search...">
                            <button type="submit"><i class="icon ion-search"></i></button>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget_title">Cabinet</div>
                        <div class="tab">
                            <!--
                            <nav>
                                <a href="">popular</a>
                                <a href="">latest</a>
                                <div class="bottom-line"></div>
                            </nav>
                            -->


                            <div class="blog_post wow fadeInUp">
                            <a href="<?= Html::encode(Url::to(['/cabinet/profile/edit'])) ?>" class="link montserrat-text uppercase">Profile <i class="icon ion-arrow-right-c"></i></a>
                            </div>
                        </div>
                    </div>








                </div>
            </div>
        </div><!-- end row -->
    </div>
</div>














 <!--
    <aside id="column-right" class="col-sm-3 hidden-xs">
        <div class="list-group">
            <a href="<?//= Html::encode(Url::to(['/auth/auth/login'])) ?>" class="list-group-item">Login</a>
            <a href="<?//= Html::encode(Url::to(['/auth/signup/request'])) ?>" class="list-group-item">Signup</a>
            <a href="<?//= Html::encode(Url::to(['/auth/reset/request'])) ?>" class="list-group-item">Forgotten Password</a>
            <a href="<?//= Html::encode(Url::to(['/cabinet/profile/edit'])) ?>" class="list-group-item">Profile</a>
            <a href="<?//= Html::encode(Url::to(['/cabinet/wishlist/index'])) ?>" class="list-group-item">Wish List</a>
            <a href="<?//= Html::encode(Url::to(['/account/order/index'])) ?>" class="list-group-item">Wish List</a>
            <!-- <a href="/frontend/web/account/order/index" class="list-group-item">Order History</a>
            <a href="/frontend/web/account/newsletter/index" class="list-group-item">Newsletter</a>
        </div>
    </aside> -->
</div>

<?php $this->endContent() ?>
