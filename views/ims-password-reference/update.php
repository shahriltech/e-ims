<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ImsPasswordReference */

$this->title = 'Update Ims Password Reference: ' . $model->kims_passrefId;
$this->params['breadcrumbs'][] = ['label' => 'Ims Password References', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kims_passrefId, 'url' => ['view', 'id' => $model->kims_passrefId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ims-password-reference-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
