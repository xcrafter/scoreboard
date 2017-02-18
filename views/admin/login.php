<!doctype html>
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<html>
<head>
    <?= Html::csrfMetaTags() ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in | Mangalam Leave Manager</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(e) {
            $(".opener").toggle("show");
        });
    </script>
</head>
<body class="bodyx" style="overflow-y: hidden;">
<div class="container padx">
    <?php echo $j;?>
    <div class="row" style="opacity:0.9;">
        <div class="col-sm-12 col-xs-12 col-md-offset-4 col-md-4 col-lg-offset-4 col-lg-4 opener" id="box">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-12"><br><br>
                    <img src="image/swr.png" style="width: 70%;margin-left: 15%;padding-top: 2%;"/><br>
                    <hr class="style-two">

                    <span class="error_message"><?php
                        if($error==10)
                        {
                            echo "Incorrect Username or Password";
                        }

                        ?></span><?php if($error==10){ echo "<br/><br/>";} ?>



                    <?php
                    $form = ActiveForm::begin([
                        'id' => 'login',
                        'method'=>'post',
                        'options' => ['class' => ''],
                    ])
                    ?>
                    <?= $form->field($model,'email',[
                        'inputOptions' => [
                            'placeholder' => 'Enter User ID',
                            'class'=>'form-control emails input-sm input-lg',
                            'id'=>'email',
                            'type'=>'text',
                            'name'=>'email'
                        ]])->label(false) ?>

                    <?= $form->field($model,'password',[
                        'inputOptions' => [
                            'placeholder' => 'Enter Password',
                            'class'=>'form-control passes input-sm input-lg',
                            'id'=>'password',
                            'type'=>'password',
                            'name'=>'password'
                        ]])->label(false) ?>


                    <div class="form-group">
                        <div class="col-lg-offset-1 col-lg-11">
                            <?= Html::submitButton('GET KEY TO ADMIN', ['class' => 'btn btn-primary btn-lg btn-block']) ?>
                            <br>
                            <br>
                        </div>
                    </div>

                    <?php ActiveForm::end() ?>




            </div>
        </div>
    </div>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
