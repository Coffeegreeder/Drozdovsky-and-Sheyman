<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Blog;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionIndex(){

        //Выполняет поиск всех записей в базе данных и записывает их в массив

        $posts = Blog::find()->all();

        //Отображает страницу и передает массив постов на страницу

        return $this->render('index',[
            'posts' => $posts,
        ]);
    }

    public function actionCreate(){

        //Подключает модель
        $model = new Blog();

        //Если форма отправлена, то сохраняет в базу данных
        if ($model->load(Yii::$app->request->post())){

            //Записывает текущую дату
            $model->date = date('d.m.Y');
            $model->save();
            $this->redirect('index');
        }

        //Отображает страницу и передает переменную
        return $this->render('create',[
            'model' => $model,
        ]);
    }
}
