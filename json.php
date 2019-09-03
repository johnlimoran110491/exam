<?php

$action = $_POST['action'];

include('assets/php/service/services.php');
include('assets/php/config/mysql_db.php');
include('assets/php/service/functions.php');
if($action == 'get_data')
{
    $output = '';

    $functions = new Functions();
    $curl = $functions->Fetch();
    $json = json_decode($curl);
    $message = $json->message;
    $output ="<option style='text-align-last:center;' value='' required>---------SELECT CATEGORY--------</option>";
    foreach($message as $item)
    {
        $title = $item->category;
    
     $output .= "<option style='text-align-last:center;' value='" .$title. "'required>"  .$title.  "</option>";
    }  
    echo $output;
}
if($action == 'get_product')
{
    $output = '';
$category = $_POST['category'];
if ($category != ''){
    $functions = new Functions();
    $curl = $functions->Curl($category);
    $json = json_decode($curl);
    $message = $json->message;
    foreach($message as $item)
    {
     //   $output .= $item['title']."</br>"   ;
      $output .= '<div class="card">
      <div class="card-header">"'.$item->title.'"</div>
    
      <div class="card-body">MANUFACTURED BY: "'.$item->manufacturer.'"</br> To be released in:"'.$item->releaseDate.'"</br>
      <div class="text-success"> PRICE: "'.$item->price.' PHP" </div> </div> 
    
    </div></br>';
    
    } 
}
else{
    $output = '<div class="card">
    <div class="card-header"></div>

    <div class="card-body">NO DATA FOUND</br>
    <div class="text-success"> </div> </div> 
  
  </div>';
}
    

    echo $output;
}



    




  



