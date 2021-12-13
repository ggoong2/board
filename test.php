<?php
$conn = mysqli_connect("localhost", "root", "123456", "post_board");
        if (!$conn){
            echo 'db에 연결하지 못했습니다.' . mysqli_connect_error();
        } else {
            echo 'db 접속 성공!';
        }
        ?>