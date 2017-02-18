<?php

/* @var $this \yii\web\View */
/* @var $content string */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AdminAsset;
use yii\helpers\Url;

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


    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDsVSLpB9vf1QWCNXR_lqknqBAGyJZDnps&language"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body style="background: white;">

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
            <a class="navbar-brand" href="<?=Url::to(['/admin'])?>">UBNAVIG Tracking Solution</a>
        </div>
        <!-- /.navbar-header -->


        <!-- /.navbar-top-links -->


        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper" style=" margin:0px 0px 0px 20px;border:none;">

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
<!-- /#wrapper -->


<!--<script src="js/morris-data.js"></script>-->

<!-- Custom Theme JavaScript
<script src="dist/js/sb-admin-2.js"></script> -->
<?php $this->endBody() ?>
</body>


</html>
<?php $this->endPage() ?>
