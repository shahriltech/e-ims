<?php

/* @var $this yii\web\View */
use miloschuman\highcharts\Highcharts;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\web\JsExpression;
$this->title = 'My Yii Application';
?>
<?php                                                    
    foreach ($model as $key => $value) {
        $total = $value['sum'];
        $totalgoods = $value['totalprod'];
    }


?>
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <?= Html::a('Home', ['site/index']) ?>
                <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Dashboard</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> Dashboard <small>dashboard & statistics</small></h3>
<!-- END PAGE TITLE-->
    <div class='row'>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
            <div class="dashboard-stat blue">
                <div class="visual">
                    <i class="fa fa-briefcase fa-icon-medium"></i>
                </div>
                <div class="details">
                    <div class="number">
                        RM<span data-counter="counterup" data-value='<?php echo $total ?>'>0</span>
                    </div>
                    <div class="desc">Total value of goods </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
            <div class="dashboard-stat red">
                <div class="visual">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo $model2?>">0</span>
                    </div>
                    <div class="desc"> Total Orders </div>
                </div>
                    
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 margin-bottom-10">
            <div class="dashboard-stat purple">
                <div class="visual">
                    <i class="fa fa-suitcase"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo $totalgoods?>">0</span>
                    </div>
                    <div class="desc"> Total Products </div>
                </div>
                    
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bar-chart font-blue"></i>
                            <span class="caption-subject font-blue bold uppercase">Bar Charts</span>
                            <span class="caption-helper">Total of goods by category</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <?php foreach ($model3 as $key => $value) {
                           // store data in array
                            $category[] = $value['ims_categoryName'];
                            $tot[] = (int)$value['total']; // x axis must integer value
                        }
                        // store array data to temp variable
                        $xAxis = $category; 
                        $yAxisP = $tot;

                        echo Highcharts::widget([
                          'scripts' => [
                          'highcharts-more',   // enables supplementary chart types (gauge, arearange, columnrange, etc.)
                             'modules/exporting', // adds Exporting button/menu to chart
                          ],
                           'options' => [
                              'chart' => [
                                  'type' => 'column'
                                  ],
                                'title' => ['text' => 'Total Of Goods By Category'],
                                'xAxis' => [
                                  'categories' => $xAxis,
                                ],
                                'yAxis' => [
                                  'title' => ['text' => 'Total of goods']
                                ],
                                'plotOptions' => [
                                      'column' => [
                              
                                        'dataLabels' => [
                                          'enabled' => true,
                                          'rotation' => 0,
                                          'y' => -15,
                                          'style' => [
                                            'fontSize' => '15px',
                                            'fontWeight' => 'normal',
                                          ],
                                          'align' => 'center',]


                                        ]
                                ],
                                'credits' => [
                                    'enabled' => false,
                                  ],
                                'series' => [
                                [
                                    'color' => new JsExpression('Highcharts.getOptions().colors[7]'),
                                    'name' => 'Category', 'data' => $yAxisP
                                ],
                              ]
                           ]
                        ]); ?>
                </div>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-share font-blue"></i>
                            <span class="caption-subject font-blue bold uppercase">Overview</span>
                            <span class="caption-helper">report overview...</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class='table table-striped table-hover'>
                        <tr>
                            <th>Employee Name</th>
                            <th>Total Orders</th>
                            <th>Total Amount</th>
                        </tr>
                        <?php foreach ($model1 as $key => $value) { ?>
                            <tr>
                                <td><?php echo $value['ims_fname'] ?></td>
                                <td><?php echo $value['totalC'] ?></td>
                                <td>RM<?php echo $value['sum'] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-globe font-blue"></i>
                            <span class="caption-subject font-blue bold uppercase">Feeds</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                        <ul class="feeds">
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <?php if(Yii::$app->user->identity->role == 1) {?>
                                        <div class="cont-col1">
                                            <div class="label label-sm label-danger">
                                                <i class="fa fa-shopping-cart"></i>
                                            </div>
                                        </div>
                                        
                                        <div class="cont-col2">
                                            <div class="desc"><?php echo $model4 ?> latest order should be approve
                                                <span class="label label-sm label-warning "> Take action
                                                    <i class="fa fa-share"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <?php } ?>

                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-bell-o"></i>
                                            </div>
                                        </div>
                                        
                                        <div class="cont-col2">
                                            <div class="desc"><?php echo $model5 ?> item out of stock !
                                                <span class="label label-sm label-info"> Take action
                                                    <i class="fa fa-share"></i>
                                                </span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                            <?php foreach ($model6 as $key => $value) { ?>
                            <li>
                                <div class="col1">
                                    <div class="cont">
                                        <div class="cont-col1">
                                            <div class="label label-sm label-success">
                                                <i class="fa fa-plus"></i>
                                            </div>
                                        </div>
                                        
                                        <div class="cont-col2">
                                            <div class="desc"> New goods added</div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </li>
                            <?php }?>
                        </ul>
                </div>
            </div>
        </div>
    </div>
