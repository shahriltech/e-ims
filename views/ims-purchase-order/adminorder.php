<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\ImsProduct;
use app\models\ImsSupplier;
/* @var $this yii\web\View */
/* @var $model app\models\ImsPurchaseOrder */
/* @var $form yii\widgets\ActiveForm */
$product = ArrayHelper::map(ImsProduct::find()->asArray()->where(['ims_supplierId'=>$model->ims_productId])->all(), 'ims_productId', 'ims_productName');
$supplier = ArrayHelper::map(ImsSupplier::find()->asArray()->orderBy(['ims_supplierName'=>SORT_ASC])->all(), 'ims_supplierId', 'ims_supplierName');
?>
<span id="AdminpurchaseCreate" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>

<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <?= Html::a('Home', ['site/index']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <?= Html::a('Manage order', ['ims-purchase-order/neworder']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Purchase Order</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<div class='row'>
    <div class="col-md-12">
        <div class="note note-danger">
            <p> NOTE: Items Marked * Is Required.</p>
        </div>
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <i class="icon-user font-green-haze"></i>
                    <span class="caption-subject bold uppercase">Purchase Product </span>
                </div>
                <div class="actions">
                                    <!---->
                    <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""></a>
                </div>
            </div>
            <div class="portlet-body form">
                <?php if(Yii::$app->session->hasFlash('save')):?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert"></button>
                            <?php echo  Yii::$app->session->getFlash('save'); ?>
                    </div>
                <?php endif; ?>

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
                           
                                                    'class'=>'form-control'
                                                ]); ?>
                                                    <label for="form_control_1"><?= Html::activeLabel($model,'ims_supplierId'); ?></label>
                                                    <span class="help-block"><?= Html::error($model,'ims_supplierId'); ?></span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class = "panel-heading">Item Details</div>
                                <div class="panel-body">
                                    <?= Html::a('<i class="fa fa-plus"></i>Add Item',FALSE, ['id'=>'addmoreorder','class' => 'btn green-meadow']) ?>
                                    <div class="adddivorder">
                                        <div id='itemorder'>
                                            <hr class='horizontal' style='display:none;'>
                                            <div class="row">
                                                <div class="portlet-body form">
                                                    <div class="form-body">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input">
                                                                <?= Html::activeDropDownList($model, 'ims_productId[]', $product, 
                                                                    [
                                                                        'prompt'=>'','id'=>'listproduct',   
                                                                        'class'=>'form-control']); ?>
                                                                        <label for="form_control_1"><?= Html::activeLabel($model,'ims_productId'); ?> </label>
                                                                        <span class="help-block"><?= Html::error($model,'ims_productId'); ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input">
                                                                <?= Html::activeTextInput($model,'ims_productQty[]',['class'=>'form-control']); ?>
                                                                    <label for="form_control_1"><?= Html::activeLabel($model,'ims_productQty'); ?></label>
                                                                    <span class="help-block"><?= Html::error($model,'ims_productQty'); ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1" id="del"  style="display:none;">
                                                            <div class="form-group form-md-line-input">
                                                                <input type="button" id="removeorder" class="btn red-sunglo"  value="Remove">
                                                            </div>
                                                        </div>             
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="form-group">
                            <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Submit Your Order', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                            <?php if (Yii::$app->user->identity->role == 1) { ?>
                                <?= Html::a('Cancel', ['ims-purchase-order/neworder'],['class'=>'btn btn-default']) ?>
                            <?php }else{ ?>
                                <?= Html::a('Cancel', ['ims-product/menubox'],['class'=>'btn btn-default']) ?>
                            <?php } ?>
                        </div>

                        <?php ActiveForm::end(); ?>

                    </div>

            </div>
        </div>
    </div>
</div>

