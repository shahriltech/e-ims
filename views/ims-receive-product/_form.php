<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\ImsProduct;
//use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\ImsReceiveProduct */
/* @var $form yii\widgets\ActiveForm */
$list = ArrayHelper::map(ImsProduct::find()->asArray()->all(), 'ims_productId', 'ims_productName');

?>
<span id="receiveCreate" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>
<div class="ims-receive-product-form">
 <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="portlet-body form">
            <div class="form-body">
                <div class="col-md-6">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeTextInput($model,'ims_invoiceNo',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_invoiceNo'); ?></label>
                            <span class="help-block"><?= Html::error($model,'ims_invoiceNo'); ?></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeTextInput($model,'ims_dateInvoice',['class'=>'form-control date-picker','data-date-format'=>'dd/mm/yyyy']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_dateInvoice'); ?></label>
                            <span class="help-block"><?= Html::error($model,'ims_dateInvoice'); ?></span>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class = "panel-heading">Item Details</div>
            <div class="panel-body">
                <?= Html::a('<i class="fa fa-plus"></i>Add Item',FALSE, ['id'=>'addmorewife','class' => 'btn green-meadow']) ?>
                <div class="adddivwife">
                    <div id='wife'>
                        <hr class='horizontal' style='display:none;'>
                        <div class="row">
                            <div class="portlet-body form">
                                <div class="form-body">
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <?= Html::activeDropDownList($model, 'ims_productId[]', $list, 
                                                [
                                                    'prompt'=>'--Please Choose--',
                                                    'class'=>'form-control',

                                                ]); ?>
                                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_productId'); ?></label>
                                            <span class="help-block"><?= Html::error($model,'ims_productId'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <?= Html::activeTextInput($model,'ims_qtyRec[]',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'ims_qtyRec'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'ims_qtyRec'); ?></span>
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
                                            <?= Html::activeTextInput($model,'ims_productDesc[]',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'ims_productDesc'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'ims_productDesc'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-md-line-input">
                                            <?= Html::activeTextInput($model,'ims_totalPrice[]',['class'=>'form-control']); ?>
                                                <label for="form_control_1"><?= Html::activeLabel($model,'ims_totalPrice'); ?></label>
                                                <span class="help-block"><?= Html::error($model,'ims_totalPrice'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-1" id="del"  style="display:none;">
                                        <div class="form-group form-md-line-input">
                                            <input type="button" id="remove" class="btn red-sunglo"  value="Remove">
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
        <?= Html::submitButton($model->isNewRecord ? 'Save' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
