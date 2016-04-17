<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ImsPurchaseOrder */

$this->title = $model->ims_purchaseId;
$this->params['breadcrumbs'][] = ['label' => 'Ims Purchase Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ims-purchase-order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ims_purchaseId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ims_purchaseId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ims_purchaseId',
            'ims_purchaseDate',
            'ims_orderBy',
            'ims_productId',
            'ims_productQty',
            'ims_productTotalprice',
        ],
    ]) ?>

</div>
