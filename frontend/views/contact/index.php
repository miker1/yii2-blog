<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \blog\forms\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

//$this->title = 'Contact';
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <div class="agency">
        <div class="col-md-5 col-sm-12">
            <div class="row">
                <p>
                    13D, Functional apartment, Unique colony, <br/>
                    Agadir 86360 <br/>
                    +212 124-566-780 <br/>
                    +212 124-566-780<br/>
                <div><a href="mailto:email@website.com" class="link">email@website.com</a></div>
                </p>
            </div>
        </div>
        <div class="col-md-offset-1 col-md-6 col-sm-12">
            <div class="row">
                <div class="section-title">
                    <span>Contact Us </span>
                </div>
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'subject') ?>
                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
                <?= Html::submitButton('Submit', ['class' => 'btn pink', 'name' => 'contact-button']) ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
