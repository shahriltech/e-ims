<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ImsPasswordReferenceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ims Password References';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ims-password-reference-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ims Password Reference', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kims_passrefId',
            'kims_password',
            'kims_userid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
