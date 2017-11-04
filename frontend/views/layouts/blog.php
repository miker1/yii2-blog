<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\widgets\Blog\CategoriesWidget;

?>
<?php $this->beginContent('@frontend/views/layouts/main.php') ?>
<? /**
<div class="row">
    <div id="content" class="col-sm-9">
        <?= $content ?>
    </div>
    <aside id="column-left" class="col-sm-3 hidden-xs">
        <?= CategoriesWidget::widget([
            'active' => $this->params['active_category'] ?? null
        ]) ?>
    </aside>
</div>
*/
?>


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
                            <input type="text" placeholder="search...">
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
                            <li><a href="">css</a></li>
                            <li><a href="">html</a></li>
                            <li><a href="">javascript</a></li>
                            <li><a href="">jquery</a></li>
                            <li><a href="">bootstrap</a></li>
                            <li><a href="">web development</a></li>
                            <li><a href="">ui &amp; ux</a></li>
                        </ul>
                    </div>

                    <div class="widget wow fadeInUp">
                        <div class="widget_title">instagram</div>
                        <div class="thumb" style="margin-bottom:15px">
                            <a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>
                        </div>
                        <div class="thumb" style="margin-bottom:15px">
                            <a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>
                        </div>
                        <div class="thumb" style="margin-bottom:15px">
                            <a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>
                        </div>
                        <div class="thumb" style="margin-bottom:15px">
                            <a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>
                        </div>
                        <div class="thumb" style="margin-bottom:15px">
                            <a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>
                        </div>
                        <div class="thumb" style="margin-bottom:15px">
                            <a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>
                        </div>
                        <div class="thumb" style="margin-bottom:15px">
                            <a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>
                        </div>
                        <div class="thumb" style="margin-bottom:15px">
                            <a href=""><img src="assets/img/thumb.jpg" alt="thumb"></a>
                        </div>
                    </div>

                    <div class="widget wow fadeInUp">
                        <div class="widget_title">archives</div>
                        <ul class="list_2">
                            <li><a href="">Jan-Feb 2015	<span>15</span></a></li>
                            <li><a href="">Feb-Mar 2015	<span>22</span></a></li>
                            <li><a href="">Mar-Apr 2015	<span>27</span></a></li>
                            <li><a href="">Apr-May 2015	<span>30</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
            </div>
    </div><!-- end container -->


<?php $this->endContent() ?>
