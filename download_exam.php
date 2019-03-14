<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
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
                    <p class="topicTop">แนวข้อสอบ</p>
                </div>
            </div>
        </div>

        <div id="apply" class="container mb-3">
            <div class="row">
                <div class="col-10 mx-auto">   
                    <table id="myTable" class="table table-bordered table-striped table-sm">
                        <thead class="table-primary text-center">
                            <tr>
                                <th class="htable">หัวข้อ</th>
                                <th class="htable text-center" width="100">จัดการ</th>
                                <!-- <th class="htable">เปิดดู</th> -->
                            </tr>
                        </thead>
                        <tbody class="bodytable">
                            <tr>
                                <td>ไฟล์อ่านสอบครู อปท.</td>
                                <td class="text-center"><a href="./contents/exam1.php">รายละเอียด</a></td>
                            </tr> 
                            <tr>
                                <td>ไฟล์อ่านสอบครู สพฐ.</td>
                                <td class="text-center"><a href="./contents/exam2.php">รายละเอียด</a></td>
                            </tr> 
                            <tr>
                                <td>เก็งข้อสอบครูผู้ช่วย 2558</td>
                                <td class="text-center"><a href="./download/ex1.zip" target="_blank">ดาวน์โหลด</a></td>
                            </tr> 
                            <tr>
                                <td>แนวข้อสอบอาชีวศึกษา (ความรอบรู้) 2559 </td>
                                <td class="text-center"><a href="./download/ex2.zip" target="_blank">ดาวน์โหลด</a></td>
                            </tr> 
                            <tr>
                                <td>แนวข้อสอบครูผ้ช่วย (สำหรับท่านที่ไม่ค่อยมีเวลาอ่านเยอะ)</td>
                                <td class="text-center"><a href="./download/ex3.zip" target="_blank">ดาวน์โหลด</a></td>
                            </tr> 
                            <tr>
                                <td>สรุปย่อแนวข้อสอบอาชีวศึกษา</td>
                                <td class="text-center"><a href="./download/ex4.zip" target="_blank">ดาวน์โหลด</a></td>
                            </tr> 
                            <tr>
                                <td>แนวข้อสอบวิชาเอกคอมพิวเตอร์</td>
                                <td class="text-center"><a href="./download/ex_com.zip" target="_blank">ดาวน์โหลด</a></td>
                            </tr> 
                        </tbody>
                    </table>
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
  </body>
</html>