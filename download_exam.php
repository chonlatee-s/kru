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
                <div class="col-md-10 col-sm-12 mx-auto">   
                    <table id="myTable" class="table table-bordered table-striped table-sm">
                        <thead class="table-primary text-center">
                            <tr>
                                <th class="htable">หัวข้อ</th>
                                <th class="htable text-center" width="100">รายละเอียด</th>
                            </tr>
                        </thead>
                        <tbody class="bodytable">


                        <?php
                        include('config.php');
                            try {
                                $db = new PDO('mysql:host='.$HOST_NAME.';dbname='.$DB_NAME.';'.$CHAR_SET,$USERNAME,$PASSWORD);
                                $sql = " SELECT topic,link FROM exam_guidelines ORDER BY id DESC";
                                $query = $db->query($sql);

                                while($r = $query->fetch()) {
                        ?>
                                    <tr>
                                        <td style="font-size:14px;"><?=$r["topic"]; ?></td>
                                        <td class="text-center"><a href="<?=$r["link"]; ?>" target="_blank">รายละเอียด</a></td>
                                    </tr> 
                        <?php
                                }
                            } catch (PDOException $e) {
                                echo "CANNOT CONNECT DATABASE : ".$e->getMessage();
                            }
                        ?>

                            <!-- <tr>
                                <td>แจกฟรี!!! ข้อสอบครูผู้ช่วย ภาค ก.ภาษาไทย  (ข้อมูลจากเพจ อยากบรรจุต้องจำ โดยผอ.สุรเนตร)</td>
                                <td class="text-center"><a href="https://www.facebook.com/remember444/photos/pcb.578982065941079/578981925941093/?type=3&theater" target="_blank">รายละเอียด</a></td>
                            </tr> 
                            <tr>
                                <td>กฎหมาย ครู กทม.(2) (ข้อมูลจากเพจ อยากบรรจุต้องจำ โดยผอ.สุรเนตร)</td>
                                <td class="text-center"><a href="https://www.facebook.com/remember444/photos/pcb.584202008752418/584201305419155/?type=3&theater" target="_blank">รายละเอียด</a></td>
                            </tr> 
                            <tr>
                                <td>กฎหมาย ครู กทม. (ข้อมูลจากเพจ อยากบรรจุต้องจำ โดยผอ.สุรเนตร)</td>
                                <td class="text-center"><a href="https://www.facebook.com/remember444/photos/pcb.584119628760656/584119458760673/?type=3&theater" target="_blank">รายละเอียด</a></td>
                            </tr> 
                            <tr>
                                <td>สรุปมาตรฐานวิชาชีพ (ข้อมูลจากเพจ อยากบรรจุต้องจำ โดยผอ.สุรเนตร)</td>
                                <td class="text-center"><a href="https://www.facebook.com/remember444/posts/585133361992616?__xts__[0]=68.ARAgYIxTMvIuy8zIDW-zRei7lazARILa2CtugMAksMp-NNcwSJ7d2BBOKI1uqQsmY-vqdycn2ipkyDW7UDp6zi5GbdHxq3HODt6F0pCRqT0SxnvOP2fIViuEGeNx1MleMSVwp-KMR-F6uIXkROmoVgiR4tU5HIn4MkNpar-UIryrBn4XdH2rqy4u-rankzeI4dq3ErTa3LdT8h8ogwXwX0nGOO3meBMcw5uVfUB-S6kR9JMNutFGPKYBpCvOvqzIPxheOFEq0czWz7kP8M3sLSK9sH3bOtsGRE6NIm89le0i_KP63jp9DZfRPvR50aTFrXnSgEmzkQWqF3zSvG2_VaA_V4mrEXTzUtfP59duvJxOvAYD-ukIWA&__tn__=C-R" target="_blank">รายละเอียด</a></td>
                            </tr> 
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
                            </tr>  -->
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