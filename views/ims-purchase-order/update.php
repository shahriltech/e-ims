<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ImsPurchaseOrder */

$this->title = 'Update Ims Purchase Order: ' . $model->ims_purchaseId;
$this->params['breadcrumbs'][] = ['label' => 'Ims Purchase Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ims_purchaseId, 'url' => ['view', 'id' => $model->ims_purchaseId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ims-purchase-order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
