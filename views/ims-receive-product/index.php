<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
?>
<span id="indexReceiveorder" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <?= Html::a('Home', ['site/index']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <?= Html::a('Menu Inventory', ['ims-product/menubox']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>List Received Product</span>
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
                    <i class="fa fa-users"></i>Received Product
                </div>
                <div class="actions">
                   <?= Html::a('<i class="fa fa-plus"></i><span class="hidden-xs">Add More </span>', ['create'], ['class' => 'btn btn-success']) ?>
                </div>
            </div>
            <div class="portlet-body">
                <div class="ims-receive-product-index">

                    <h1><?= Html::encode($this->title) ?></h1>
                    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>
                        <?php Pjax::begin(); ?>    <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            //'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                'ims_productId',
                                //'ims_receiveDate',
                                'ims_invoiceNo',
                                'ims_qtyRec',
                                // 'ims_totalPrice',
                                // 'ims_productDesc',

                                ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>
                        <?php Pjax::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
