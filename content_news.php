<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/mystyle.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
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
        include('./menu.php');
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

        <div id="apply" class="container mb-3">
            <div class="row">
                <div class="col-md-10 col-sm-12 mx-auto">   
                    <table id="myTable" class="table table-bordered table-striped table-sm">
                        <thead class="table-primary text-center">
                            <tr>
                                <th class="htable">หัวข้อ</th>
                                <th class="htable text-center" width="100">รายละเอียด</th>
                                <!-- <th class="htable">เปิดดู</th> -->
                            </tr>
                        </thead>
                        <tbody class="bodytable">
                    <?php
                        include('config.php');
                            try {
                                $db = new PDO('mysql:host='.$HOST_NAME.';dbname='.$DB_NAME.';'.$CHAR_SET,$USERNAME,$PASSWORD);
                                $sql = " SELECT id,topic FROM news ORDER BY id DESC";
                                $query = $db->query($sql);

                                while($r = $query->fetch()) {
                                    $id = $r["id"];
                                ?>
                                    <tr>
                                        <td style="font-size:14px;"><?=$r["topic"]; ?></td>
                                        <td class="text-center"><a href="./contents/news.php?new=<?=$id?>">รายละเอียด</a></td>
                                    </tr> 
                                <?php
                                }
                            } catch (PDOException $e) {
                                echo "CANNOT CONNECT DATABASE : ".$e->getMessage();
                        }
                    ?>
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
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
    <script src="./js/table.js"></script>
  </body>
</html>