<?php include $_SERVER['DOCUMENT_ROOT']."/BOARD/db.php"; ?> 
<?php
// $conn = mysqli_connect("localhost", "root", "123456", "post_board");
//         if (!$conn){
//             echo 'db에 연결하지 못했습니다.' . mysqli_connect_error();
//         } else {
//             echo 'db 접속 성공sss!';
//         }
echo 'whoamiasdasd';
$sql = mq("select * from board");
$row_num = mysqli_num_rows($sql);
echo exec('whoami');


        ?>