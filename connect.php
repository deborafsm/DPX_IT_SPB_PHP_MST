<?php

    $connect = new mysqli('localhost','root','','introducao');
    if(!$connect){
        die(mysqli_error($connect));
    }