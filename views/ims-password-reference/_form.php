<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ImsPasswordReference */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ims-password-reference-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kims_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kims_userid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
