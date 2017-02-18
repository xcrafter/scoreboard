<?php

namespace app\controllers;
use app\models\Event;
use app\models\Scoreboard;
use yii;

class ScoreController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $this->layout=false;
        $request = Yii::$app->request->post();

        if(Yii::$app->request->isAjax)
        {

            if ($request['mode'] == "scoreGet")
            {

                $model=Scoreboard::getScore();
                Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                return ['message' => 'succesfull', 'ar' => $model->arcadians, 'sp' => $model->spartans,
                    'ti' => $model->titans, 'rh' =>$model->roadians];
            }
            if ($request['mode'] == "allGet")
            {

                $model=Scoreboard::getScore();
                $test=Event::getLast();
                $b=count($test);
                Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                return ['message' => 'succesfull', 'ar' => $model->arcadians, 'sp' => $model->spartans,
                    'ti' => $model->titans, 'rh' =>$model->roadians,'test'=>$test,'b'=>$b];
            }



        }
        return $this->render('index',['token'=>Yii::$app->request->csrfToken]);

    }

}
