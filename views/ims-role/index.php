<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ImsRoleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ims Roles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ims-role-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ims Role', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kims_roleId',
            'kims_roleName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
