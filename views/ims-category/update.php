<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ImsCategory */


$this->params['breadcrumbs'][] = ['label' => 'Ims Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ims_categoryId, 'url' => ['view', 'id' => $model->ims_categoryId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<span id="categoryUpdate" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <?= Html::a('Home', ['ims-category/index']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Update Category</span>
        </li>
    </ul>
</div>
<div class='row'>
	<div class="col-md-12">
		<div class="note note-danger">
            <p> NOTE: Items Marked * Is Required.</p>
        </div>
		<div class="portlet light">
			<div class="portlet-title">
	            <div class="caption font-green-haze">
	                <i class="icon-briefcase font-green-haze"></i>
	                <span class="caption-subject bold uppercase">Update Category </span>
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
