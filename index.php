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
        <!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-5901161227057601",
                enable_page_level_ads: true
            });
        </script> -->
        <style>
            .header{
                background: url('./img/a.jpg');
                background-size: cover;
                color: #ffffff;
                padding-top: 70px;
                padding-bottom: 90px;
                background-attachment: fixed;
            } 
            .header h1{
                font-size: 60px;
                font-weight: 300;
                margin-top: 30px;
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
            .menu_picture{
                width:80%;
            }
            .menu_picture p,i{
                color:#82528b;
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
    <!-- <p id="demo" class="time"></p> -->
    <!-- <p class="text-center" style="font-weight:300; font-size:12px; color:gray;  margin-top:0px;">สอบครูผู้ช่วยรอบทั่วไป ปี 2561 (สพฐ.)</p> -->

    <div class="container-fluid header mb-5" id="logo">
        <div class="row text-center">
            <div class="col-12">
                <h1>สอบครูผู้ช่วยออนไลน์</h1>
                <mark>ครูผู้ช่วย.com | เพื่อคนสอบครูผู้ช่วยทุกสังกัด</mark>
            </div>
        </div>
    </div>

    <!-- choice -->
    <br>
    <div class="container-fluid menu_picture" id="sl">
        <div class="row text-center">
            <div class="col-sm-6 col-md-3 mb-4">
                <a href="setup.php">
                    <i class="fa fa-pencil-square-o fa-4x mb-2" aria-hidden="true"></i>
                    <p>ฝึกทำข้อสอบครูผู้ช่วย</p>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 mb-4">
                <a href="download_exam.php">
                    <i class="fa fa-file-archive-o fa-4x mb-2" aria-hidden="true"></i>
                    <p>ดาวน์โหลดแนวข้อสอบครูผู้ช่วย</p>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 mb-4">
                <a href="downloads.php">
                    <i class="fa fa-address-card-o fa-4x mb-2" aria-hidden="true"></i>
                    <p>ดาวน์โหลดเอกสารสอบสัมภาษณ์</p>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 mb-4">
                <a href="predict.php">
                    <i class="fa fa-magic fa-4x mb-2" aria-hidden="true"></i>
                    <p>เซียมซี เสี่ยงทาย</p>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 mb-4">
                <a href="content.php">
                    <i class="fa fa-book fa-4x mb-2" aria-hidden="true"></i>
                    <p>เนื้อหาที่เกี่ยวข้อง</p>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 mb-4">
                <a href="./contents/detail_teacher.php">
                    <i class="fa fa-user fa-4x mb-2" aria-hidden="true"></i>
                    <p>ครูผู้ช่วยคืออะไร</p>
                </a>
            </div>
            <div class="col-sm-6 col-md-3 mb-4">
                <a href="./contents/std_teacher.php">
                    <i class="fa fa-mortar-board fa-4x mb-2" aria-hidden="true"></i>
                    <p>มาตรฐานวิชาชีพทางการศึกษา</p>
                </a>
            </div>
        </div>
    </div>
    <br>
    <script>
        function checkBeforeGo(){
            var sl = document.getElementById("slc").value;
            if(sl=="xxx") return false;
            else return true;
        }
    </script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popover.min.js" ></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js" ></script>
    <script src="./js/myjquery.js"></script>
    <script>
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