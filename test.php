<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
 
<div id="test" style="width:100px; height:100px; background:#fff100; display:none" ></div>
<input type="button" onclick="testdiv();" value="토글">

<script type="text/javascript">
    function testdiv(){ 
        if($('#test').css('display') == 'none'){ // div 안보일때
            $('#test').css('display','block'); // 보이기
        } else if($('#test').css('display') == 'block'){ // div 보일때
            $('#test').css('display','none'); // 숨기기
        }
    }

</script>


</body>
</html>