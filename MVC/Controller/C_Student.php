<?php
include_once("../Model/M_Student.php");
class Ctrl_Student {
    public function invoke() {
        if (isset($_GET['stid'])) {
            $modelStudent = new Model_Student();
            $student = $modelStudent->getStudentDetal($_GET['stid']);
            include_once("../View/StudentDetail.html");
        }
        else if (isset($_GET['mod1'])) {
            include_once("../View/StudentAdd.php");
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/StudentList.html");
        }
        else if (isset($_GET['Add'])) {
            $modelStudent =new Model_Student();
            $modelStudent->addStudent($_GET['id'],$_GET['name'],$_GET['age'],$_GET['university']);
            include_once("../View/StudentAdd.php");
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/StudentList.html");
        } 
        else if (isset($_GET['mod2'])) {
            $modelStudent =new Model_Student();
            $ids = $modelStudent->getAllId();
            include_once("../View/StudentUpdate.php");
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/StudentList.html");
        } 
        else if (isset($_GET['Update'])) {
            $modelStudent =new Model_Student();
            $modelStudent->updateStudent($_GET['id'],$_GET['name'],$_GET['age'],$_GET['university']);
            include_once("../View/StudentUpdate.php");
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/StudentList.html");
        } 
        else if (isset($_GET['mod3'])) {
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/StudentDelete.php");
        }
        else if (isset($_GET['Delete'])) {
            $modelStudent = new Model_Student();
            $modelStudent->Delete($_GET['Delete']);
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/StudentDelete.php");
        }
        else if (isset($_GET['mod4'])) {
            include_once("../View/StudentSearch.php");
        }
        else if (isset($_GET['Search'])) {
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->SearchStudent($_GET['rabu'], $_GET['text']);
            include_once("../View/StudentList.html");
        }
        else {
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/StudentList.html");
        }
    }
}
$C_Student = new Ctrl_Student();
$C_Student->invoke();
?>