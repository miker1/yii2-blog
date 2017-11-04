<?php

/* @var $this yii\web\View */
/* @var $model blog\forms\manage\User\UserEditForm */
/* @var $user blog\entities\User */

use kartik\form\ActiveForm;
use yii\helpers\Html;

$this->title = 'Edit Profile';
$this->params['breadcrumbs'][] = ['label' => 'Cabinet', 'url' => ['cabinet/default/index']];
$this->params['breadcrumbs'][] = 'Profile';
?>
<div class="user-update">

    <div class="row">
        <div class="col-sm-6">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'email')->textInput(['maxLength' => true]) ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn pink']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
