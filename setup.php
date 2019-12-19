<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>สอบครูผู้ช่วยออนไลน์</title>
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
            mark{
                background-color:#7e6296;
                color:#ffffff;
                opacity:0.8;
            }
        </style>
  </head>
  <body>
    <!-- menu -->
    <?php include('menu.php'); ?>
    <!-- banner -->

    <div class="container-fluid big_box">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">   
                    <p class="topicTop">ทำข้อสอบ</p>
                </div>
            </div>
        </div>

        <div class="container" id="sl">
            <form action="test.php" method="POST">
                <div class="row mb-2">
                    <div class="col-sm-12 col-md-6 mx-auto choice">
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
                        <button id="btn_st" class="btn btn-primary" onclick="return checkBeforeGo()">
                            เริ่มทำแบบทดสอบ
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="footer" class="container footer text-center">
        <?php include('share.php'); ?>
        <p style="font-size: 12px; color:gray">สงวนลิขสิทธิ์ © 2562 ครูผู้ช่วย.com</p>
    </div>
   
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popover.min.js" ></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js" ></script>
    <script>
        function checkBeforeGo(){
            var sl = document.getElementById("slc").value;
            if(sl=="xxx") return false;
            else return true;
        }
    </script>
  </body>
</html>