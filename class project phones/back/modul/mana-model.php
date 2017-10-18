<?php  
     require_once "abstract-model.php";
   class ManaModel extends model{
    
       public function __construct($id,$name){
           $this->id=$id;
           $this->name=$name;
           
       }
       public function getparams(){
           
         $params=[
             'id' =>$this->id,
             'name' =>$this->name
         ];
         return $params;

       }
   }
   ?>