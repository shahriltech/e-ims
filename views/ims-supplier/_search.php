<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ImsSupplierSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ims-supplier-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ims_supplierId') ?>

    <?= $form->field($model, 'ims_supplierName') ?>

    <?= $form->field($model, 'ims_supplierPhone') ?>

    <?= $form->field($model, 'ims_supplierAddress') ?>

    <?= $form->field($model, 'ims_supplierEmail') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
