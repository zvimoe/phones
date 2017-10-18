<?php
abstract class API{
  
    abstract function create($params);
    abstract function select($params);
   

    public function manager($func,$params){
        switch($func){
            case 'POST':
            return $this->create($params);
            case 'GET':
            return $this->select($params);
    
        }
    }
       

}
?>