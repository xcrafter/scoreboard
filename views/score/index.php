<?php
use app\models\Scoreboard;
use app\models\Event;
use yii\helpers\Html;
use yii\base\View;

$model=new Scoreboard();
$model=Scoreboard::getScore();
?>

<?php

$script=<<< JS


JS;
$this->registerJs($script);
?>

<html>
<head>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="color/default.css">
    <link rel="stylesheet" type="text/css" href="score.css">





</head>
<body>

<div class="logo">

    <img src="image/logo.png">

</div>
<div class="wri">

    <img src="image/swr.png">

</div>

<div class="container">



    <div class="row">

        <div class="col-sm-9">
            <div class="row" style="margin-top: 10px;">




                <div class="col-sm-4 ">

                    <div class="teamname">

                        Arcadians
                    </div>

                    <div class="sheild">

                        <div class="score" id="ar">

                          <?= $model->arcadians?>
                        </div>

                    </div>

                </div>

                <div class="col-sm-4 col-sm-offset-4">

                    <div class="teamname">

                        Spartans

                    </div>

                    <div class="sheild">

                        <div class="score" id="sp">

                            <?= $model->spartans?>

                        </div>

                    </div>



                </div>


            </div>
<div class="row">
            <div class="col-sm-4 ">

                <div class="teamname">

                    Rhodians
                </div>

                <div class="sheild">

                    <div class="score" id="rh">

                        <?=$model->roadians?>                      </div>

                </div>

            </div>

            <div class="col-sm-4" style="padding-top: 30%; font-size: 17px;">

                System Powered By <b>PDC,MLMCE</b>

            </div>

            <div class="col-sm-4">

                <div class="teamname">

                    Titans
                </div>

                <div class="sheild">

                    <div class="score" id="ti">

                        <?=$model->titans?>
                    </div>

                </div>



            </div>


        </div>





    </div>
        <div class="col-sm-3" style="">


          <div id="result" class="marquee" data-direction='up' data-duration='7000'>



                </div>

                </div>



        </div>




    <div class="row">

        <div class="col-sm-9">



        </div>
        <div class="col-sm-3">

        </div>

    </div>

</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.marquee.min.js"></script>


<script type="text/javascript">

    function getName(id)
    {
        switch (id)
        {
            case "1": return "Arcadians";break;
            case "2": return "Spartans";break;
            case "3": return "Rhoadians";break;
            case "4": return "Titans";break;
            case "0":return " ";break;
            default :return "nothing";break;
        }
    }
    function emptyCheck($id)
    {
        if($id=="0") return " ";
        else return $id;
    }


    function getDetails()
    {

        $.ajax({
                url: 'score/index',
                type: 'post',
                data: {

                    mode:"scoreGet",
                    _csrf : '<?= $token?>'
                },
                success: function (data) {


                    $a=200;
                    $x=500;

                    $('#ar').text(data.ar).fadeOut().delay($a);
                    $('#rh').text(data.rh).fadeOut().delay($a+=$x);
                    $('#sp').text(data.sp).fadeOut().delay($a+=$x);
                    $('#ti').text(data.ti).fadeOut().delay($a+=$x);
                    $('#ar').text(data.ar).fadeIn().delay($a+=$x);
                    $('#rh').text(data.rh).fadeIn().delay($a+=$x);
                    $('#sp').text(data.sp).fadeIn().delay($a+=$x);
                    $('#ti').text(data.ti).fadeIn().delay($a+=$x);

                    /*$('#ar').text(data.ar);
                     $('#rh').text(data.rh);
                     $('#sp').text(data.sp);
                     $('#ti').text(data.ti);*/


                }
            }

        );

    }

    function getAll()
    {

        $.ajax({
                url: 'score/index',
                type: 'post',
                data: {

                    mode:"allGet",
                    _csrf : '<?= $token?>'
                },
                success: function (data) {

                    $a=10;

                   $("#result").empty();
                    for(i=0;i<data.b;i++)
                    {
                        $("#result").append(



                        "<div id=event1><div id=evname1>"+data.test[i].name+"</div><div id=p1>"+emptyCheck(data.test[i].pfirst)+"<span id=h1>"+
                        getName(data.test[i].hfirst)
                        +"</span></div>"+
                    "<div id=p1>"+emptyCheck(data.test[i].psecond)+"<span id=h1> "+getName(data.test[i].hsecond)+"</span></div>"+
                    "<div id=p1>"+emptyCheck(data.test[i].pthird)+"<span id=h1>"+getName(data.test[i].hthird)+"</span></div></div><br/>"




                    );
                        $('.marquee').marquee();
                    }



                }
            }

        );

    }


    $(document).on({
        ajaxStart: function() { $("body").addClass("loading");    },
        ajaxStop: function() { $("body").removeClass("loading"); }
    });

    $("#rh").click(function() {


        getAll();


    });
    $("#ar").click(function() {

       getDetails();


    });


</script>

</body>
</html>     
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               