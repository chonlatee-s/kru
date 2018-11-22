<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/mystyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .fa {padding: 10px;font-size: 30px;width: 50px;text-align: center;text-decoration: none;margin: 5px 2px;}
            .fa:hover {opacity: 0.7;}
            .fa-facebook {background: #3B5998;color: white;}
            .fa-twitter {background: #55ACEE;color: white;}
            .fa-google {background: #dd4b39;color: white;}
        </style>
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
        <br>
        <div class="container mb-3">
            <div class="row mb-1 text-center">
                <div class="col-12">
                    <u>แนวข้อสอบครูผู้ช่วย (พร้อมเฉลย) โดย <?php echo $_GET['name'] ?></u>
                </div>
            </div>
            <div class="row mb-3 text-center">
                <div class="col-12">
                    <?php
                        echo"<a href='download.php?trainer=".$_GET['trainer']."&name=".$_GET['name']."'>[ดาวน์โหลดเป็น PDF คลิก]</a>";
                    ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-12 mx-auto">   
                    <table width="100%" >
                        <thead>
                        </thead>
                        <tbody style="font-size:12px;">
                            <?php
                                include('config.php');
                                $trainer = $_GET["trainer"];
                                $num=1;
                                try {
                                    $db = new PDO('mysql:host='.$HOST_NAME.';dbname='.$DB_NAME.';'.$CHAR_SET,$USERNAME,$PASSWORD);
                                    $sql = "SELECT * FROM exam WHERE ref_id_trainer='$trainer'";
                                    $query = $db->query($sql);

                                    while($r = $query->fetch()) {
                                        echo"<tr><td width='80'><b>ข้อที่ ".$num."</b></td> <td> <b>".$r['question']."</b></td></tr>";
                                        echo"<tr><td>ตัวเลือกที่ 1</td> <td>".$r['ch1']."</td><tr>";
                                        echo"<tr><td>ตัวเลือกที่ 2</td> <td>".$r['ch2']."</td><tr>";
                                        echo"<tr><td>ตัวเลือกที่ 3</td> <td>".$r['ch3']."</td><tr>";
                                        echo"<tr><td>ตัวเลือกที่ 4</td> <td>".$r['ch4']."</td><tr>";
                                        echo"<tr><td><u><b>เฉลย</b></u></td> <td><b>ตัวเลือกที่ ".$r['answer']."</b></td></tr>";
                                        echo"<tr><td colspan='2'><hr></td></tr>";
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
        </div>
    </body>
</html>