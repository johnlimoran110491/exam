<?php
include('assets/php/service/services.php');
include('assets/php/config/mysql_db.php');




 $Process= new Process();
 $view = $Process->view();
 echo json_encode($view);
