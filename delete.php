<?php
    include 'connect.php';
    if(isset($_GET['delid'])){
        $id=$_GET['delid'];

        $sql="DELETE FROM pessoa WHERE id=$id";
        $result=mysqli_query($connect,$sql);
        if($result){
            header('location:display.php');
        }else{
            die(mysqli_error($connect));
        }
    }

?>