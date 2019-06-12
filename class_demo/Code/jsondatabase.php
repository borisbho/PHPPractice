<?php
    class JSONDatabase{
        

        public function __construct() {
            
        }

        public function getData($table) : array {
            $jsonContent = file_get_contents($table.".json");
            if($jsonContent === FALSE) {
                echo "$table".".json could not be found";
                return array();
            }

            $rtn = json_decode($jsonContent,true);
            return $rtn;
        }

        public static function getDataStatic($table) : array {
            $jsonContent = file_get_contents($table.".json");
            if($jsonContent === FALSE) {
                echo "$table".".json could not be found";
                return array();
            }

            $rtn = json_decode($jsonContent,true);
            return $rtn;
        }
    }

?>