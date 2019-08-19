<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
    <div class="container-fluid big_box" id="sl">
        <div class="row text-center">
            <div class="col-12">   
                <p class="topicTop">ให้เซียมซีทำนายกัน</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12">
                <i id="phon" class="material-icons al_predict" style="font-size:80px; color:#fe6161">device_unknown</i>
                <p class="al_predict" style="color:#fe6161">ตั้งจิตอธิษฐาน</p>
                <span class="al_predict"><button type="button" class="btn btn-info" id="btn_oncom">เริ่มเสี่ยงทาย</button></span>
                <p class="al_predict" style="font-size:12px; color:gray; margin-top:5px;">กรุณาใช้บราวเซอร์ Google, Chrome</p>
            </div>
        </div>

    <!-- choice -->
 
        <div class="container-fluid">
            <div class="row" id="result_all">
                <div class="col-sm-12 col-md-12 text-center"> 
                    <div class="card bg-light mb-3 mx-auto" style="max-width: 45rem;">
                        <div class="card-header"><b><span id="number" style="font-size:18px;">กำลังเสี่ยงทาย</span></b></div>
                        <div class="card-body text-secondary">
                            <p style="font-size:18px; color:#82528b" class="card-title"></p>
                            <i class="fa fa-spinner fa-spin" id="load" style="font-size:35px"></i>
                            <p id="result" class="card-text text-left" style="color:gray; font-weight: 300; font-size:18px"></p>
                            <p style="font-size:12px; color:gray;" class="text-right ref"><u>ที่มา</u> วัดหนองบัว จังหวัดอุบลราชธานี</p>
                        </div>
                    </div>
                </div>         
            </div>
        </div>
    </div>
    <div id="footer" class="container footer text-center">
        <?php include('share.php'); ?>
        <p style="font-size: 12px; color:gray">สงวนลิขสิทธิ์ © 2562 ครูผู้ช่วย.com</p>
    </div>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js" ></script>
    <script src="./js/myjquery.js"></script>
    <script src="./js/shake.js/shake.js"></script>
    <script>

        $(document).ready(function(){
            $('#result_all').hide();
            var shakeEvent = new Shake({threshold: 15});
            shakeEvent.start();
            var count=1;
            window.addEventListener('shake', function(){
                $('#result_all').show();
                $('.ref').hide();
                count+=1;
                if(count==2) {
                    // stopShake();
                    // sendData();
                    setTimeout(function () {
                        stopShake(); // หยุดการสั่นเมื่อได้ผลลัพธ์
                        sendData(); // เรียกฟังก์ชันการแสดงผลเซียมซี
                    }, 3000);
                }
            }, false);

            function stopShake(){
                shakeEvent.stop();
            }
            function sendData(){
                var x = Math.floor((Math.random() * 28) + 1);
                $.post("./checkPredict.php", { data: x }, function (dataAll, status, xhr){
                    if(status=="success"){
                        if(dataAll != null) {
                            resultAll = $.parseJSON(dataAll);
                            $('.ref').show();
                            $('#load').hide();
                            $('#phon').hide();
                            $('.al_predict').hide();

                            $('#number').html('คุณได้ใบที่ '+resultAll[0].id);
                            $('#result').html(resultAll[0].result);
                        }else alert('Something Wrong!!!');
                    }else alert('Something Wrong!!!');
                });
            }
            // if(!("ondevicemotion" in window)){alert("Not Supported");}

            function oncomputer(){
                $('#result_all').show();
                $('.ref').hide();
                $('.al_predict').hide();
                setTimeout(function () {
                    sendData();
                }, 3000);
            }

            $('#btn_oncom').click(function(){
                oncomputer();
            });
        });
    </script>
  </body>
</html>