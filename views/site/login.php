<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

    <?php $form = ActiveForm::begin([
        'options' => ['class' => 'login-form'],
    ]); ?>
    <?= $form->errorSummary($model,['class'=>'alert alert-danger','header'=>'']); ?>
    <h3 class="form-title font-dark">Sign In</h3>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <?= Html::activeTextInput($model,'username',['class'=>'form-control form-control-solid placeholder-no-fix','placeholder'=>'Nickname']); ?>
    </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <?= Html::activePasswordInput($model,'password',['class'=>'form-control form-control-solid placeholder-no-fix','placeholder'=>'Password']); ?>
    </div>
    <div class="form-actions">
        <?= Html::submitButton('Login', ['class' => 'btn green-meadow btn-block uppercase', 'name' => 'Login']) ?>
                <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
    </div>

    <?php ActiveForm::end(); ?>