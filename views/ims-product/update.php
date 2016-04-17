<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ImsProduct */

$this->title = 'Update Ims Product: ' . $model->ims_productId;
$this->params['breadcrumbs'][] = ['label' => 'Ims Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ims_productId, 'url' => ['view', 'id' => $model->ims_productId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<span id="productUpdate" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>
<div class="ims-product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
