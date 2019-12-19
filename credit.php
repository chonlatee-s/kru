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
                    <p class="topicTop">ผู้ร่วมแบ่งปันความรู้</p>
                </div>
            </div>
        </div>

        <div class="">
            <div class="row">
                <div class="col-md-10 col-sm-12 mx-auto">   
                    <table class="table table-bordered table-striped table-sm">
                        <thead class="table-primary text-center">
                            <tr>
                                <th class="htable">ลำดับ</th>
                                <th class="htable">ชื่อ-นามสกุล</th>
                                <th class="htable">สถานที่เรียน / ทำงาน</th>
                            </tr>
                        </thead>
                        <tbody class="bodytable">
                            <?php
                                include('config.php');
                                // $mode = $_POST["mode"];
                                try {
                                    $db = new PDO('mysql:host='.$HOST_NAME.';dbname='.$DB_NAME.';'.$CHAR_SET,$USERNAME,$PASSWORD);
                                    $sql = "SELECT * FROM credit ORDER BY qty DESC ,name";
                                    $query = $db->query($sql);
                                    $num=1;
                                    while($r = $query->fetch()) {
                                        echo"<tr><td>$num</td><td>".$r['name']."</td><td>".$r['place']."</td></tr>";
                                        // echo"<td align='center' style='margin:0; padding:0'><a href='view.php?trainer=".$r['id']."&name=".$r['name']."' target='_blank'><i class='fa fa-file-text-o' style='font-size:12px; color:gray; margin:0; pading:0'></i></a></td></tr>";
                                        $num++;
                                    }
                                }catch (PDOException $e) {
                                    echo "CANNOT CONNECT DATABASE : ".$e->getMessage();
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-10 mx-auto">
                    <p>หากต้องการร่วมสร้างสังคมแห่งการแบ่งปัน ติดต่อผู้ดูแลเว็บไซต์ได้ที่อีเมล <a href="mailto:kruphoochuay@gmail.com?Subject=สวัสดี" target="_top">kruphoochuay@gmail.com</a></p>
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
