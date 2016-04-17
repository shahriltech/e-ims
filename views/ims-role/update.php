<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ImsRole */

$this->title = 'Update Ims Role: ' . $model->kims_roleId;
$this->params['breadcrumbs'][] = ['label' => 'Ims Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kims_roleId, 'url' => ['view', 'id' => $model->kims_roleId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ims-role-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
