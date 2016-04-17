<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ImsPurchaseOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ims-purchase-order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ims_purchaseDate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ims_orderBy')->textInput() ?>

    <?= $form->field($model, 'ims_productId')->textInput() ?>

    <?= $form->field($model, 'ims_productQty')->textInput() ?>

    <?= $form->field($model, 'ims_productTotalprice')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
