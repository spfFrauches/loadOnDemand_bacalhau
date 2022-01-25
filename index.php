<?php

require './Classes/Connection.php';
require './Classes/Model.php';

$sfi = new Model();
$planos = $sfi->sfiPlanos($limit);

require './ViewIndex.php';