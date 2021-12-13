<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="css/header.css" type="text/css" rel="stylesheet" />
    <link href="css/main.css" type="text/css" rel="stylesheet" />
</head>
<body class="ptbody">

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


        <!-- <div>
            <hr style="width: 1080px; text-align: center; color: = #112D49; size: 1pt;">
            <table>
                <tr>
                    <td class="font_fit" style="text-align: center;">구 분</td>
                    <td style="border: 1pt solid lightgrey;">
                        <input type="text" id="gubun" style="width:80%; border: 0;">
                      </td>
                </tr>
            </table>

        </div> -->
        <!-- <div class="cut">
            <div class="cutable">
                <div class="t1"><p>구 분     <input type="text" id="gubun" style="height:30px; width:20%; border: 1;"></p></div>
                <div class="t1"><p>성 명     <input type="text" id="gubun" style="height:30px; width:30%; border: 1;"></p></div>
                <div class="t1">
                    <p>전 화 번 호     
                        <input type="text" id="gubun" style="height:30px; width:10%; border: 1;">-
                        <input type="text" id="gubun" style="height:30px; width:10%; border: 1;">-
                        <input type="text" id="gubun" style="height:30px; width:10%; border: 1;">
                    </p>
                
                </div>
                <div class="t1"><p>이메일     <input type="text" id="gubun" style="height:30px; width:50%; border: 1;"></p></div>
                <div class="t1"><p>설 명     <input type="text" id="gubun" style="height:300px; width:110%; border: 1;"></p></div>
                <div class="t1"><p>파일     <input type="file" ></p></div>
            
            </div>
        </div> -->



        <table class="cut">
            <tr>
                <td>구 분</td>
                <td>
                    <input type="text" id="gubun" style="height:30px; width:20%; border: 1;">
                </td>
            </tr>
            <tr>
                <td>성 명</td>
                <td>
                    <input type="text" id="gubun" style="height:30px; width:30%; border: 1;">
                </td>
            </tr>
            <tr>
                <td>전 화 번 호</td>
                <td>
                    <input type="text" id="gubun" style="height:30px; width:10%; border: 1;"> - 
                    <input type="text" id="gubun" style="height:30px; width:10%; border: 1;"> - 
                    <input type="text" id="gubun" style="height:30px; width:10%; border: 1;">
                </td>
            </tr>

                
            <tr>
                <td>이메일</td>
                <td>
                    <input type="text" id="gubun" style="height:30px; width:50%; border: 1;">
                </td>
            </tr>
            <tr>
                <td>설 명</td>
                <td>
                    <textarea class="notes" rows="17" style="width: 900px; border: px; margin-top:6px; height: 280px;"></textarea>
                    <!-- <input type="text" id="gubun" style="height:300px; width:110%; border: 1;"> -->
                </td>
            </tr>
            
            <tr>
                <td>파일</td>
                <td><input type="file" ></td>
            </tr>

        </table>












        <div class="quesb"><a href=""><img src="img/contact_ques_button.png"></a></div>

       
    </main>

    <footer>
        <div id=""><img src="img/footer.png"></div>
    </footer>

</body>
</html>