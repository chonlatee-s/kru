<?php
$id = $_GET["new"];
include('../config.php');
	try {
        $db = new PDO('mysql:host='.$HOST_NAME.';dbname='.$DB_NAME.';'.$CHAR_SET,$USERNAME,$PASSWORD);
		$sql = " SELECT * FROM news WHERE id='$id' ";
        $query = $db->query($sql);

        while($r = $query->fetch()) {
            $topic = $r["topic"];
            $content = $r["content"];
            $files_picture = $r["files_picture"];
            if(!$files_picture) $files_picture = "no_picture.jpg";
            $ref = $r["ref"];
            $topic = $r["topic"];
        }


    } catch (PDOException $e) {
        echo "CANNOT CONNECT DATABASE : ".$e->getMessage();
   }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?=$topic?></title>
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
        include('../menu2.php');
    ?>
   <div class="container-fluid big_box">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">   
                    <p class="topicTop">เนื้อหาที่เกี่ยวข้อง</p>
                </div>
            </div>
        </div>
        <div class="container mb-3" id="contentAll">
            <div class="row mb-3">
                <div class="col-md-10 col-sm-12 mx-auto">   
                    <div class="container">
                        <h5><?php echo $topic ?></h5>
                        <div style="font-size:14px; padding-bottom:10px;">
                            <?php echo $content ?>
                        </div>
                        <img src="../myfile/<?php echo $files_picture?>" class="img-thumbnail mx-auto d-block" style="width:400px;" alt="สอบครูผู้ช่วย">
                        <p style="font-size:12px; font-weight:300; padding-top:10px;">ข้อมูลอ้างอิง <?php echo $ref?></p>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div id="footer" class="container footer text-center">
        <?php include('../share.php'); ?>
        <p style="font-size: 12px; color:gray">สงวนลิขสิทธิ์ © 2562 ครูผู้ช่วย.com</p>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.min.js" ></script>
  </body>
</html>