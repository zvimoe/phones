<?php
   require_once "abstract-api.php";
   require_once "../ctrl/phone-controller.php";
    require_once "../modul/phone-model.php";
  
    class PhoneApi extends API{
  
        function create($params){
            $m = new PhoneModel(0,$params['name'],$params['mana']);
            $mc = new  PhoneController;
            $mc->create($m);
            return "works";
        }
        function select($params){
            
            $m = new  PhoneModel($params['id'],"");
            $mc = new  PhoneController;
            return $mc->select($m);
     
      }
    }
      ?>
