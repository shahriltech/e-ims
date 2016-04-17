<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ImsProduct */

$this->title = $model->ims_productId;
$this->params['breadcrumbs'][] = ['label' => 'Ims Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<span id="productView" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>
<div class="ims-product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ims_productId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ims_productId], [
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
            'ims_productId',
            'ims_productName',
            'ims_productPrice',
            'ims_productDesc',
            'ims_totalProductQty',
            'ims_categoryId',
            'ims_supplierId',
            'ims_barcodeProduct',
        ],
    ]) ?>

</div>
