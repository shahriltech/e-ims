<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\db\Query;
use yii\grid\GridView;
?>
<!-- BEGIN PAGE BAR -->

<div class="invoice">
    <div class="row invoice-logo">
        <div class="col-xs-6 invoice-logo-space">
            <img src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/pages/img/karisma_4.png" alt="" ></button>
        </div>
        <div class="col-xs-4 pull-right">
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
        <div class="col-xs-4 invoice-payment pull-right">
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
        <div class="col-xs-4 invoice-block pull-right">
            <ul class="list-unstyled amounts">
                
                <li><strong>Grand Total:</strong> RM
                    <?php
                        $query = (new \yii\db\Query())->from('ims_purchaseOrder')->where(['ims_invoicePurchaseno'=>$model->ims_invoicePurchaseno]);
                        $sum = $query->sum('ims_productTotalprice');
                        echo $sum;
                     ?> </li> 
            </ul>
        </div>
    </div>
</div>