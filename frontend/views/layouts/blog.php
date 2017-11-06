<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\widgets\Blog\CategoriesWidget;

?>
<?php $this->beginContent('@frontend/views/layouts/main.php') ?>


    <div class="container">
        <div class="agency">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <?= $content ?>

            </div><!-- end col -->

            <div class="col-md-3">
                <div class="sidebar">
                    <div class="widget">
                        <div class="input_2">
                            <input type="text" placeholder="in development...">
                            <button type="submit"><i class="icon ion-search"></i></button>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget_title">posts</div>
                        <div class="tab">
                            <nav>
                                <a href="">latest</a>
                                <a href="">popular</a>
                                <div class="bottom-line"></div>
                            </nav>
                            <div class="tab_single shown">

                                <?= \frontend\widgets\Blog\LastPostsWidget::widget([
                                    'limit' => 3,
                                ]) ?>

                            </div>
                            <div class="tab_single">

                                <?= \frontend\widgets\Blog\PopularPostsWidget::widget([
                                    'limit' => 3,
                                ]) ?>

                            </div>
                        </div>
                    </div>

                    <div class="widget wow fadeInUp">
                        <div class="widget_title">categories</div>
                        <ul class="list_2">
                            <?= \frontend\widgets\Blog\PostsCountByCategoryWidget::widget([
                                'limit' => 10,
                            ]) ?>

                        </ul>
                    </div>

                    <div class="widget wow fadeInUp">
                        <div class="widget_title">tags cloud</div>
                        <ul class="tags">
                            <?= \frontend\widgets\Blog\CloudTagsWidget::widget([
                                'limit' => 10,
                            ]) ?>

                        </ul>
                    </div>

                    <div class="widget wow fadeInUp">
                        <div class="widget_title">archives</div>
                        <ul class="list_2">
                            <li><a href="">in development	<span>15</span></a></li>
                            <li><a href="">in development	<span>22</span></a></li>
                            <li><a href="">in development	<span>27</span></a></li>
                            <li><a href="">in development	<span>30</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
            </div>
    </div><!-- end container -->


<?php $this->endContent() ?>
