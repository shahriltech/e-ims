<?php

use yii\helpers\Html;
use yii\grid\GridView;

?>
<!-- BEGIN PAGE BAR -->
<span id="inventoryMenu" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <?= Html::a('Home', ['site/index']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Menu Inventory</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<h3 class="page-title">
    </h3>
<div class='row'>
    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat red">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>Pending Order</span>
                </div>
            </div>
            <?= Html::a('View More<i class="m-icon-swapright m-icon-white"></i>', ['ims-purchase-order/neworder'],['class'=>'more']) ?>
            
        </div>
    </div>
    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue">
            <div class="visual">
                <i class="fa fa-database"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span>History Order</span>
                </div>
            </div>
            <?= Html::a('View More<i class="m-icon-swapright m-icon-white"></i>', ['ims-purchase-order/historyorder'],['class'=>'more']) ?>
        </div>
    </div>
    
</div>