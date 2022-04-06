<?php
 $connect = mysqli_connect('localhost','root','','qldetai');
 if($connect){
     mysqli_query($connect, "SET NAMES 'UTF8'");
 }else{
    echo "ket noi that bai";
 }
 ?>