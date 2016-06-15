<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ImsUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>
<span id="neworder" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>

<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <?= Html::a('Home', ['site/index']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Manage order</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> Order Listing
    </h3>
<?php if(Yii::$app->session->hasFlash('addUser')):?>
            <div class="note note-success">
                <button type="button" class="close" data-dismiss="alert"></button>
                 <?php echo  Yii::$app->session->getFlash('addUser'); ?>
            </div>
<?php endif; ?>
<?php if(Yii::$app->session->hasFlash('submitted')):?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"></button>
                 <?php echo  Yii::$app->session->getFlash('submitted'); ?>
            </div>
<?php endif; ?>
    <!-- END PAGE TITLE-->
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-list-ul"></i>Pending Order
                </div>
                <div class="actions">
                    <?php if(Yii::$app->user->identity->role == 1){ ?>
                        <?= Html::a('<i class="fa fa-plus"></i><span class="hidden-xs">Add Order </span>', ['adminorder'], ['class' => 'btn btn-success']) ?>
                    <?php }else{?>?
                    <?= Html::a('<i class="fa fa-plus"></i><span class="hidden-xs">Add Order </span>', ['create'], ['class' => 'btn btn-success']) ?>
                    <?php }?>
                </div>
            </div>
            <div class="portlet-body">
                
                <div class='pull-right'>
                    <a href="javascript:;" class="btn btn-circle btn-icon-only green-meadow">
                        <i class="fa fa-check"></i>
                    </a>Approve
                    <a href="javascript:;" class="btn btn-circle btn-icon-only red">
                        <i class="fa fa-times"></i>
                    </a>Cancel Order
                    
                </div>
                <br>
                <div class="ims-user-index">

                    <h1><?= Html::encode($this->title) ?></h1>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                <?php Pjax::begin(); ?>    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        //'filterModel' => $searchModel,
                        'summary'=>'',
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            [
                                'attribute' => 'Purchase Date',
                                'value' => 'ims_purchaseDate'
                            ],
                            [
                                'attribute' => 'Invoice Number',
                                'value' => 'ims_invoicePurchaseno'
                            ],
                            [
                                'attribute' => 'Status Order',
                                'value' => 'ims_statusOrder'
                            ],
                            [
                                'header' => 'Action',
                                'class' => 'yii\grid\ActionColumn',
                                'template'=>'{invoice_1} {proceed} {cancelorder}',
                                    'buttons' => [
                                        'invoice_1' => function ($url, $model) {
                                        return Html::a('<i class="fa fa-check"></i>', 
                                            $url,['title'=> Yii::t('app','View'),'class'=>'btn btn-circle btn-icon-only green-meadow']);

                                        },
                                        'cancelorder' => function ($url, $model3) {
                                            return Html::a('<i class="fa fa-times"></i>', 
                                                $url,['title'=> Yii::t('app','Delete'),'class'=>'btn btn-circle btn-icon-only red','data-confirm'=>"Are You Sure ?",'data-method' => 'post']);
                                        },

                                    ],
                                    /*'urlCreator' => function ($action, $model_answer, $key, $index) {
                                        if ($action === 'view') {
                                            $url = TRUE;
                                            return $url;
                                        }
                                        if ($action === 'delete') {
                                            $url = FALSE;
                                            return $url;
                                        }

                                    }*/
                            ],
                            //['class' => 'yii\grid\ActionColumn'],
                        ],

                        'tableOptions' =>['class' => 'table table-hover'],
                    ]); ?>
                <?php Pjax::end(); ?></div>
            </div>
        </div>
    </div>
</div>

