<?php
    header('Content-Type:application/json');
    $rid=$_REQUEST['rid'];
    $output=[];
    //$conn=mysqli_connect('127.0.0.1','root','','Gobang',3306);
		$conn=mysqli_connect(SAE_MYSQL_HOST_M,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB,SAE_MYSQL_PORT);
    mysqli_query($conn,'SET NAMES UTF8');
    $sql="SELECT * FROM userRecords WHERE rid=$rid";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        $output['msg']='fail';
        $output['reason']='SQL语句错误：'.$sql;
        return;
    }
    $output[]=mysqli_fetch_assoc($result);
    echo json_encode($output);