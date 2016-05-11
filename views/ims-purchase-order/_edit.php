<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\ImsProduct;
use app\models\ImsSupplier;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\ImsRole */
/* @var $form yii\widgets\ActiveForm */
$product = ArrayHelper::map(ImsProduct::find()->asArray()->where(['ims_supplierId'=>$model->ims_supplierId])->all(), 'ims_productId', 'ims_productName');
$supplier = ArrayHelper::map(ImsSupplier::find()->asArray()->orderBy(['ims_supplierName'=>SORT_ASC])->all(), 'ims_supplierId', 'ims_supplierName');

?>

<div class="ims-purchase-order-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="portlet-body form">
            <div class="form-body">
                <div class="col-md-6">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeDropDownList($model, 'ims_supplierId', $supplier, 
                            [
                                'onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['ims-product/listproduct','id'=>'']).'"+$(this).val(), function( data ) {$( "select#listproduct" ).html( data );});',
                                'prompt'=>'--Please Choose--','id'=>'',
       
                                'class'=>'form-control',
                                'disabled'=>''
                            ]); ?>
                                <label for="form_control_1"><?= Html::activeLabel($model,'ims_supplierId'); ?></label>
                                <span class="help-block"><?= Html::error($model,'ims_supplierId'); ?></span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="portlet-body form">
            <div class="form-body">
                <div class="col-md-6">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeDropDownList($model, 'ims_productId', $product, 
                            [
                                'prompt'=>'','id'=>'listproduct',   
                                'class'=>'form-control']); ?>
                                <label for="form_control_1"><?= Html::activeLabel($model,'ims_productId'); ?> </label>
                                <span class="help-block"><?= Html::error($model,'ims_productId'); ?></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeTextInput($model,'ims_productQty',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_productQty'); ?></label>
                            <span class="help-block"><?= Html::error($model,'ims_productQty'); ?></span>
                    </div>
                </div>           
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancel</button>
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
