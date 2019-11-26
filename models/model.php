<?php 
    function student() {
        include "connection.php";
        $query = "SELECT * FROM student";
        $result = mysqli_query($conn,$query);
        $rows = [];
        if($result && mysqli_num_rows($result)){
            foreach($result as $info){
                $rows[] = $info;
            }
        }
        return $rows;
    }

    function m_add($data) {
        $name = $_POST['username'];
        $class = $_POST['class'];
        $mark = $_POST['score'];
        $sex = $_POST['sex'];

        include "connection.php";
        $query = "INSERT INTO student(name,class,mark,sex) VALUES ('$name','$class','$mark','$sex')";
        $result = mysqli_query($conn,$query);
        return $result;
    }

    function m_detail() {
        $id = $_GET['id'];
        $query = "SELECT * FROM student WHERE id = $id";
        include "connection.php";
        $result = mysqli_query($conn,$query);
        return $result;
    }

    function m_delete() {
        $id = $_GET['id'];
        $delete = "DELETE FROM student WHERE id =$id";
        include "connection.php";
        $result = mysqli_query($conn,$delete);
        if($result){
            header("Location: index.php");
        }else{
            echo "Cannot delete";
        }
    }
    function m_edit() {
        $id = $_GET['id'];
        $query = "SELECT * FROM student WHERE id = $id";
        include "connection.php";
        $result = mysqli_query($conn,$query);
        return $result;
    }
?>