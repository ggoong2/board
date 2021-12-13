<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>

    <link href="/BOARD/BOARD/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="/BOARD/BOARD/css/header.css" type="text/css" rel="stylesheet" />
    <link href="/BOARD/BOARD/css/main.css" type="text/css" rel="stylesheet" />
    <link href="/BOARD/BOARD/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="../../dist/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- 
    <link href="starter-template.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     

</head>
<body>
    <header>
        <script type="text/javascript">
            $(document).ready(function(){
               $("#header").load("header.php")
              /* id 지정을 통해서도 가능합니다. 
               $("#header").load("header.html #navbar")
               */       
            });
        </script>  
        
        <div id="header">
            <h1>header</h1>
        </div>
        

    </header>

    <main>
        
        <script type="text/javascript">
            $(document).ready(function(){
               $("#main").load("homeb.php")
              /* id 지정을 통해서도 가능합니다. 
               $("#header").load("header.html #navbar")
               */       
            });
        </script>   
        <div id="main">
                <h1>main</h1>
        </div>
            
    </main>
    <footer>
        <div class="footer"><img src="img/footer.png"></div>
    </footer>
</body>
</html>