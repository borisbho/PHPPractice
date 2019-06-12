<?php 
    include_once "./database.php"; //include or require ?
    include_once "./Models/Students.php"; //relative path might not be a good idea here, why?  Hint: why is it ./ and not ../ ?

    class StudentRepo {

        //we know our return type, perhaps we should make the function coercive ?
        public function getStudentById($id) {
            $d = new Database();
           
            //don't use * in queries
            $result = $d->getConn()->query("select * from students where id = $id");
            $student = $result->fetch_object("Student");

            $d->close();
            return $student;
        }

        //we know our return type, perhaps we should make the function coercive ?
        public function getStudents() {
            /**
             * looks like we're going to have to create a db object everytime
             * perhaps there is a better way to avoid this code duplication
             */
            $d = new Database(); 
           
            //don't use * in queries
            $results = $d->getConn()->query("select * from students");
            $students = array();
            
            
            while($student = $results->fetch_object("Student")){
                array_push($students,$student);
            }

            $d->close();
            return $students;
        }
    }    
    
?>