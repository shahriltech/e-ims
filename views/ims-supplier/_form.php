<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ImsSupplier */
/* @var $form yii\widgets\ActiveForm */
?>
<span id="supplyCreate" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>
<?php $form = ActiveForm::begin(); ?>
<?= $form->errorSummary($model,['class'=>'alert alert-danger','header'=>'']); ?>
    <div class="row">
        <div class="portlet-body form">
            <div class="form-body">
                <div class="col-md-12">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeTextInput($model,'ims_supplierName',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_supplierName'); ?> <span class="required">*</span></label>
                            <span class="help-block"><?= Html::error($model,'ims_supplierName'); ?></span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="portlet-body form">
            <div class="form-body">
                <div class="col-md-4">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeTextInput($model,'ims_supplierPhone',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_supplierPhone'); ?> <span class="required">*</span></label>
                            <span class="help-block"><?= Html::error($model,'ims_supplierPhone'); ?></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeTextInput($model,'ims_supplierOfficephone',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_supplierOfficephone'); ?></label>
                            <span class="help-block"><?= Html::error($model,'ims_supplierOfficephone'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="portlet-body form">
            <div class="form-body">
                <div class="col-md-12">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeTextArea($model,'ims_supplierAddress',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_supplierAddress'); ?></label>
                            <span class="help-block"><?= Html::error($model,'ims_supplierAddress'); ?></span>
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
                        <?= Html::activeTextInput($model,'ims_supplierEmail',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_supplierEmail'); ?></label>
                            <span class="help-block"><?= Html::error($model,'ims_supplierEmail'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>