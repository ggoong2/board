<?php
include $_SERVER['DOCUMENT_ROOT']."/BOARD/db.php";


$bno = $_GET['idx'];

$sql = mq("select * from board where idx='".$bno."'"); /* 받아온 idx값을 선택 */
$board = $sql->fetch_array();

$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];

$oldfilename = $board['file'];

// $filename = $_FILES['b_file']['name'];
// $folder = "upload/".$filename;
// move_uploaded_file($_FILES['b_file']['tmp_name'],$folder);

$filename = $_FILES['b_file']['name'];

// if($filename==true){
//     if($oldfolder==true){
        
//     }
// }
echo "<script>alert('{$oldfilename} .'이랑'. {$filename}');</script>";
if($oldfilename==true && $filename==true){
    $oldfolder = "upload/".$oldfilename;
    $imageNameSlice = explode(".",$filename);
    $imageName = $imageNameSlice[0];
    $imageType = $imageNameSlice[1];
    $newImage = chr(rand(97,122)).chr(rand(97,122)).$dates.rand(1,9).".".$imageType;
    $folder = "upload/".$newImage;

    move_uploaded_file($_FILES['b_file']['tmp_name'],$folder);
    $sql = mq("update board set name='".$username."',pw='".$userpw."',title='".$title."',content='".$content."',file='".$newImage."' where idx='".$bno."'");
    unlink("$oldfolder");
    echo "<script>alert('수정되었습니다.');</script>";
} else {
    $sql = mq("update board set name='".$username."',pw='".$userpw."',title='".$title."',content='".$content."' where idx='".$bno."'"); 
    // Console_log mq;
    echo "<script>alert('수정되었습니다.');</script>";
} 


?>
<!-- <script type="text/javascript"> alert("수정되었습니다."); </script> -->
<meta http-equiv="refresh" content="0 url=/board/board/read.php?idx=<?php echo $bno; ?>">