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
  </head>
  <body>
    <!-- menu -->
    <?php 
        include('menu.php');
    ?>

    <!-- banner -->
    <div class="container-fluid big_box">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">   
                    <p class="topicTop">เนื้อหาที่เกี่ยวข้อง</p>
                </div>
            </div>
        </div>

    <div class="container mb-3">
        <div class="row">
            <div class="col-10 mx-auto">   
                <table id="tableAgenda" class="table table-bordered table-striped table-sm">
                    <thead class="table-primary text-center">
                        <tr>
                            <th class="htable">รายละเอียด</th>
                            <th class="htable">วันที่</th>
                        </tr>
                    </thead>
                    <tbody class="bodytable">
                        <tr>
                            <td>ประกาศรับสมัครสอบแข่งขัน</td>
                            <td>11 กรกฏาคม 2561</td>
                        </tr>
                        <tr>
                            <td>รับสมัคร</td>
                            <td>18 - 24 กรกฏาคม 2561 (ไม่เว้นวันหยุดราชการ)</td>
                        </tr>
                        <tr>
                            <td>ประกาศรายชื่อผู้มีสิทธิ์สอบ</td>                            
                            <td>ภายใน 31 กรกฏาคม 2561</td>
                        </tr>
                        <tr>
                            <td>สอบภาค ก</td>
                            <td>18 สิงหาคม 2561</td>
                        </tr>
                        <tr>
                            <td>สอบภาค ข</td>
                            <td>19 สิงหาคม 2561</td>
                        </tr>
                        <tr>
                            <td>ประกาศรายชื่อผู้มีสิทธิ์สอบภาค ค</td>
                            <td>27 สิงหาคม 2561</td>
                        </tr>
                        <tr>
                            <td>สอบสัมภาษณ์ ก</td>
                            <td>1 กันยายน 2561</td>
                        </tr>
                        <tr>
                            <td>ประกาศผลการสอบแข่งขัน</td>
                            <td>6 กันยายน 2561</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="footer" class="container footer text-center">
        <?php include('./share.php'); ?>
        <p style="font-size: 12px; color:gray">สงวนลิขสิทธิ์ © 2562 ครูผู้ช่วย.com</p>
    </div>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popover.min.js" ></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js" ></script>
    <script src="./js/myjquery.js"></script>
  </body>
</html>