<?php

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\DataProviderInterface */
/* @var $tag blog\entities\Blog\Tag */

use yii\helpers\Html;

$this->title = 'Posts with tag ' . $tag->name;

$this->params['breadcrumbs'][] = ['label' => 'Blog', 'url' => ['index']];
$this->params['breadcrumbs'][] = $tag->name;
?>

<?= $this->render('_list', [
    'dataProvider' => $dataProvider
]) ?>


