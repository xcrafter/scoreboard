<?php

use app\models\Scoreboard;
use app\models\Event;
use yii\helpers\Html;
use yii\base\View;

$model=new Scoreboard();
$model=Scoreboard::getScore();


$script=<<< JS

function updateDetails()
{

     $.ajax({
        url: 'edit',
        type: 'post',
        data: {
        ar:  $('#del_event').val(),
         mode:"scoreDelete",
        _csrf : '$token'
        },
        success: function (data) {

        alert("Successull");


}
    }

    );

}


$(document).on({
    ajaxStart: function() { $("body").addClass("loading");    },
     ajaxStop: function() { $("body").removeClass("loading"); }
});

$("#prize_delete").click(function() {
    //alert( $('#main').val() );

  updateDetails();

});


JS;
$this->registerJs($script);


?>
<div class="row">

    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-map-marker"></i> Event Update

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">

                <div class="row" style="margin: 8px;">

                 <select id="del_event" class="form-control form">

                     <?php for($i=0;$i<$m;$i++):?>

                         <option value="<?=$ev[$i]['id']?>"><?=$ev[$i]['name']?></option>

                     <?php endfor;?>

                 </select>

                </div>

                <div class="row" style="margin-right: 50px; margin-left: 360px;">

                    <a href="#" class="btn btn-success active btn-block"
                       style="background-color: #0097cf" id="prize_delete">Delete Prize</a>

                </div>






            </div>
            <!-- /.panel-body -->
        </div>

    </div>

</div>