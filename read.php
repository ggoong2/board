<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>게시판</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<?php include $_SERVER['DOCUMENT_ROOT']."/BOARD/db.php"; /* db load */?>
	<?php
		$bno = $_GET['idx']; /* bno함수에 idx값을 받아와 넣음*/
		$hit = mysqli_fetch_array(mq("select * from board where idx ='".$bno."'"));
		$hit = $hit['hit'] + 1;
		$fet = mq("update board set hit = '".$hit."' where idx = '".$bno."'");
		$sql = mq("select * from board where idx='".$bno."'"); /* 받아온 idx값을 선택 */
		$board = $sql->fetch_array();
	?>

	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="css/header.css" type="text/css" rel="stylesheet" />
    <link href="css/main.css" type="text/css" rel="stylesheet" />
</head>
<body>
<header>
        <?php include 'header.php'; ?>
</header>
<!-- 글 불러오기 -->
<div id="board_read">
	<h2><?php echo $board['title']; ?></h2>
		<div id="user_info">
			<div class="brname"><?php echo $board['name']; ?></div>
            <div class="brdate"><?php echo $board['date']; ?>
            조회:<?php echo $board['hit']; ?></div>
		</div>
        <div id="bo_line"></div>
		<div class="imgi">
		<?php $src = $board["file"]; 
		if($src==true){
            echo "<img src=upload/$src>"; 
		}
		?>
		</div>


        <div id="bo_content">
            <?php echo nl2br("$board[content]"); ?>
        </div>
	<!-- 목록, 수정, 삭제 -->
	<div id="bo_ser">
		<ul>
			<li><a href="portfolio.php">[목록으로]</a></li>
			<li><a href="modify.php?idx=<?php echo $board['idx']; ?>">[수정]</a></li>
			<li><a href="delete.php?idx=<?php echo $board['idx']; ?>">[삭제]</a></li>
		</ul>
	</div>
</div>


<footer>
        <div class="footer"><img src="img/footer.png"></div>
    </footer>
</body>
</html>