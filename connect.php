<?php

 if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $password=$_POST['password']; 


$con=new mysqli('localhost','root','','check');
if($con){
    echo "connection successful";
    $sql="insert into `result`(name,password)values('$name','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "data inserted successfully";
    }else{
        die(mysqli_error($con));

    }
}else{
    die(mysqli_error($con));
}
}
?>


    