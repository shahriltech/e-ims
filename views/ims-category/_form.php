<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ImsCategory */
/* @var $form yii\widgets\ActiveForm */
?>
<span id="categoryCreate" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>

<?php $form = ActiveForm::begin(); ?>
	<?= $form->errorSummary($model,['class'=>'alert alert-danger','header'=>'']); ?>
	<div class="row">
        <div class="portlet-body form">
            <div class="form-body">
                <div class="col-md-12">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeTextInput($model,'ims_categoryName',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_categoryName'); ?> <span class="required">*</span></label>
                            <span class="help-block"><?= Html::error($model,'ims_categoryName'); ?></span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='portlet-body form'>
            <div class='form-body'>
                <div class='col-md-12'>
                    <div class='form-group form-md-line-input'>
                        <?= Html::activeTextArea($model,'ims_categoryDesc',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_categoryDesc'); ?></label>
                            <span class="help-block"><?= Html::error($model,'ims_categoryDesc'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

