<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ImsProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>
<span id="indexsproduct" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>

<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <?= Html::a('Home', ['site/index']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Manage Product</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> Product
    </h3>
    <!-- END PAGE TITLE-->
<?php if(Yii::$app->session->hasFlash('addProduct')):?>
            <div class="note note-success">
                <button type="button" class="close" data-dismiss="alert"></button>
                 <?php echo  Yii::$app->session->getFlash('addProduct'); ?>
            </div>
<?php endif; ?>
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-database"></i>Product Listing
                </div>
                <div class="actions">
                    <?= Html::a('<i class="fa fa-plus"></i><span class="hidden-xs">Add Product </span>', ['create'], ['class' => 'btn btn-success']) ?>
                </div>
            </div>
            <div class="portlet-body">
                <div class="ims-product-index">

                    <h1><?= Html::encode($this->title) ?></h1>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        //'filterModel' => $searchModel,
                        
                        'pager' => [
                                'firstPageLabel' => 'First',
                                'lastPageLabel' => 'Last',
                            ],
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'ims_productName',
                            'ims_productPrice',
                            'category.ims_categoryName',
                            //'ims_totalProductQty',
                            [
                                'attribute' => 'Total Quantity',
                                'value' => 'ims_totalProductQty'
                            ],
                            [
                                'header' => 'Action',
                                'class' => 'yii\grid\ActionColumn',
                                'template'=>'{view} {update} {delete}',
                                    'buttons' => [
                                        'view' => function ($url, $model) {
                                        return Html::a('<i class="glyphicon glyphicon-eye-open"></i>', 
                                            $url,['title'=> Yii::t('app','View'),'class'=>'btn btn-circle btn-icon-only default']);

                                        },
                                        'update' => function ($url) {
                                            return Html::a('<i class="glyphicon glyphicon-pencil"></i>', 
                                                $url,['title'=> Yii::t('app','Update'),'class'=>'btn btn-circle btn-icon-only blue']);
                                        },
                                        'delete' => function ($url) {
                                            return Html::a('<i class="glyphicon glyphicon-trash"></i>', 
                                                $url,['title'=> Yii::t('app','Delete'),'class'=>'btn btn-circle btn-icon-only red','data-confirm'=>"Are You Sure ?",'data-method' => 'post']);
                                        },

                                    ],
                            ],
                        ],
                        'tableOptions' =>['class' => 'table table-hover'],
                    ]); ?>
                </div>

            </div>
        </div>
    </div>
</div>
