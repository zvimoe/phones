<?php

  class BLL{

        public function Cquerybuilder($params,$table){
                $indecator=array_shift($params);
                $prep = array();
                foreach($params as $k => $v ) { 
                        $prep[':'.$k] = $v;
                }
                return array("INSERT INTO $table ( " . implode(', ',array_keys($params)) .
                ") VALUES (" . implode(', ',array_keys($prep)) . ")",$prep);
        }
        public function Rquerybuilder($indecator,$ind__c,$table){

                return array("SELECT * FROM $table WHERE $ind__c=:ind",array("ind" => $indecator));
            
        }
         public function ALLquerybuilder($table){

                return "SELECT * FROM $table INNER JOIN manafacturer ON $table.mana=manafacturer.code";
                       
            
        }
        
        public function Uquerybuilder($params,$indc,$table){
                    $indecator=array_shift($params);
                    $query = "UPDATE $table SET";
                    $prep = array();
                    
                    foreach($params as $k => $v ) { 
                    
                        $query .= ' '.$k.' = :'.$k.','; 
                        $prep[':'.$k] = $v; 
                    }
                    
                    $query = substr($query, 0, -1).' '; // remove last , and add a ;
                
                    return (array($query."WHERE $indc=$indecator",$prep));
        }
        public function Dquerybuilder($indecator,$indc,$table){
        
                return array("DELETE FROM $table WHERE $indc =:$indc",[$indc=>$indecator]);
        }
  }
  
    //TO DO valildation
 ?>