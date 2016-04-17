<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ImsPasswordReference */

$this->title = 'Create Ims Password Reference';
$this->params['breadcrumbs'][] = ['label' => 'Ims Password References', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ims-password-reference-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
