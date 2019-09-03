<?php

class Functions{

 

 

    public function Curl($category){
        $data = array('category'=>$category);
        $json = stripslashes(json_encode($data));
        $ch = curl_init("http://localhost/sample/curl.php");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $output = curl_exec($ch);       
        curl_close($ch);
        return $output;
    }
    public function Fetch(){
    
        $ch = curl_init("http://localhost/sample/view.php");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     
        $output = curl_exec($ch);       
        curl_close($ch);
        return $output;
    }

  
}//end class
?>
