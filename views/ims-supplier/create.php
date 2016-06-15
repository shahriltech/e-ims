<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ImsSupplier */

$this->params['breadcrumbs'][] = ['label' => 'Ims Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <?= Html::a('Home', ['site/index']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <?= Html::a('Manage Suppliers', ['ims-supplier/index']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Add Supplier</span>
        </li>
    </ul>
</div>
<div class='row'>
	<div class="col-md-12">
		<div class="note note-danger">
            <p> NOTE: Items Marked * Is Required.</p>
        </div>
		<div class="portlet light bordered">
			<div class="portlet-title">
	            <div class="caption font-green-haze">
	                <i class="icon-user font-green-haze"></i>
	                <span class="caption-subject bold uppercase">Add Supplier </span>
	            </div>
	            <div class="actions">
	                                <!---->
	                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""></a>
	            </div>
	        </div>
	        <div class="portlet-body form">
	        	<?= $this->render('_form', [
			        'model' => $model,
			    ]) ?>
	        </div>
		</div>
	</div>
</div>
