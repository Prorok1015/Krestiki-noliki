<?php
$this->beginContent('@app/views/layouts/main.php');
?>
<input type="checkbox" id="nav-toggle" hidden>
<label for="nav-toggle" class="nav-toggle" onclick></label>
<div class="panel">
<ul>
   <li><a href="#1">Стандарт</a>
   <li><a href="#2">Средний</a>
   <li><a href="#3">Большой</a>
   <li><a href="#4">Четыре</a>
   <li><a href="#5">Пять</a>
   <li><a href="#6">Шесть</a>
   <li><a href="#7">Семь</a> 
</ul>
</div>
<?=$content;?>
<? $this->endContent(); ?>