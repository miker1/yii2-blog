<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

//$this->title = 'Signup';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="agency">
        <div class="col-md-5 col-sm-12">

        </div>
        <div class="col-md-offset-1 col-md-6 col-sm-12">
            <div class="row">
                <div class="section-title">
                    <span>Sign Up</span>
                </div>
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= Html::submitButton('Signup', ['class' => 'btn pink', 'name' => 'contact-button']) ?>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>