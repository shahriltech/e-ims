<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ImsCategory */

$this->title = $model->ims_categoryId;
$this->params['breadcrumbs'][] = ['label' => 'Ims Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<span id="categoryView" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>
<div class="ims-category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ims_categoryId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ims_categoryId], [
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
            'ims_categoryId',
            'ims_categoryName',
            'ims_categoryDesc',
        ],
    ]) ?>

</div>
