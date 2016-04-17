<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ImsUser */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ims Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<span id="userView" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>

<div class="ims-user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'ims_fname',
            'ims_address',
            'ims_phone',
            'role',
            'ims_nickname',
            'password_hash',
            'auth_key',
            'status',
            'email:email',
        ],
    ]) ?>

</div>
