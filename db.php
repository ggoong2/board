<?php
    // session_start();    

    // header('Content-Type: text/html; charset=utf-8');
    $db = mysqli_connect("127.0.0.1", "root", "1234", "test1", "1433");
    // , "1433"
    // $db = mysqli_connect("localhost", "root", "123456", "post_board");
    $db->set_charset("utf8");
    
    // if (!$db){
    //     echo 'db에 연결하지 못했습니다.' . mysqli_connect_error();
    // } else {
    //     echo 'db 접속 성공!';
    // }

    function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>

