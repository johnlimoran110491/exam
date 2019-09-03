<?php

class Process{


    private $db;
    private $conn;

    public function __construct(){
        $this->db = new MySQL();
        $this->conn = $this->db->Connect();
    }
  

    public function view(){
        $conn = $this->conn;
        

        $query = 'SELECT * from category';
        try{
          
            foreach ($conn->query($query) as $row) {
                    $object  = (object)$row;
            
              
                
                    $category=  $object->category;

                   
                    $return[] = array( 'category'=> $category);
            
            }


            $response = array('status'=>200,'message'=>$return);
        }catch(PDOException $e){
            $response = array('status'=>500,'message'=>$e->getMessage());
        }
        return (object)$response;
        $conn->close();
    }
    
    public function product($category){
        $conn = $this->conn;
        

        $query = "SELECT * from product where category='$category'";
        try{
          
            foreach ($conn->query($query) as $row) {
                    $object  = (object)$row;
            
              
                    $title=  $object->title;
                    $category=  $object->category;
                    $releaseDate=  $object->releaseDate;
                     $price=  $object->price;
                     $manufacturer=  $object->manufacturer;
                     $return[] = array('title'=> $title,  'price'=> $price, 'releaseDate'=> $releaseDate,'manufacturer'=> $manufacturer);
            
            }


            $response = array('status'=>200,'message'=>$return);
        }catch(PDOException $e){
            $response = array('status'=>500,'message'=>$e->getMessage());
        }
        return (object)$response;
        $conn->close();
    }
}//end class
?>
