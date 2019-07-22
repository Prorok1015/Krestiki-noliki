<?php
use app\assets\GameAsset;
GameAsset::register($this);
$this->title = 'Крестики нолики';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Mycontainer">
    <div class="table">
      <div class="cell" id="0" onclick="move(0, 'player')"></div>
      <div class="cell" id="1" onclick="move(1, 'player')"></div>
      <div class="cell" id="2" onclick="move(2, 'player')"></div>
      <div class="cell" id="3" onclick="move(3, 'player')"></div>
      <div class="cell" id="4" onclick="move(4, 'player')"></div>
      <div class="cell" id="5" onclick="move(5, 'player')"></div>
      <div class="cell" id="6" onclick="move(6, 'player')"></div>
      <div class="cell" id="7" onclick="move(7, 'player')"></div>
      <div class="cell" id="8" onclick="move(8, 'player')"></div>
    </div>
  </div>