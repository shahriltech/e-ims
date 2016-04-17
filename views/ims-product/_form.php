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

<div class="ims-product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=$form->field($model, 'ims_categoryId')->dropDownList( $category, ['prompt'=>'--Please Choose Category--','class'=>'form-control',]); ?>
    
    <?=$form->field($model, 'ims_supplierId')->dropDownList( $supplier, ['prompt'=>'--Please Choose Supplier--','class'=>'form-control',]); ?>

    <?= $form->field($model, 'ims_productName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ims_productPrice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ims_productDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ims_totalProductQty')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
