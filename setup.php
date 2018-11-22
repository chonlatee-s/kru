<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>เว็บฝึกทำข้อสอบครูผู้ช่วยออนไลน์</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121483375-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-121483375-1');
        </script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-5901161227057601",
                enable_page_level_ads: true
            });
        </script>

        <style>
            .header{
                /* background: url('./img/11.jpg'); */
                background-size: cover;
                color: #ffffff;
                padding-top: 50px;
                background-attachment: fixed;
            } 
            .header h2{
                font-size: 40px;
                font-weight: 300;
                margin-top: 5px;
                margin-bottom: 10px;
                color:#7e6296;
                text-align: center;
            }
            .header p{
                font-size: 16px;
                font-weight: 300;
                text-align: center;
            }   
            mark{
                background-color:#7e6296;
                color:#ffffff;
                opacity:0.8;
            }
            #btn_st{
                background: #82528b;
                border: none;
                border-radius: 5px 5px 5px 5px;
                padding: 10px;
                width: 100%;
                color: #ffffff;
                font-weight: 400;
                font-size: 24px;
                outline: none;
            }
            #btn_st:hover{
                background: #b27fbc;
                border: none;
                border-radius: 5px 5px 5px 5px;
                padding: 10px;
                width: 100%;
                color: #ffffff;
                font-weight: 400;
                font-size: 24px;
                outline: none;
            }
            .time{
                text-align:center; font-weight:300; font-size:22px; color:#fe6161; margin-bottom:0px;
            }
        </style>
  </head>
  <body>
    <!-- menu -->
    <?php include('menu.php'); ?>
    <!-- banner -->

    <!-- <p class="time" id="demo"></p>
    <p class="text-center" style="font-weight:300; font-size:12px; color:gray;  margin-top:0px;">สอบครูผู้ช่วยรอบทั่วไป ปี 2561 (สพฐ.)</p>
    <p class="text-center"><i class="fa fa-calendar" style="font-size:48px;color:#fe6161;"></i></p> -->

    <div class="container-fluid header" id="logo">
        <div class="row text-center">
            <div class="col-12">
                <h2>ฝึกทำข้อสอบครูผู้ช่วยออนไลน์</h2>
                <!-- <mark>กรุณาเลือกหัวข้อที่ต้องการทดสอบ</mark> -->
            </div>
        </div>
    </div>

    <!-- choice -->
    <br>
    <div class="container-fluid" id="sl">
        <form action="test.php" method="POST">
            <div class="row mb-2">
                <div class="col-12 choice">
                <p class="text-center"></p> 
                    <div class="form-group show">            
                        <select id="slc" name="mode" class="custom-select mb-3 text-center" data-toggle="popover" data-trigger="focus"  data-placement="top" title="คำแนะนำ" data-content="ระบบจะสุ่มข้อสอบออกมาตามหัวข้อที่เลือกไว้จำนวน 10 ข้อ ถ้าพร้อมแล้วกรุณาเลือกหัวข้อที่ต้องการทดสอบและกดปุ่มเริ่มทำแบบทดสอบ">
                            <option value="xxx">กรุณาเลือกหัวข้อที่ต้องการทดสอบ</option>
                            <option value="1">หมวดวิชาภาค ก</option>
                            <option value="2">หมวดวิชาภาค ข</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 col-md-3 mx-auto">
                    <button id="btn_st" class="btn btn-info button" onclick="return checkBeforeGo()">
                        เริ่มทำแบบทดสอบ
                    </button>
                </div>
            </div>
        </form>
        
    </div>
    </br>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popover.min.js" ></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js" ></script>
    <script src="./js/myjquery.js"></script>
    <script>
        function checkBeforeGo(){
            var sl = document.getElementById("slc").value;
            if(sl=="xxx") return false;
            else return true;
        }

        $(document).ready(function(){
            // var countDownDate = new Date("August 18, 2018 01:00:00").getTime();
            // var x = setInterval(function() {
            //     $.post("./getTime.php", function (dataAll, status, xhr){
            //         var now = new Date(dataAll);
            //         var distance = countDownDate - now;
                    
            //         var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            //         var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            //         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            //         var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
            //         $("#demo").html("เหลืออีก "+days + " วัน " + hours + " : "
            //         + minutes + " : " + seconds + " วินาที");
            //         if (distance < 0) {
            //             clearInterval(x);
            //             $("#demo").html("ถึงวันที่สอบแล้ว ขอให้โชคดี");
            //         }
            //     });
            // }, 1000);
        });
    </script>
  </body>
</html>