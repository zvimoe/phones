<?php
 require_once 'phone-api.php';
 require_once 'mana-api.php';


// // gets method for REST division
// $meth= strtoupper($_SERVER['REQUEST_METHOD']);
// // gets table to switch to right api
//  $table=$_REQUEST['table'];
// // gets data to send to db
// $data=$_REQUEST['data'];


$table='cellaphones';
$meth='POST';
$data=array('name'=>"ufuyuf",'mana'=>10);



switch($table){
    case 'cellaphones':
    $phone=new PhoneApi();
   print_r ($phone->manager($meth,$data));
    break;
    case 'mana':
    $mana=new ManaApi();
    $stmt= $mana->manager($meth,$data);
    $directors = array();
    foreach($stmt as $row){
        array_push($directors,$row["name"]); 
      
    }
     echo json_encode($directors);
    }

    ?>

