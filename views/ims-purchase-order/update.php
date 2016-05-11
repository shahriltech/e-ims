<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ImsPurchaseOrder */

?>
<div class="ims-purchase-order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_edit', [
        'model' => $model,
    ]) ?>

</div>
