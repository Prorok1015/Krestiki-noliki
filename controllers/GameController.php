<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\wiews\layouts\rightPanel;
class GameController extends Controller
{
    public $layout = 'rightPanel';
    
    public function actionGame(){
       
        return $this->render('game');
    }
}
