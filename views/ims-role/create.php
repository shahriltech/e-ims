<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ImsRole */

$this->title = 'Create Ims Role';
$this->params['breadcrumbs'][] = ['label' => 'Ims Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ims-role-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
