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
    <title>สอบครูผู้ช่วยออนไลน์</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121483375-1"></script>
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
                <div class="container-fluid menu_picture">
                    <div class="row text-center">
                        <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <a href="setup.php">
                                        <i class="material-icons" style="font-size:70px;">assignment</i>
                                        <p class="menu_botton">ฝึกทำข้อสอบ</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <a href="download_exam.php">
                                        <i class="material-icons" style="font-size:70px;">cloud_download</i>
                                        <p class="menu_botton">แนวข้อสอบ</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <a href="downloads.php">
                                        <i class="material-icons" style="font-size:70px;">description</i>
                                        <p class="menu_botton">ไฟล์เอกสารต่าง ๆ</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <a href="predict.php">
                                        <i class="material-icons" style="font-size:70px;">loyalty</i>
                                        <p class="menu_botton">เซียมซีเสี่ยงทาย</p>
                                    </a>
                                </div>
                            </div>
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
    <script src="./js/popover.min.js" ></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js" ></script>
    <script src="./js/myjquery.js"></script>
  </body>
</html>