<?php
include $_SERVER['DOCUMENT_ROOT']."/BOARD/db.php";
// function Console_log($data){
//     echo "<script>console.log( 'PHP_Console: " . $data . "' );</script>";
// }

//각 변수에 write.php에서 input name값들을 저장한다
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
// $userpw = $_POST['pw'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');

// file upload
// echo "confirm file information <br />";
//     $uploadfile = $_FILES['b_file']['name'];
//     if(move_uploaded_file($_FILES['b_file']['tmp_name'],$uploadfile)){
//         echo "파일이 업로드 되었습니다.<br />";
//         echo "<img src ={$_FILES['b_file']['name']}> <p>";
//         echo "1. file name : {$_FILES['b_file']['name']}<br />";
//         echo "2. file type : {$_FILES['b_file']['type']}<br />";
//         echo "3. file size : {$_FILES['b_file']['size']} byte <br />";
//         echo "4. temporary file size : {$_FILES['b_file']['size']}<br />";
//     } else {
//         echo "파일 업로드 실패 !! 다시 시도해주세요.<br />";
//     }

// $tmpfile =  $_FILES['b_file']['tmp_name'];
// $o_name = $_FILES['b_file']['name'];
$filename = $_FILES['b_file']['name'];

// $filename = $_FILES['b_file']['name'];
// $folder = "upload/".$filename;
// move_uploaded_file($_FILES['b_file']['tmp_name'],$folder);


//이미지업로드

if($filename == true){
    if($username && $userpw && $title && $content && $date && $filename){
        $imageNameSlice = explode(".",$filename);
        $imageName = $imageNameSlice[0];
        $imageType = $imageNameSlice[1];
        $newImage = chr(rand(97,122)).chr(rand(97,122)).$dates.rand(1,9).".".$imageType;
        $folder = "upload/".$newImage;
        move_uploaded_file($_FILES['b_file']['tmp_name'],$folder);

        $sql = mq("insert into board(name,pw,title,content,date,file) values('".$username."','".$userpw."','".$title."','".$content."','".$date."','".$newImage."')"); 
        echo "<script>
        alert('글쓰기 완료되었습니다.');
        location.href='portfolio.php';</script>";
    }
}else{
    $sql = mq("insert into board(name,pw,title,content,date) values('".$username."','".$userpw."','".$title."','".$content."','".$date."')"); 
        echo "<script>
        alert('글쓰기 완료되었습니다.');
        location.href='portfolio.php';</script>";
}


// if($username && $userpw && $title && $content && $date && $filename){
//     $sql = mq("insert into board(name,pw,title,content,date,file) values('".$username."','".$userpw."','".$title."','".$content."','".$date."','".$newImage."')"); 
//     echo "<script>
//     alert('글쓰기 완료되었습니다.');
//     location.href='portfolio.php';</script>";
// }else{
//     echo "<script>
//     alert('글쓰기에 실패했습니다.');
//     history.back();</script>";
// }
?>