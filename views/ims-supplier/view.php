<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ImsSupplier */

$this->title = 'Supplier Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<span id="supplierView" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <?= Html::a('Home', ['site/index']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <?= Html::a('Manage Supplier', ['ims-supplier/index']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Supplier Details</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> Supplier Management</h3>
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-users"></i>Supplier Details
                </div>
                <div class="actions">
                    <?= Html::a('<i class="fa fa-plus"></i>', ['create'], ['class' => 'btn btn-circle btn-icon-only green-meadow','title'=>'Add User']) ?>
                    <?= Html::a('<i class="fa fa-pencil"></i>', ['update', 'id' => $model->ims_supplierId], ['class' => 'btn btn-circle btn-icon-only blue','title'=>'Edit User']) ?>
                </div>
            </div>
            <div class="portlet-body">
                <div class="ims-supplier-view">

                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'ims_supplierName',
                            'ims_supplierPhone',
                            'ims_supplierAddress',
                            'ims_supplierEmail:email',
                        ],
                    ]) ?>

                </div>

            </div>
        </div>
    </div>
</div>
