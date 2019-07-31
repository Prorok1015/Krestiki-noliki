<?php
use app\assets\GameAsset;
GameAsset::register($this);
$this->title = 'Крестики нолики';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Mycontainer">
    <div class="table">
    <?php for ($i = 0; $i < 9; $i++)  
    {
      echo ' <div class="cell" id="'. $i .'" onclick="move('. $i .', \'player\')"></div>';
    }
   ?>
    </div>
  </div>