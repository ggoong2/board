<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "123456", "abc_corp");
    if (!$conn) {
        echo 'db에 연결하지 못했습니다.'. mysqli_connect_error();
    } else {
        echo 'db 접속 성공!';
    }

    $user_name = $_POST['name'];
    $user_msg = $_POST['message'];

    $sql = "INSERT INTO msg_board (name, message) VALUES ('$user_name', '$user_msg')";

    //mysqli_query($link, 'sql statement')
    $result = mysqli_query($conn,  $sql);

    if($result === false){
        echo '저장하지 못했습니다';
        error_log(mysqli_error($conn)); // 에러 로그 기록
    }else{
        echo '저장 성공';
    }



    mysqli_close($conn);
    print "<hr/> <a href='index.html'> 메인화면으로 이동하기 </a>";

    ?>
</body>
</html>
