<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ImsReceiveProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ims-receive-product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ims_productId') ?>

    <?= $form->field($model, 'ims_receiveDate') ?>

    <?= $form->field($model, 'ims_invoiceNo') ?>

    <?= $form->field($model, 'ims_qtyRec') ?>

    <?php // echo $form->field($model, 'ims_totalPrice') ?>

    <?php // echo $form->field($model, 'ims_productDesc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
