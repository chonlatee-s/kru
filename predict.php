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
                color: #ffffff;
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
            .fa {padding: 10px;font-size: 30px;width: 50px;text-align: center;text-decoration: none;margin: 5px 2px;}
            .fa:hover {opacity: 0.7;}
            .fa-facebook {background: #3B5998;color: white;}
            .fa-twitter {background: #55ACEE;color: white;}
            .fa-google {background: #dd4b39;color: white;}

        </style>
  </head>
  <body>
    <!-- menu -->
    <?php include('menu.php'); ?>
    <!-- banner -->

    <div class="container-fluid header" id="sl">
        <div class="row text-center">
            <div class="col-12">
                <h2>ให้เซียมซีทำนายกัน</h2>
                <p id="phon" class="text-center"><i class="fa fa-mobile" style="font-size:80px; color:#fe6161"></i></p>
                <p class="al_predict" style="color:#fe6161">ตั้งจิตอธิษฐาน</p>
                <span class="al_predict"><mark>เขย่าโทรศัพท์เสี่ยงทายจนกว่าจะรู้ผล</mark></span>
                <p class="al_predict" style="font-size:12px; color:gray; margin-top:5px;">ใช้บราวเซอร์ Google, Chrome ผู้ที่ใช้คอมพิวเตอร์<a href="#" id="btn_oncom">คลิกที่นี่</a></p>
            </div>
        </div>
    </div>

    <!-- choice -->
    <br>
    <div class="container-fluid">
        <div class="row" id="result_all">
            <div class="col-sm-12 col-md-12 text-center"> 
                <div class="card bg-light mb-3 mx-auto" style="max-width: 45rem;">
                    <div class="card-header"><span id="number">กำลังเสี่ยงทาย</div>
                    
                    <div class="card-body text-secondary">
                        <p style="font-size:18px; color:#82528b" class="card-title"></p>
                        <i class="fa fa-spinner fa-spin" id="load" style="font-size:35px"></i>
                        <p id="result" class="card-text text-left" style="color:gray; font-weight: 300; font-size:18px"></p>
                        <p style="font-size:12px; color:gray;" class="text-right ref"><u>ที่มา</u> วัดหนองบัว จังหวัดอุบลราชธานี</p>
                        <p class="ref"><a href="predict.php">เล่นอีกครั้ง</a></p>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://ครูผู้ช่วย.com" target="_blank" onclick="window.open(this.href, 'facebook-share','width=500,height=300');return false;" class="fa fa-facebook"></a>
                        <a href="http://twitter.com/share?text=ฝึกทำแบบทดสอบครูผู้ช่วยออนไลน์&url=http://ครูผู้ช่วย.com" target="_blank" onclick="window.open(this.href, 'facebook-share','width=500,height=300');return false;" class="fa fa-twitter"></a>
                        <a href="https://plus.google.com/share?url=http://ครูผู้ช่วย.com" target="_blank" onclick="window.open(this.href, 'facebook-share','width=500,height=300');return false;" class="fa fa-google"></a>
                    </div>
                </div>
            </div>         
        </div>
    </div>
    </br>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popover.min.js" ></script>
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
                            alert('ดูผลเสี่ยงทาย');
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
            if(!("ondevicemotion" in window)){alert("Not Supported");}

            function oncomputer(){
                $('#result_all').show();
                $('.ref').hide();
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