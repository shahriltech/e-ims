<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper; 
use app\models\ImsRole;
/* @var $this yii\web\View */
/* @var $model app\models\ImsUser */
/* @var $form yii\widgets\ActiveForm */
$role = ArrayHelper::map(ImsRole::find()->asArray()->all(),'ims_roleId','ims_roleName'); //retrieve data from table look_up_pendapatan

?>
<span id="userCreate" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>
<!-- BEGIN PAGE BAR -->

<?php $form = ActiveForm::begin(); ?>
<?= $form->errorSummary($model,['class'=>'alert alert-danger','header'=>'']); ?>
    <div class="row">
        <div class="portlet-body form">
            <div class="form-body">
                <div class="col-md-12">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeTextInput($model,'ims_fname',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_fname'); ?> <span class="required">*</span></label>
                            <span class="help-block"><?= Html::error($model,'ims_fname'); ?></span>
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
                        <?= Html::activeTextArea($model,'ims_address',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_address'); ?></label>
                            <span class="help-block"><?= Html::error($model,'ims_address'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='portlet-body form'>
            <div class='form-body'>
                <div class='col-md-6'>
                    <div class='form-group form-md-line-input'>
                        <?= Html::activeTextInput($model,'email',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'email'); ?></label>
                            <span class="help-block"><?= Html::error($model,'email'); ?></span>
                    </div>
                </div>
                <div class='col-md-6'>
                    <div class='form-group form-md-line-input'>
                        <?= Html::activeTextInput($model,'ims_phone',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_phone'); ?></label>
                            <span class="help-block"><?= Html::error($model,'ims_phone'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='portlet-body form'>
            <div class='form-body'>
                <div class='col-md-4'>
                    <div class='form-group form-md-line-input'>
                        <?= Html::activeDropDownList($model, 'role', $role, 
                            [
                                'prompt'=>'--Please Choose--',
                                'class'=>'form-control',

                            ]); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'role'); ?> <span class="required">*</span></label>
                            <span class="help-block"><?= Html::error($model,'role'); ?></span>
                    </div>
                </div>
                <div class='col-md-4'>
                    <div class='form-group form-md-line-input'>
                        <?= Html::activePasswordInput($model,'password_hash',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'password_hash'); ?> <span class="required">*</span></label>
                            <span class="help-block"><?= Html::error($model,'password_hash'); ?></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeTextInput($model,'ims_nickname',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_nickname'); ?> <span class="required">*</span></label>
                            <span class="help-block"><?= Html::error($model,'ims_nickname'); ?></span>
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