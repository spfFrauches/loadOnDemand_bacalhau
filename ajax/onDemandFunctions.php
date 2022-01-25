<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

if (!isset($_REQUEST['limit'])):
    $limitInicial = 'nulo';
else:
      $limitInicial = $_REQUEST['limit'];  
endif;


if (isset($_REQUEST['numClick'])):
    $limiteInicial =  ($_REQUEST['numClick']) * 5;
endif;

if (!isset($_REQUEST['numClick'])):
    $limiteInicial = 0;
endif;

require '../Classes/Connection.php';
require '../Classes/Model.php';

$sfi = new Model();
$planos = $sfi->sfiPlanos($limiteInicial);

foreach ($planos as $key => $value):
    
    echo "<tr>";
    echo "<td>$value->cdplano</td>";
    echo "<td>$value->dcplano</td>";
    echo "<td>$value->fldesabilita</td>";
    echo "</tr>";
    
endforeach;

