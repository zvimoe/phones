<?php
require_once "../common/bl.php";
require_once "../common/dal.php";

 abstract class Controller{
         public function create($model){
            $data=$model->getparams();
            $bl=new BLL;
            $query=$bl->Cquerybuilder($data,$this->tb);
            $dl=new Conn();
            $dl->insert($query[0],$query[1]);
            
        
          }
         public function select($model){
            $data=$model->getparams();
            $bl=new BLL;
          if(  $data[$this->indecator]=="all"){
               $query=$bl->ALLquerybuilder($this->tb);
               $dl=new Conn;       
               return  $dl->selectAll($query);
          }
          else{
                $query=$bl->Rquerybuilder($data[$this->indecator],$this->indecator,$this->tb);
                $dl=new Conn;
                return $dl->select($query[0],$query[1]);
          }
           
          }
      
 }
 
?>