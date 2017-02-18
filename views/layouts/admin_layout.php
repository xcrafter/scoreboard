<?php

/* @var $this \yii\web\View */
/* @var $content string */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AdminAsset;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;


AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?= Html::csrfMetaTags() ?>

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->










</head>

<body>

<?php $this->beginBody() ?>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=Url::to(['/admin'])?>">Sarang 2k16</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">


            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">

                    <li><a href="<?=Url::to(['/logout']);?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">




                    <li>
                        <a href="<?=Url::to(['/admin'])?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Event<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?=Url::to(['/admin/edit'])?>">Delete Event</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>






            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">

        <!--<div class="row" style="padding-top: 3%;">

            <div class="col-xs-6 col-lg-offset-8 col-lg-2" style="text-align: right;"><span>Select Vehicle</span></div>
                <div class="col-xs-12 col-lg-2">

                <select class="selectpicker" data-style="btn-info" style="margin-top: 0;margin-left:3%;text-align:padding-top:2%; center;">
                    <option selected>Select Vehicle</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>

            </div>

        </div>-->
        <div style="padding:1%;">
        <?= $content ?>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>

<?php


?>


<!-- /#wrapper -->
<div class="modal"><!-- for ajax loading --></div>

<!--<script src="js/morris-data.js"></script>-->

<!-- Custom Theme JavaScript
<script src="dist/js/sb-admin-2.js"></script> -->
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
