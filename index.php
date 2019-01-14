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
            // window.dataLayer = window.dataLayer || [];
            // function gtag(){dataLayer.push(arguments);}
            // gtag('js', new Date());
            // gtag('config', 'UA-121483375-1');
        </script>
        <!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-5901161227057601",
                enable_page_level_ads: true
            });
        </script> -->
        <style>
            .quoat{
                padding-top:80px;
                padding-bottom:80px;
                font-weight:500;
                font-size:18px;
            }
            .menu_picture{
                width:80%;
            }
            .menu_picture p,i{
                color:#82528b;
            }
        </style>
  </head>
  <body>
    <!-- menu -->
    <?php include('menu.php'); ?>

    <div class="container-fluid text-center big_box">
        <div class="row">
            <div class="col-sm-12 col-md-4 align-self-center">
                <img src="img/banner.png" class="img-fluid" alt="สอบครูผู้ช่วยออนไลน์" style="width:70%;">
            </div>
            <div class="col-sm-12 col-md-8">
                <h2 style="padding-top:10px;">"ฉันจะเป็นครูให้ได้"</h2>
                <p>มาเตรียมความพร้อมที่จะเป็นครูกันเถอะ !</p>
                <div class="container-fluid menu_picture" id="sl">
                    <div class="row text-center">
                        <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <a href="setup.php">
                                        <i class="fa fa-pencil-square-o fa-4x mb-2" aria-hidden="true"></i>
                                        <p class="menu_botton">ฝึกทำข้อสอบ</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <a href="download_exam.php">
                                        <i class="fa fa-file-archive-o fa-4x mb-2" aria-hidden="true"></i>
                                        <p class="menu_botton">แนวข้อสอบ</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <a href="downloads.php">
                                        <i class="fa fa-address-card-o fa-4x mb-2" aria-hidden="true"></i>
                                        <p class="menu_botton">เอกสารสัมภาษณ์</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <a href="predict.php">
                                        <i class="fa fa-magic fa-4x mb-2" aria-hidden="true"></i>
                                        <p class="menu_botton">เซียมซีเสี่ยงทาย</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-8 mx-auto">
                <p class="quoat">
                    <i>
                        "ครูผู้ช่วย.com" อีกหนึ่งความตั้งใจที่อยากให้เกิดสังคมแห่งการแบ่งปันของคนสอบครูผู้ช่วย 
                        ใครมีแนวข้อสอบ แผนการสอน หรือสื่อการสอนดี ๆ ที่อยากจะแบ่งปันให้คนกับอื่น ๆ 
                        ติดต่อมาที่อีเมล kruphoochuay@gmail.com
                    </i>
                </p>
            </div>
        </div>

        
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title"><a href="./contents/detail_teacher.php">ครูผู้ช่วยคืออะไร</a></h5>
                        <p class="card-text">หน้าที่และความรับผิดชอบของครูผู้ช่วยมีอะไรบ้าง </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title"><a href="./contents/std_teacher.php">มาตรฐานวิชาชีพ</a></h5>
                        <p class="card-text">มาตรฐานวิชาชีพเกี่ยวข้องกับครูอย่างไร</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title"><a href="content.php">เนื้อหาที่เกี่ยวข้อง</a></h5>
                        <p class="card-text">ข่าวสารต่าง ๆ ที่เกี่ยวข้องกับครู และการศึกษา</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/popover.min.js" ></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js" ></script>
    <script src="./js/myjquery.js"></script>
  </body>
</html>