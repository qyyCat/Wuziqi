<?php
    header('Content-Type:text/plain');
    $rid=$_REQUEST['rid'];
    //$conn=mysqli_connect('127.0.0.1','root','','Gobang',3306);
		$conn=mysqli_connect(SAE_MYSQL_HOST_M,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB,SAE_MYSQL_PORT);
    mysqli_query($conn,'SET NAMES UTF8');
    $sql="DELETE FROM userRecords WHERE rid=$rid";
    $result=mysqli_query($conn,$sql);
    echo $result?'succ':'error'.$sql;