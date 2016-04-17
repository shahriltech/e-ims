<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ImsPurchaseOrder */

$this->title = 'Create Ims Purchase Order';
$this->params['breadcrumbs'][] = ['label' => 'Ims Purchase Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ims-purchase-order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
