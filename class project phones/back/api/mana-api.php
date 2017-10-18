<?php
   require_once "abstract-api.php";
   require_once "../ctrl/mana-controller.php";
    require_once "../modul/mana-model.php";
  
    class ManaApi extends Api{
  
        function create($params){
            $m = new ManaModel($params['name'],$params['mana']);
            $mc = new  ManaController;
            return  $mc->create($m);
           //  return "new phone inserted";
        }
        function select($params){
            
            $m = new  ManaModel($params['id'],"");
            $mc = new  ManaController;
            return $mc->select($m);
     
      }
    }
      ?>
