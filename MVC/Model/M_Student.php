<?php
include_once("E_Student.php");
include_once("../Connector.php");
class Model_Student {
    public function getAllStudent() {
        $link = mysqli_connect("localhost","root","","dulieu",3307);
        $sql = "SELECT * FROM sinhvien";
        $rs = mysqli_query($link,$sql);
        $i = 1;
        while ($row = mysqli_fetch_array($rs)) 
        {
            $id = $row['id'];
            $age = $row['age'];
            $name = $row['name'];
            $university = $row['university'];
            $students[$i++] = new Entity_Student($id,$name,$age,$university);
        }
        return $students;
    }
    public function getStudentDetal($stid) {
        $link = mysqli_connect("localhost","root","","dulieu",3307);
        $sql = "SELECT * FROM sinhvien WHERE id='$stid'";
        $rs = mysqli_query($link,$sql);
        while ($row = mysqli_fetch_array($rs))
        {
            $id = $row['id'];
            $age = $row['age'];
            $name = $row['name'];
            $university = $row['university'];
            $student = new Entity_Student($id,$name,$age,$university);
        }
        return $student;
    }
    public function addStudent($id,$name,$age,$university) {
        $link = mysqli_connect("localhost","root","","dulieu",3307);
        $sql = "INSERT INTO sinhvien VALUES('$id','$name','$age','$university');";
        $rs = mysqli_query($link,$sql);
    }
    public function updateStudent($id,$name,$age,$university) {
        $link = mysqli_connect("localhost","root","","dulieu",3307);
        $sql = "UPDATE sinhvien SET name='$name',age='$age',university='$university' WHERE id='$id'";
        $rs = mysqli_query($link,$sql);
    }
    public function getAllId() {
        $link = mysqli_connect("localhost","root","","dulieu",3307);
        $sql = "SELECT id FROM sinhvien";
        $rs = mysqli_query($link,$sql);
        $i=1;
        while ($row = mysqli_fetch_array($rs))
        {
            $id[$i++] = $row['id'];
        }
        return $id;
    } 
    public function Delete($id) {
        $link = mysqli_connect("localhost","root","","dulieu",3307);
        $sql = "DELETE FROM sinhvien WHERE id='$id'";
        $rs = mysqli_query($link,$sql);
    }
    public function SearchStudent($name,$value) {
        $link = mysqli_connect("localhost","root","","dulieu",3307);
        $sql = "SELECT * FROM sinhvien WHERE $name='$value'";
        $rs = mysqli_query($link,$sql);
        $i = 1;
        while ($row = mysqli_fetch_array($rs)) 
        {
            $id = $row['id'];
            $age = $row['age'];
            $name = $row['name'];
            $university = $row['university'];
            $students[$i++] = new Entity_Student($id,$name,$age,$university);
        }
        return $students;
    }
}
?>