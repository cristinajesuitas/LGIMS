<?php $this->title = 'Population Composition'; ?>
<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\modal;

$this->title = Yii::t('app', 'Total Population by Sex and Age');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-index">



<div class="container">
<div class="row">
     <div class="col-sm-1">
     </div>
    <div class="col-sm-7">

    
    <?php
        ob_start();
    ?>
       <?php
		Modal::begin([
            'id' => 'myModal',
            'header' => 'Ajax Report',
            'size' => 'modal-lg'
        ]);
?> 
        <div id='modalcontent'></div>
<?php 
    Modal::end();
?>
<?php
	    $reportico = \Yii::$app->getModule('reportico');
        $engine = $reportico->getReporticoEngine();        
        $engine->access_mode = "ONEPROJECT" ;               
        $engine->initial_execute_mode = "MENU";            
        $engine->initial_project = "Demography";           
        $engine->bootstrap_styles = "3";                  
        $engine->force_reportico_mini_maintains = true;    
        $engine->bootstrap_preloaded = true;              
        $engine->clear_reportico_session = true;          
        $engine->execute();                              
    ?>

    <?php
    // print out footer information
        ob_end_flush();
    ?>
	  </div>

</div>

</div>
</div>
