<?php $this->title = 'inhabitants'; ?>
<div class="site-about">
   
   <!-- Start of Reportico Report -->
<?php
require_once('{FULL PATH TO REPORTICO DIRECTORY}/reportico.php');
$q = new reportico();
$q->initial_project = "DILG"; // this is folder name under project folder
$q->initial_project_password = "password";
$q->initial_report = "Certification";
$q->initial_execute_mode = "EXECUTE";
$q->initial_output_format = "HTML";
$q->access_mode = "REPORTOUTPUT";
$q->embedded_report = true;
$q->external_user = $user; // Add your user id here 
$q->execute();
?> 

</div>