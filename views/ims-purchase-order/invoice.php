<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\db\Query;
use yii\grid\GridView;
?>
<!-- BEGIN PAGE BAR -->
<span id="invoice" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>

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
            <?= Html::a('Purchase Order', ['ims-purchase-order/create']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Invoice Order</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<div class="invoice">
    <div class="row invoice-logo">
        <div class="col-xs-6 invoice-logo-space">
            <img src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/pages/img/karisma_4.png" alt="" ></button>
        </div>
        <div class="col-xs-6">
            <p> #<?php echo $model->ims_invoicePurchaseno ?> / <?php  echo $model->ims_purchaseDate ?>
        
            </p>
        </div>
    </div>
    <hr style="border: 0;border-top: 1px solid grey;border-bottom: 0;">
    <div class="row">
        <div class="col-xs-4">
            <h3>Supplier/Vendor:</h3>
            <div class="well">
                <address>
                    <strong><?php echo $model2->ims_supplierName; ?></strong><br>
                    <?php echo $model2->ims_supplierAddress; ?>
                </address>
            </div>
            
        </div>
        <div class="col-xs-4">
            
        </div>
        <div class="col-xs-4 invoice-payment">
            <h3>Payment Details:</h3>
            <address>
                <strong>Date Invoice:</strong> <?php  echo $model->ims_purchaseDate?> <br>
                <strong>Account Name:</strong><?php echo $model2->ims_supplierName; ?> <br>
                <strong>Invoice Number:</strong> <?php  echo $model->ims_invoicePurchaseno ?><br>
            </address>
            <ul class="list-unstyled">
                
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
        <?php if($model->ims_statusOrder == 'Approved'){ ?>
            <?=  GridView::widget([
                        'dataProvider' => $model3,
                        'summary'=>'',
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            
                            [
                             'attribute' => 'Item',
                             'value' => 'productname.ims_productName'
                            ],
                            [
                             'attribute' => 'Description',
                             'value' => 'productname.ims_productDesc'
                            ],
                            [
                             'attribute' => 'Quantity',
                             'value' => 'ims_productQty'
                            ],
                            [
                             'attribute' => 'Unit Price(RM)',
                             'value' => 'productname.ims_productPrice'
                            ],
                            [
                             'attribute' => 'Total(RM)',
                             'value' => 'ims_productTotalprice'
                            ],
                        ],
                        'tableOptions' =>['class' => 'table table-striped table-hover'],

                    ]); ?>
        <?php }elseif ($model->ims_statusOrder == 'Pending') {?>
            <?=  GridView::widget([
                        'dataProvider' => $model3,
                        'summary'=>'',
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            
                            [
                             'attribute' => 'Item',
                             'value' => 'productname.ims_productName'
                            ],
                            [
                             'attribute' => 'Description',
                             'value' => 'productname.ims_productDesc'
                            ],
                            [
                             'attribute' => 'Quantity',
                             'value' => 'ims_productQty'
                            ],
                            [
                             'attribute' => 'Unit Price(RM)',
                             'value' => 'productname.ims_productPrice'
                            ],
                            [
                             'attribute' => 'Total(RM)',
                             'value' => 'ims_productTotalprice'
                            ],

                            [
                                'header' => 'Action',
                                'headerOptions' => ['class'=>'hidden-xs'],
                                'class' => 'yii\grid\ActionColumn',
                                'contentOptions' =>['class' => 'hidden-xs'],
                                'template'=>'{edit}   {delete}',
                                    'buttons' => [
                                        'edit' => function ($url, $model3) {
                                            return Html::a('<i class="fa fa-edit"></i>', 
                                                    $url,['value'=>Url::to(['ims-purchase-order/update','id'=>$model3->ims_purchaseId]),'title'=> Yii::t('app','Edit'),'class'=>'btn btn-circle btn-icon-only purple modalInvoiceedititem']);

                                        },
                                        'delete' => function ($url, $model3) {
                                            return Html::a('<i class="fa fa-times"></i>', 
                                                    $url,['value'=>Url::to(['ims-purchase-order/confirmdelete','id'=>$model3->ims_purchaseId]),'title'=> Yii::t('app','delete'),'class'=>'btn btn-circle btn-icon-only red modalInvoicedeleteitem']);
                                            
                                        },

                                    ],
                                    'urlCreator' => function ($action, $model_answer, $key, $index) {
                                        if ($action === 'edit') {
                                            $url = FALSE;
                                            return $url;
                                        }
                                        if ($action === 'delete') {
                                            $url = FALSE;
                                            return $url;
                                        }

                                    }
                                ],
                        ],
                        'tableOptions' =>['class' => 'table table-striped table-hover'],

                    ]); ?>
        <?php }else{?> 
            <?=  GridView::widget([
                        'dataProvider' => $model3,
                        'summary'=>'',
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            
                            [
                             'attribute' => 'Item',
                             'value' => 'productname.ims_productName'
                            ],
                            [
                             'attribute' => 'Description',
                             'value' => 'productname.ims_productDesc'
                            ],
                            [
                             'attribute' => 'Quantity',
                             'value' => 'ims_productQty'
                            ],
                            [
                             'attribute' => 'Unit Price(RM)',
                             'value' => 'productname.ims_productPrice'
                            ],
                            [
                             'attribute' => 'Total(RM)',
                             'value' => 'ims_productTotalprice'
                            ],

                            [
                                'header' => 'Action',
                                'headerOptions' => ['class'=>'hidden-xs'],
                                'class' => 'yii\grid\ActionColumn',
                                'contentOptions' =>['class' => 'hidden-xs'],
                                'template'=>'{edit}   {delete}',
                                    'buttons' => [
                                        'edit' => function ($url, $model3) {
                                            return Html::a('<i class="fa fa-edit"></i>', 
                                                    $url,['value'=>Url::to(['ims-purchase-order/update','id'=>$model3->ims_purchaseId]),'title'=> Yii::t('app','Edit'),'class'=>'btn btn-circle btn-icon-only purple modalInvoiceedititem']);

                                        },
                                        'delete' => function ($url, $model3) {
                                            return Html::a('<i class="fa fa-times"></i>', 
                                                    $url,['value'=>Url::to(['ims-purchase-order/confirmdelete','id'=>$model3->ims_purchaseId]),'title'=> Yii::t('app','delete'),'class'=>'btn btn-circle btn-icon-only red modalInvoicedeleteitem']);
                                            
                                        },

                                    ],
                                    'urlCreator' => function ($action, $model_answer, $key, $index) {
                                        if ($action === 'edit') {
                                            $url = FALSE;
                                            return $url;
                                        }
                                        if ($action === 'delete') {
                                            $url = FALSE;
                                            return $url;
                                        }

                                    }
                                ],
                        ],
                        'tableOptions' =>['class' => 'table table-striped table-hover'],

            ]); ?>
        <?php }?>         
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4">
            <div class="well">
                <address>
                    <strong>Karisma Enterprise.</strong>
                    <br> No 12, Parit Mentara 3
                    <br> 34300 Tanjung Malim, Perak. 
                    <br>
                    <abbr title="Phone">P:</abbr> (234) 145-1810 
                </address>
                <address>
                    <strong>Mohd Daus</strong>
                    <br>
                    <a href="mailto:#"> first.last@email.com </a>
                </address>
             </div>
        </div>
        <div class="col-xs-8 invoice-block">
            <ul class="list-unstyled amounts">
                
                <li><strong>Grand Total:</strong> RM
                    <?php
                        $query = (new \yii\db\Query())->from('ims_purchaseOrder')->where(['ims_invoicePurchaseno'=>$model->ims_invoicePurchaseno]);
                        $sum = $query->sum('ims_productTotalprice');
                        echo $sum;
                     ?> </li> 
            </ul>
            <br>

            
<?php if($model->ims_statusOrder == "") {?>
            <?= Html::a('Save Your Invoice<i class="fa fa-check"></i>', ['ims-purchase-order/saveinvoice','id'=>$model->ims_invoicePurchaseno], ['class' => 'btn btn-lg green-meadow hidden-print margin-bottom-5']) ?>
            <?= Html::a('Cancel<i class="fa fa-times"></i>', ['ims-purchase-order/cancelorder','id'=>$model->ims_invoicePurchaseno], ['class' => 'btn btn-lg red hidden-print margin-bottom-5']) ?>
            <a class="btn btn-lg blue hidden-print margin-bottom-5" onclick="javascript:window.print();"> Print
                <i class="fa fa-print"></i>
            </a>
<?php }else{ ?>
           <?= Html::a('<i class="fa fa-hand-o-left"></i>Back', ['ims-purchase-order/index'], ['class' => 'btn btn-lg green-meadow hidden-print margin-bottom-5']) ?>
           <a class="btn btn-lg blue hidden-print margin-bottom-5" onclick="javascript:window.print();"> Print
                <i class="fa fa-print"></i>
            </a>
<?php }?>          
        </div>
    </div>
</div>