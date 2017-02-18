    <?php
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

$script=<<< JS

function updateDetails()
{

     $.ajax({
        url: 'admin/index',
        type: 'post',
        data: {
        ar:  $('#ar').val(),
        sp:  $('#sp').val(),
        rh:  $('#rh').val(),
        ti:  $('#ti').val(),
         mode:"scoreUpdate",
        _csrf : '$token'
        },
        success: function (data) {

        $('.ar').text(data.ar);
        $('.rh').text(data.rh);
        $('.sp').text(data.sp);
        $('.ti').text(data.ti);


}
    }

    );

}

function updatePrize()
{
 $.ajax({
        url: 'admin/index',
        type: 'post',
        data: {
        name: $('#event_name').val(),
        p1:$('#first_name').val(),
        p2:$('#second_name').val(),
        p3:$('#third_name').val(),
        g1:$('#first_group').val(),
        g2:$('#second_group').val(),
        g3:$('#third_group').val(),

         mode:"eventScoreUpdate",
        _csrf : '$token'
        },
        success: function (data) {

       alert(data.message);


}
    }

    );
}
$(document).on({
    ajaxStart: function() { $("body").addClass("loading");    },
     ajaxStop: function() { $("body").removeClass("loading"); }
});

$("#sc").click(function() {
    //alert( $('#main').val() );

  updateDetails();

});
$("#prize_update").click(function() {

    //alert($('#first_group').val());
    updatePrize();


});

JS;
$this->registerJs($script);

?>


<div class="row" style="padding-top: 1%;">


    <div class="col-lg-4" style="font-size: 20px;">


        <span id="Default"></span>

    </div>


</div>

<div class="row">
    <div class="col-lg-12" >
        <h1 class="page-header" style="margin-top: 20px;text-align: center;">Current Score Statics</h1>
    </div>
    <!--<div class="col-lg-8" style="padding-left: 40%;">

        <select class="form-control" style="margin-top: 18%;text-align: center;">
            <option selected>Select Vehicle</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>

    </div>-->
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">

                    <div class="col-xs-9 text-left">
                        <div class="huge">Arcadians</div>

                    </div>
                </div>
            </div>

                <div class="panel-footer">
                    <span class="pull-left" id="lat_stat"></span>
                    <div class="clearfix ar" id="score"><?= $ar?></div>
                </div>

        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">

                    <div class="col-xs-9 text-left">
                        <div class="huge">Rhoadians</div>

                    </div>
                </div>
            </div>

            <div class="panel-footer">
                <span class="pull-left" id="speed_stat"></span>
                <div class="clearfix rh" id="score"><?= $rh?></div>
            </div>

        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">

                    <div class="col-xs-9 text-left">
                        <div class="huge">Spartans</div>

                    </div>
                </div>
            </div>

                <div class="panel-footer">
                    <span class="pull-left" id="long_stat"></span>
                    <div class="clearfix sp" id="score"><?= $sp?></div>
                </div>

        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">

                    <div class="col-xs-9 text-left">
                        <div class="huge">Titans</div>

                    </div>
                </div>
            </div>

                <div class="panel-footer">
                    <span class="pull-left" id="sat_stat"></span>
                    <div class="clearfix ti" id="score"><?= $ti?></div>
                </div>

        </div>
    </div>
</div><br/><br/>



