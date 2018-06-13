<?php $this->title = 'inhabitantsDILG'; ?>
<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\modal;

$this->title = Yii::t('app', 'Reports');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-index">



<div class="container">
<div class="row">
     <div class="col-sm-1">
     </div>
    <div class="col-sm-11">

    
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
        $engine = $reportico->getReporticoEngine();        // Fetches reportico engine
        $engine->access_mode = "REPORTOUTPUT";             // Allows access to report output only
        $engine->initial_execute_mode = "EXECUTE";         // Just executes specified report
        $engine->initial_project = "Demography";            // Name of report project folder    
        $engine->initial_report = "SexAge";           // Name of report to run
        $engine->bootstrap_styles = "3";                   // Set to "3" for bootstrap v3, "2" for V2 or false for no bootstrap
        $engine->force_reportico_mini_maintains = true;    // Often required
        $engine->bootstrap_preloaded = true;               // true if you dont need Reportico to load its own bootstrap
        $engine->clear_reportico_session = true;           // Normally required
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
