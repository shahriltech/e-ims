<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ImsSupplier */

$this->title = $model->ims_supplierId;
$this->params['breadcrumbs'][] = ['label' => 'Ims Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<span id="supplierView" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>

<div class="ims-supplier-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ims_supplierId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ims_supplierId], [
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
            'ims_supplierId',
            'ims_supplierName',
            'ims_supplierPhone',
            'ims_supplierAddress',
            'ims_supplierEmail:email',
        ],
    ]) ?>

</div>
