<?php  
    require_once "abstract-model.php";
   class PhoneModel extends model{
       private $mana;
       public function __construct($id,$name,$mana){
           $this->id=$id;
           $this->name=$name;
           $this->mana=$mana;
       }
       public function getparams(){
        
      $params=array(
          'id' =>$this->id,
          'model' =>$this->name,
          'mana' => $this->mana
        
       );
       return $params;

    }
}
   ?>