<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ImsCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>
<span id="indexscategory" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>

<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <?= Html::a('Home', ['site/index']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Manage Category</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title">Category Management</h3>
    <!-- END PAGE TITLE-->
<?php if(Yii::$app->session->hasFlash('addCat')){?>
            <div class="note note-success">
                <button type="button" class="close" data-dismiss="alert"></button>
                 <?php echo  Yii::$app->session->getFlash('addCat'); ?>
            </div>
<?php }?>
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-briefcase"></i>Category Listing
                </div>
                <div class="actions">
                    <?= Html::a('<i class="fa fa-plus"></i><span class="hidden-xs">Add Category </span>', ['create'], ['class' => 'btn btn-success']) ?>
                </div>
            </div>
            <div class="portlet-body">
                <div class="ims-category-index">

                    <h1><?= Html::encode($this->title) ?></h1>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        //'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'ims_categoryName',
                            [
                             'attribute' => 'Category Description',
                             'value' => 'ims_categoryDesc',
                             'contentOptions' => ['style' => 'width:600px;'],
                            ],
                            [
                                'header' => 'Action',
                                'class' => 'yii\grid\ActionColumn',
                                'template'=>'{update} {delete}',
                                    'buttons' => [
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
                        //'contentOptions' => ['style' => 'width:100px;'],
                        'tableOptions' =>['class' => 'table table-hover'],
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>

