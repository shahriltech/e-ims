<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ImsCategory */

$this->title = 'Category Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<span id="categoryView" class="<?php echo Yii::$app->controller->id."/".Yii::$app->controller->action->id;?>"></span>
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <?= Html::a('Home', ['site/index']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <?= Html::a('Manage Category', ['ims-category/index']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>View Details</span>
        </li>
    </ul>
</div>
<h3 class="page-title"> Category Management</h3>
<!-- END PAGE BAR -->
<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-briefcase"></i>Category Details
                </div>
                <div class="actions">
                    <?= Html::a('<i class="fa fa-plus"></i>', ['create'], ['class' => 'btn btn-circle btn-icon-only green-meadow','title'=>'Add User']) ?>
                    <?= Html::a('<i class="fa fa-pencil"></i>', ['update', 'id' => $model->ims_categoryId], ['class' => 'btn btn-circle btn-icon-only blue','title'=>'Edit User']) ?>
                </div>
            </div>
            <div class="portlet-body">
                <div class="ims-category-view">

                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'ims_categoryId',
                            'ims_categoryName',
                            'ims_categoryDesc',
                        ],
                    ]) ?>

                </div>
            </div>
        </div>
    </div>
</div>

