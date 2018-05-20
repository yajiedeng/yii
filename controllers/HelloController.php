<?php
/**
 * Created by PhpStorm.
 * User: 七月
 * Date: 2018/5/20
 * Time: 13:22
 */
namespace app\controllers;
use yii\web\Controller;

class HelloController extends Controller
{
    public function actionIndex(){

        $request = \YII::$app->request;
        var_dump($request);
//        return 'hello world';
    }
}