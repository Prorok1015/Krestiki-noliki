<?php
namespace app\assets;

use yii\web\AssetBundle;

class GameAsset extends AssetBundle 
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [ 
        'css/game.css',
        'css/backPanel.css' 
    ]; 
    public $js = [
        'javaScript/engine.js'
    ];
   
}  