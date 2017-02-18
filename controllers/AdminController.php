<?php

namespace app\controllers;

use app\models\Event;
use yii\base\Exception;
use yii\debug\models\search\Log;
use yii\filters\AccessControl;
use Yii;
use yii\web\Session;
use app\models\Web;
use app\components\AccessRule;
use app\models\Login;
use app\models\Scoreboard;

class AdminController extends \yii\web\Controller
{
    public $layout="admin_layout";
    public $username,$password;
    public $session;
    public $flag;

    public function beforeAction($action)
    {
        if (parent::beforeAction($action)) {
            // change layout for error action


            if ($action->id=='error')
                $this->layout ='error_layout';



            return true;
        } else {
            return false;
        }
    }


    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                    'class' => AccessRule::className(),],
                'only' => ['logout','login','index'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'roles' => [0],
                    ],
                    [
                        'allow'=>true,
                        'actions'=>['index','logout',],
                        'roles'=>['@'],
                    ]

                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction'

            ],
        ];
    }

    public function actionIndex()
    {
        $model=new Scoreboard();
        $model=$model->findOne(['id'=>1]);
        $this->layout="admin_layout";
        $request = Yii::$app->request->post();
        if(Yii::$app->request->isAjax) {$rh=0;$ar=0;$ti=0;$sp=0;

            if ($request['mode'] == "scoreUpdate")
            {

                $rh = $request['rh'];
                $sp = $request['sp'];
                $ti = $request['ti'];
                $ar = $request['ar'];
                $model->id=1;
                $model->arcadians=$ar;$model->spartans=$sp;$model->titans=$ti;$model->roadians=$rh;

                $model->updateAll($model,"id=1");

                Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                return ['message' => 'succesfull', 'ar' => $model->arcadians, 'sp' => $model->spartans,
                    'ti' => $model->titans, 'rh' =>$model->roadians];
        }
            if($request['mode']=="eventScoreUpdate")
            {

                $model=new Event();
                //$model->id=10;
                $model->name=$request['name'];
                $model->pfirst=$request['p1'];$model->psecond=$request['p2'];$model->pthird=$request['p3'];
                $model->hfirst=$request['g1'];$model->hsecond=$request['g2'];$model->hthird=$request['g3'];
                $model->save();
                Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                return ['message' => 'succesfull'];
            }



        }
        return $this->render('index',['token'=>Yii::$app->request->csrfToken,
            'ar' => $model->arcadians, 'sp' => $model->spartans,
            'ti' => $model->titans, 'rh' =>$model->roadians
        ]);

    }
    public function actionEdit()
    {

        $test=Event::getEvents();
        $m= count($test);
        $request = Yii::$app->request->post();
        if(Yii::$app->request->isAjax)
        {
            if($request['mode']=="scoreDelete")
            {
                $id=$request['ar'];
                Event::deleteEvent($id);
                Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                return ['message' => 'Succesfull'];
            }
        }
        return $this->render('edit',['ev'=>$test,'m'=>$m,'token'=>Yii::$app->request->csrfToken]);
    }
    public  function actionTest()
    {

    }

    public function actionError()
    {
        $this->layout=false;
        $error = Yii::app()->errorHandler->error;

        if( $error )
        {
            $this -> render( 'error', array( 'error' => $error ) );
        }

    }
    public function actionLogin()
    {

        $this->layout=false;
        $model = new Login();
        $session=new Session();

        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $request = Yii::$app->request->post();
        if(Yii::$app->request->isPost) {

            $this->username = $request['email'];
            $this->password = $request['password'];
            $model->email = $this->username;
            $model->password = $this->password;
            //$x=$model->load(Yii::$app->request->get());
            $identity = $model->logins($model->email, $model->password);

            if ($identity != null) {
                //$this->session=new Session();

                Yii::$app->user->login($identity,0);
                Yii::$app->session->set('uid',$identity->getId());

                return $this->redirect(['/admin']);

            }
            else {


                    $error=10;

                    return $this->render('login', [
                        'model' => $model, 'error' => $error,'j'=>''
                    ]);
                }

                return $this->render('login', [
                    'model' => $model, 'username' => '','j'=>''
                ]);
            }

        else {


            return $this->render('login', [
                'model' => $model, 'error' => '','j'=>''
            ]);
            //print $model->password;
        }
            }


    public function actionLogout()
    {

        Yii::$app->user->logout();
        return $this->goHome();

    }

}
