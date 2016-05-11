<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;
use yii\bootstrap\Modal;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<?php if(Yii::$app->user->isGuest == 1) { ?>
    <body class="login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <!-- <a href="#">
               <img src="<?php //echo Yii::$app->request->baseUrl; ?>/metronic/assets/pages/img/logoIms_4.png" alt="logo" class="logo-default"></a> -->
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <?= $content ?>
        </div>
    </body>
<?php } else if(Yii::$app->user->identity->role == 1){ ?>
<body class='page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md'>
    <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="../assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                   <!-- <div class="menu-toggler sidebar-toggler"> </div> -->
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/layouts/layout/img/avatar.png" alt="" ></button>
                                <span class="username username-hide-on-mobile"><strong><?= Yii::$app->user->identity->ims_nickname ?></strong></span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="page_user_profile_1.html">
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                                <li>
                                    <?= Html::a('<i class="icon-key"></i> Log Out', ['site/logout']) ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <?php  
                        echo Menu::widget([
                            'items' => [
                                ['label' => '<i class="icon-home"></i>Dashboard', 'url' => ['site/index']],
                                ['label' => '<i class="icon-graph"></i>Inventory<span class="arrow"></span>','submenuTemplate' => "\n<ul class='sub-menu'>\n{items}\n</ul>\n",
                                    //'url' => ['ims-product/index'],
                                    'options'=>['class'=>'nav-item '],
                                    'template' => '<a href="javascript:;" class="nav-link nav-toggle">{label}</a>',
                                    'items' => [
                                        ['label' => '<i class="icon-graph"></i>Product', 'url' => ['ims-product/index'],'options'=>['id'=>'product']],
                                        ['label' => '<i class="icon-basket"></i><span class="title">Orders</span>', 'url' => ['product/popular']],
                                    ],
                                    'itemOptions'=>array( 'class'=>'nav-item'),
                                    'options'=>['id'=>'inventory']
                                ],
                                ['label' => '<i class="icon-settings"></i>Setting<span class="arrow"></span>','submenuTemplate' => "\n<ul class='sub-menu'>\n{items}\n</ul>\n",
                                    //'url' => ['ims-product/index'],
                                    'options'=>['class'=>'nav-item '],
                                    'template' => '<a href="javascript:;" class="nav-link nav-toggle">{label}</a>',
                                    'items' => [
                                        ['label' => '<i class="icon-user"></i>&nbsp;&nbsp;<span class="title">Manage User</span>', 'url' => ['ims-user/index'],'options'=>['id'=>'user']],
                                        ['label' => '<i class="icon-docs"></i>&nbsp;&nbsp;<span class="title">Category</span>', 'url' => ['ims-category/index'],'options'=>['id'=>'category']],
                                        ['label' => '<i class="icon-users"></i>&nbsp;&nbsp;<span class="title">Supplier</span>', 'url' => ['ims-supplier/index'],'options'=>['id'=>'supplier']],
                                    ],
                                    'itemOptions'=>array( 'class'=>'nav-item'),
                                    'options'=>['id'=>'setting']
                                ],
                            ],
                            'itemOptions'=>array( 'class'=>'nav-item', 'style'=>''),
                            'activeCssClass'=>'active open',
                                    'activateParents'=>true,
                                    'encodeLabels' => false,
                            'options' => [
                                            'class' => 'page-sidebar-menu page-header-fixed',
                                            'data-keep-expanded'=>'false',
                                            'data-auto-scroll'=>'true',
                                            'data-slide-speed'=>200,
                                            'style'=>'padding-top: 20px'
                                        ],
                        ]);
                        ?>
                </div><!-- END SIDEBAR -->
            </div><!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <?= $content ?>
                </div><!-- END CONTENT BODY -->
            </div><!-- END CONTENT -->
        </div><!--  END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner">
                <?= date('Y') ?>&copy;E-KIMS
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->

</body>

<?php } else if (Yii::$app->user->identity->role == 2) { ?>
<body class='page-header-fixed page-sidebar-closed-hide-logo page-content-white page-md'>
    <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/pages/img/logoIms_4.png" alt="logo" class="logo-default"></button>
                   <!-- <div class="menu-toggler sidebar-toggler"> </div> -->
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/layouts/layout/img/avatar.png" alt="" ></button>
                                <span class="username username-hide-on-mobile"><strong><?= Yii::$app->user->identity->ims_nickname ?></strong></span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="page_user_profile_1.html">
                                        <i class="icon-user"></i> My Profile </a>
                                </li>
                                <li>
                                    <?= Html::a('<i class="icon-key"></i> Log Out', ['site/logout']) ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <?php  
                        echo Menu::widget([
                            'items' => [
                                ['label' => '<i class="icon-home"></i>Dashboard', 'url' => ['site/index']],
                                ['label' => '<i class="icon-briefcase"></i>Inventory<span class="arrow"></span>','submenuTemplate' => "\n<ul class='sub-menu'>\n{items}\n</ul>\n",
                                    //'url' => ['ims-product/index'],
                                    'options'=>['class'=>'nav-item '],
                                    'template' => '<a href="javascript:;" class="nav-link nav-toggle">{label}</a>',
                                    'items' => [
                                        ['label' => '<i class="icon-docs"></i>Management', 'url' => ['ims-product/menubox'],'options'=>['id'=>'product']],
                                    ],
                                    'itemOptions'=>array( 'class'=>'nav-item'),
                                    'options'=>['id'=>'inventory']
                                ],
                              /*  ['label' => '<i class="icon-settings"></i>Setting<span class="arrow"></span>','submenuTemplate' => "\n<ul class='sub-menu'>\n{items}\n</ul>\n",
                                    //'url' => ['ims-product/index'],
                                    'options'=>['class'=>'nav-item '],
                                    'template' => '<a href="javascript:;" class="nav-link nav-toggle">{label}</a>',
                                    'items' => [
                                        ['label' => '<i class="icon-user"></i>&nbsp;&nbsp;<span class="title">Manage User</span>', 'url' => ['ims-user/index'],'options'=>['id'=>'user']],
                                        ['label' => '<i class="icon-docs"></i>&nbsp;&nbsp;<span class="title">Category</span>', 'url' => ['ims-category/index'],'options'=>['id'=>'category']],
                                        ['label' => '<i class="icon-users"></i>&nbsp;&nbsp;<span class="title">Supplier</span>', 'url' => ['ims-supplier/index'],'options'=>['id'=>'supplier']],
                                    ],
                                    'itemOptions'=>array( 'class'=>'nav-item'),
                                    'options'=>['id'=>'setting']
                                ], */
                            ],
                            'itemOptions'=>array( 'class'=>'nav-item', 'style'=>''),
                            'activeCssClass'=>'active open',
                                    'activateParents'=>true,
                                    'encodeLabels' => false,
                            'options' => [
                                            'class' => 'page-sidebar-menu page-header-fixed',
                                            'data-keep-expanded'=>'false',
                                            'data-auto-scroll'=>'true',
                                            'data-slide-speed'=>200,
                                            'style'=>'padding-top: 20px'
                                        ],
                        ]);
                        ?>
                </div><!-- END SIDEBAR -->
            </div><!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <?= $content ?>
                </div><!-- END CONTENT BODY -->
            </div><!-- END CONTENT -->
        </div><!--  END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner">
                <?= date('Y') ?>&copy;E-KIMS
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->

</body>
<?php } ?>

<?php $this->endBody() ?>
</html>
<!-- BEGIN CORE PLUGINS  
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/global/plugins/jquery.min.js" type="text/javascript"></script>-->
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>

<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>

<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/global/scripts/app.min.js" type="text/javascript"></script>

<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>

<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>

<script src="<?php echo Yii::$app->request->baseUrl; ?>/metronic/assets/pages/scripts/login.min.js" type="text/javascript"></script>

<?php 
Modal::begin([
   
    'header'=>'<h4>Update Item.</h4>',
    'id' => 'updateItem',
    'size' => 'modal-lg',
    
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => TRUE]
]);
echo "<div id='modalC'></div>";
Modal::end();
Modal::begin([
   
    'header'=>'<h4><strong>Delete Item</strong></h4>',
    'id' => 'deleteItem',
    'size' => 'modal-dialog',
    
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => TRUE]
]);
echo "<div id='modaldelete'></div>";
Modal::end();
$this->endPage() ?>
