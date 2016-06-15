<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ImsProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>

<!-- BEGIN PAGE BAR -->
<span id="historyorderlist" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <?= Html::a('Home', ['site/index']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>History Order</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
    <h3 class="page-title">
    </h3>
    <!-- END PAGE TITLE-->
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-history"></i>History Order
                </div>
            </div>
            <div class="portlet-body">
                <div class="ims-product-index">

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
                                'header' => 'Action',
                                'class' => 'yii\grid\ActionColumn',
                                'template'=>'{history_invoice}',
                                'buttons' => [
                                    'history_invoice' => function ($url, $model) {
                                        return Html::a('<i class="fa fa-hand-o-right"></i>', 
                                            $url,['title'=> Yii::t('app','View Invoice'),'class'=>'btn btn-circle btn-icon-only green-meadow']);

                                    },
                                ],
                                'urlCreator' => function ($action, $model, $key, $index) {
                                        if ($action === 'history_invoice') {
                                            $url = ['ims-purchase-order/history_invoice','id'=>$model->ims_invoicePurchaseno];
                                                return $url;
                                        }

                                    }
                            ],
                           // 'ims_productId',
                            //'ims_productQty',
                            // 'ims_productTotalprice',
                        ],
                        'tableOptions' =>['class' => 'table table-striped table-hover'],
                    ]); ?>
                <?php Pjax::end(); ?>
                </div>

            </div>
        </div>
    </div>
</div>
