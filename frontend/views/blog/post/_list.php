<?php

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\DataProviderInterface */

?>

<?=\yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'layout' => "{items}\n{pager}",
    'itemView' => '_post',
    'pager' => [
            /** Customzing options for pager container tag
        'options' => [
            'tag' => 'div',
            'class' => 'pager-wrapper',
            'id' => 'pager-container',
        ],*/

            // Customzing CSS class for pager link
        //'linkOptions' => ['class' => 'mylink'],
        'activePageCssClass' => 'myactive',
        //'disabledPageCssClass' => 'mydisable',

            /** Customzing CSS class for navigating link
        'prevPageCssClass' => 'mypre',
        'nextPageCssClass' => 'mynext',
        'firstPageCssClass' => 'myfirst',
        'lastPageCssClass' => 'mylast',
        */
    ],
])
?>

