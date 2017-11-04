<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \blog\forms\auth\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

//$this->title = 'Login';
//$this->params['breadcrumbs'][] = $this->title;
?>


            <!--<h2>Social Login</h2>-->
            <?//= yii\authclient\widgets\AuthChoice::widget([
            //    'baseAuthUrl' => ['auth/network/auth']
            //]); ?>

<div class="container">
    <div class="agency">
        <div class="col-md-5 col-sm-12">

        </div>
        <div class="col-md-offset-1 col-md-6 col-sm-12">
            <div class="row">
                <div class="section-title">
                    <span>LogIn</span>
                </div>
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput() ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['auth/reset/request']) ?>.
                </div>

                <div>
                    <?= Html::submitButton('Login', ['class' => 'btn pink', 'name' => 'login-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>