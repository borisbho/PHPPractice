<?php 
//this is our Popo, the database has a table called students with
//two columns (id,name)
    class Student {
        private $id; //fetch_object doesn't care if it's private
        public $name;  //could be public

        public function getName() {
            return $this->name;
        }

        public function getId() {
            return $this->id;
        }
    }
?>