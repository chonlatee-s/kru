<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>เว็บฝึกทำข้อสอบครูผู้ช่วยออนไลน์</title>
    <style>
        .fa {padding: 10px;font-size: 30px;width: 50px;text-align: center;text-decoration: none;margin: 5px 2px;}
        .fa:hover {opacity: 0.7;}
        .fa-facebook {background: #3B5998;color: white;}
        .fa-twitter {background: #55ACEE;color: white;}
        .fa-google {background: #dd4b39;color: white;}
    </style>
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
    <div class="container mb-4">
        <div class="row text-center">
            <div class="col-12">   
                <p class="topicTop">รายชื่อผู้ร่วมแบ่งปันความรู้</p>
            </div>
        </div>
    </div>

    <div id="apply" class="container mb-3">
        <div class="row mb-3">
            <div class="col-10 mx-auto">   
                <div class="input-group">
                    <div class="input-group-prepend"><div class="input-group-text">ค้นหา</div></div>
                    <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="พิมพ์รายชื่อ . . .">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto">   
                <table id="myTable" class="table table-bordered table-striped table-sm">
                    <thead class="table-primary text-center">
                        <tr>
                            <th class="htable">ลำดับ</th>
                            <th class="htable">ชื่อ-นามสกุล</th>
                            <th class="htable">สังกัด</th>
                            <!-- <th class="htable">เปิดดู</th> -->
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
                <p class="ref float-right margin:0">หากต้องการร่วมสร้างสังคมแห่งการแบ่งปัน ติดต่อผู้ดูแลเว็บไซต์ได้ที่อีเมล <a href="mailto:kruphoochuay@gmail.com?Subject=สวัสดี" target="_top">kruphoochuay@gmail.com</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="https://www.facebook.com/sharer/sharer.php?u=http://ครูผู้ช่วย.com/credit.php" target="_blank" onclick="window.open(this.href, 'facebook-share','width=500,height=300');return false;" class="fa fa-facebook"></a>
                <a href="http://twitter.com/share?text=ฝึกทำแบบทดสอบครูผู้ช่วยออนไลน์&url=http://ครูผู้ช่วย.com/credit.php" target="_blank" onclick="window.open(this.href, 'facebook-share','width=500,height=300');return false;" class="fa fa-twitter"></a>
                <a href="https://plus.google.com/share?url=http://ครูผู้ช่วย.com/credit.php" target="_blank" onclick="window.open(this.href, 'facebook-share','width=500,height=300');return false;" class="fa fa-google"></a>
            </div>
        </div>
    </div>
    <br>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popover.min.js" ></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/bootstrap.min.js" ></script>
    <script src="./js/myjquery.js"></script>
    
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }       
            }
        }
    </script>
  </body>
</html>