<div class="row" style="padding-top: 1%;">

    <div class="col-lg-4">
        <div class="row"><div class="col-lg-12 col-xs-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bell fa-fw"></i> Pick Default Event
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="list-group">


                                    <div class="row" style="padding-left: 20px; padding-right: 20px;">

                                        <select id="default_eventx" class="form form-control">
                                        <option value="1">1</option>
                                            <option value="2">Jam</option>
                                            <option value="3">Dance</option>
                                        </select>

                                    </div>




                </div>
                <!-- /.list-group -->
                <a href="#" class="btn btn-success active btn-block"
                     style="background-color: #0097cf">Update Event</a>
            </div>
            <!-- /.panel-body -->
        </div></div></div>
        <!-- /.panel -->

        <!-- /.panel -->



        <div class="row"><div class="col-lg-12 col-xs-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bell fa-fw"></i> Update Score
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="list-group">


                            <div class="row" style="padding-left: 20px; padding-right: 20px;">

                                <label style="text-align: center;">Arcadians</label>
                               <input type="text" class="form form-control tb" id="ar" value="<?= $ar?>">
                                <hr style="color:#3c3c3c;background-color: #3c3c3c;height: 1px;">


                                <label style="text-align: center;">Rhoadians</label>
                                <input type="text" class="form form-control tb" id="rh" value="<?= $rh?>">
                                <hr style="color:#3c3c3c;background-color: #3c3c3c;height: 1px;">


                                <label style="text-align: center;">Spartans</label>
                                <input type="text" class="form form-control tb" id="sp" value="<?= $sp?>">
                                <hr style="color:#3c3c3c;background-color: #3c3c3c;height: 1px;">


                                <label style="text-align: center;">Titans</label>
                                <input type="text" class="form form-control tb" id="ti" value="<?= $ti?>">





                            </div>




                        </div>
                        <!-- /.list-group -->
                        <a href="#" class="btn btn-success active btn-block"
                           style="background-color: #0097cf" id="sc">Update Score</a>
                    </div>
                    <!-- /.panel-body -->
                </div></div></div>

        <!-- /.panel .chat-panel -->
    </div>
    <!-- /.col-lg-4 -->

    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-map-marker"></i> Event Update

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
<div style="margin-left: 40px;margin-right: 40px;">
    <label>Event Name</label>

    <input type="text" class="form form-control" id="event_name">
</div>

                <h3 style="text-align: center;">Prize Update</h3><hr>

                <div class="row" style="padding-left: 50px;padding-right: 20px; font-size: 22px;"><label>1st Prize</label></div>

                <div class="row" style="padding-left: 50px;padding-right: 20px;">

               <div class="pull-left"><input type="text" class="form-control form" size="60" id="first_name"></div>
                    <div class="pull-left" style="margin-left: 15px;">

                        <select id="first_group" class="form form-control">
                            <option value="0" selected>Select</option>
                            <option value="1">Arcadians</option>
                            <option value="2">Spartans</option>
                            <option value="3">Rhoadians</option>
                            <option value="4">Titans</option>

                        </select>

                    </div>
                </div><br><br>

                <div class="row" style="padding-left: 50px;padding-right: 20px; font-size: 22px;"><label>2nd Prize</label></div>
                <div class="row" style="padding-left: 50px;padding-right: 20px;">

                    <div class="pull-left"><input type="text" class="form-control form" size="60" id="second_name"></div>
                    <div class="pull-left" style="margin-left: 15px;">

                        <select id="second_group" class="form form-control">
                            <option value="0" selected>Select</option>
                            <option value="1">Arcadians</option>
                            <option value="2">Spartans</option>
                            <option value="3">Rhoadians</option>
                            <option value="4">Titans</option>

                        </select>

                    </div>
                </div>

<br><br>


                <div class="row" style="padding-left: 50px;padding-right: 20px; font-size: 22px;"><label>3rd Prize</label></div>
                <div class="row" style="padding-left: 50px;padding-right: 20px;">

                    <div class="pull-left"><input type="text" class="form-control form" size="60" id="third_name"></div>
                    <div class="pull-left" style="margin-left: 15px;">

                        <select id="third_group" class="form form-control">
                            <option value="0" selected>Select</option>
                            <option value="1">Arcadians</option>
                            <option value="2">Spartans</option>
                            <option value="3">Rhoadians</option>
                            <option value="4">Titans</option>

                        </select>

                    </div>
                </div>
<br>
                <div class="row" style="padding-left: 50px;padding-right: 20px;">

                    <label><input type="checkbox" value=""> Set Event As Default Event</label>

                </div>
                <br>
                <div class="row" style="margin-right: 50px; margin-left: 360px;">

                    <a href="#" class="btn btn-success active btn-block"
                       style="background-color: #0097cf" id="prize_update">Update Prize</a>

                </div>






            </div>
            <!-- /.panel-body -->
        </div>

    </div>
    <!-- /.col-lg-8 -->

</div>



