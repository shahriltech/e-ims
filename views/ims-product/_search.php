<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ImsProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ims-product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ims_productId') ?>

    <?= $form->field($model, 'ims_productName') ?>

    <?= $form->field($model, 'ims_productPrice') ?>

    <?= $form->field($model, 'ims_productDesc') ?>

    <?= $form->field($model, 'ims_totalProductQty') ?>

    <?php // echo $form->field($model, 'ims_categoryId') ?>

    <?php // echo $form->field($model, 'ims_supplierId') ?>

    <?php // echo $form->field($model, 'ims_barcodeProduct') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
