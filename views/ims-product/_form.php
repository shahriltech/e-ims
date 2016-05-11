<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\ImsCategory;
use app\models\ImsSupplier;

$category = ArrayHelper::map(ImsCategory::find()->asArray()->all(), 'ims_categoryId', 'ims_categoryName');
$supplier = ArrayHelper::map(ImsSupplier::find()->asArray()->all(), 'ims_supplierId', 'ims_supplierName');

/* @var $this yii\web\View */
/* @var $model app\models\ImsProduct */
/* @var $form yii\widgets\ActiveForm */
?>
<span id="productCreate" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->errorSummary($model,['class'=>'alert alert-danger','header'=>'']); ?>
    <div class="row">
        <div class="portlet-body form">
            <div class="form-body">
                <div class="col-md-12">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeTextInput($model,'ims_productName',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_productName'); ?> <span class="required">*</span></label>
                            <span class="help-block"><?= Html::error($model,'ims_productName'); ?></span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="portlet-body form">
            <div class="form-body">
                <div class="col-md-6">
                    <div class='form-group form-md-line-input'>
                        <?= Html::activeDropDownList($model, 'ims_categoryId', $category, 
                            [
                                'prompt'=>'--Please Choose--',
                                'class'=>'form-control',

                            ]); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_categoryId'); ?> <span class="required">*</span></label>
                            <span class="help-block"><?= Html::error($model,'ims_categoryId'); ?></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class='form-group form-md-line-input'>
                        <?= Html::activeDropDownList($model, 'ims_supplierId', $supplier, 
                            [
                                'prompt'=>'--Please Choose--',
                                'class'=>'form-control',

                            ]); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_supplierId'); ?> <span class="required">*</span></label>
                            <span class="help-block"><?= Html::error($model,'ims_supplierId'); ?></span>
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
                        <?= Html::activeTextInput($model,'ims_productPrice',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_productPrice'); ?> <span class="required">*</span></label>
                            <span class="help-block"><?= Html::error($model,'ims_productPrice'); ?></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeTextInput($model,'ims_productDesc',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_productDesc'); ?> <span class="required">*</span></label>
                            <span class="help-block"><?= Html::error($model,'ims_productDesc'); ?></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-md-line-input">
                        <?= Html::activeTextInput($model,'ims_totalProductQty',['class'=>'form-control']); ?>
                            <label for="form_control_1"><?= Html::activeLabel($model,'ims_totalProductQty'); ?> <span class="required">*</span></label>
                            <span class="help-block"><?= Html::error($model,'ims_totalProductQty'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn green-meadow' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
